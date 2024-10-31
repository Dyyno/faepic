<?php
namespace src\handlers;

use \src\models\Curso;
use src\models\Turma;
use src\models\Admin;

class AdminHandler {
    public static function checkLogin() {
        if (!empty($_SESSION['tokenAdmin'])) {
            $token = $_SESSION['tokenAdmin'];

            $data = Admin::select()->where('token', $token)->one();
            if (count($data) > 0) {
                $loggedUser = new Admin();
                $loggedUser->id = $data['id'];
                $loggedUser->username = $data['username'];

                return $loggedUser;
            }
        }

        return false;
    }

    public static function verifyLogin($username, $password) {
        $user = Admin::select()->where('username', $username)->one();

        if ($user) {
            if ($password == $user['password']) {
                $token = md5(time().rand(0, 9999).time());
                Admin::update()
                    ->set('token', $token)
                    ->where('username', $username)
                ->execute();

                return $token;
            }
        }

        return false;
    }
}