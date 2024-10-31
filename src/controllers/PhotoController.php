<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\CourseHandler;
use src\handlers\UserHandler;
use src\handlers\PhotoHandler;

class PhotoController extends Controller
{

    private $loggedUser;

    public function __construct()
    {
        $this->loggedUser = UserHandler::checkLogin();

        if ($this->loggedUser === false) {
            $this->redirect('/login');
        }
    }

    public function index($atts = [])
    {     
        $photo = PhotoHandler::checkPhotoExists($atts['idphoto']);
        if ($photo === false) {
            $this->redirect('/');
        }

        if ($photo->ativo != 'yes') {
            $this->redirect('/');
        }

        $photoTurmaId = CourseHandler::getTurmaIdByName($photo->turma);
        $photoUser = UserHandler::searchById($photo->id_user);

        $this->render('photo', [
            'photo' => $photo,
            'photoTurmaId' => $photoTurmaId,
            'photoUser' => $photoUser
        ]);
    }

    public function newPhoto() {
        $this->render('new-photo', [
            'user' => $this->loggedUser
        ]);
    }
    
    public function pegarCursos() {
        $curso = filter_input(INPUT_GET, 'curso');
        $data = CourseHandler::getClasses($curso);
        $this->render('pegar-cursos-foto', [
            'data' => $data
        ]);
    }

    public function newPhotoAction() {
        $desc = filter_input(INPUT_POST, 'description');
        $turma = filter_input(INPUT_POST, 'turma');
        $photo = $_FILES['image'];
        $user = filter_input(INPUT_POST, 'id_user');
        if ($desc && $turma && $photo && $user) {
            PhotoHandler::addPhoto($desc, $turma, $photo, $user);
            $_SESSION['flash'] = 'Foto adicionada com sucesso! Foto indo para a verificação.';
            $this->redirect('/');
        }
    }


}
