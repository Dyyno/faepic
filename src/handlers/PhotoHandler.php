<?php
namespace src\handlers;

use \src\models\User;
use \src\models\Photo;

class PhotoHandler {
    public static function getPhotosByClass($class) {
        $photos = Photo::select()
            ->where('turma', $class)
        ->get();
        return $photos;
    }

    public static function checkPhotoExists($id) {
        $data = Photo::select()->where('id', $id)->one();
        if (count($data) > 0) {
            $photo = new Photo();
            $photo->id = $data['id'];
            $photo->photo = $data['photo'];
            $photo->description = $data['description'];
            $photo->id_user = $data['id_user'];
            $photo->ativo = $data['ativo'];
            $photo->turma = $data['turma'];
            return $photo;
        }
        return false;
    }


    public static function compressImage($source, $destination, $quality) {
        $info = getimagesize($source);

        if ($info['mime'] == 'image/jpeg') {
            $image = imagecreatefromjpeg($source);
            imagejpeg($image, $destination, $quality);
        } elseif ($info['mime'] == 'image/png') {
            $image = imagecreatefrompng($source);
            // PNG usa compressão inversa (0 para maior qualidade e 9 para maior compressão)
            $pngQuality = (int) (9 * (100 - $quality) / 100);
            imagepng($image, $destination, $pngQuality);
        }

        imagedestroy($image);
    }

    public static function resizeToPortrait($source, $destination, $newWidth, $newHeight) {
            // Obter informações da imagem
        $info = getimagesize($source);
        $width = $info[0];
        $height = $info[1];
        $mime = $info['mime'];

        // Verificar se a imagem já está no formato portrait
        if ($width > $height) {
            // A imagem está em landscape (paisagem), então inverteremos as dimensões
            // O objetivo aqui é garantir que a imagem seja redimensionada corretamente para portrait
            $scale = $newHeight / $height; // Escalar pela altura fixa
            $resizedWidth = round($width * $scale); // A largura será proporcional à altura
            $resizedHeight = $newHeight; // Altura fixa
        } else {
            // A imagem já está em portrait, redimensionar diretamente
            $scale = $newHeight / $height; // Escalar pela altura
            $resizedWidth = round($width * $scale); // Manter a proporção da largura
            $resizedHeight = $newHeight; // Altura fixa
        }

        // Criar um novo recurso de imagem baseado no tipo MIME
        switch ($mime) {
            case 'image/jpeg':
                $image = imagecreatefromjpeg($source);
                break;
            case 'image/png':
                $image = imagecreatefrompng($source);
                break;
            case 'image/webp':
                $image = imagecreatefromwebp($source);
                break;
            default:
                die("Tipo de imagem não suportado.");
        }

        // Criar a nova imagem redimensionada
        $newImage = imagecreatetruecolor($resizedWidth, $resizedHeight);

        // Redimensionar a imagem
        imagecopyresampled($newImage, $image, 0, 0, 0, 0, $resizedWidth, $resizedHeight, $width, $height);

        // Salvar a nova imagem
        switch ($mime) {
            case 'image/jpeg':
                imagejpeg($newImage, $destination, 85); // Qualidade 85% para JPEG
                break;
            case 'image/png':
                imagepng($newImage, $destination);
                break;
            case 'image/webp':
                imagewebp($newImage, $destination);
                break;
        }

        // Limpar a memória
        imagedestroy($image);
        imagedestroy($newImage);
    }

    // Função para reduzir a qualidade da imagem
    public static function addPhoto($desc, $turma, $photo, $user) {
        $targetDir = "media/";
        $photoName = md5(time().rand(0,9999)) . "." . pathinfo($photo["name"], PATHINFO_EXTENSION); // Cria um nome aleatório para o arquivo
        $targetFile = $targetDir . $photoName;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Verifica se o arquivo é uma imagem válida
        $check = getimagesize($photo["tmp_name"]);
        if ($check === false) {
            die("O arquivo enviado não é uma imagem.");
        }

        // Permite apenas alguns tipos de imagem
        $allowedTypes = ['jpg', 'jpeg', 'png', 'webp'];
        if (!in_array($imageFileType, $allowedTypes)) {
            die("Apenas JPG, JPEG, PNG e WEBP são permitidos.");
        }

        PhotoHandler::resizeToPortrait($photo["tmp_name"], $targetFile, 300, 600);

        // Verifica se a compressão foi feita e move o arquivo para a pasta de uploads
        // if (move_uploaded_file($photo["tmp_name"], $targetFile)) {
        //     echo "Imagem original carregada com sucesso.<br>";
        //     echo "Imagem comprimida salva em: " . $compressedImage;
        // } else {
        //     echo "Desculpe, houve um erro ao fazer o upload.";
        // }

        Photo::insert([
            'description' => $desc,
            'turma' => $turma,
            'photo' => $photoName,
            'id_user' => $user,
            'ativo' => 'no'
        ])->execute();
    }

    public static function getDesactivatedPhotos() {
        $photos = Photo::select()
            ->where('ativo', 'no')
            ->get();
        return $photos;
    }

    public static function acceptPhoto($idphoto) {
        $check = Photo::select()->where('id', $idphoto)->one();
        if ($check) {
            Photo::update()
                ->set('ativo', 'yes')
                ->where('id', $idphoto)
            ->execute();

            return true;
        }      

        return false;
    }

    public static function rejectPhoto($idphoto) {
        $check = Photo::select()->where('id', $idphoto)->one();
        if ($check) {
            Photo::delete()
                ->where('id', $idphoto)
            ->execute();

            return true;
        }      

        return false;
    }

}