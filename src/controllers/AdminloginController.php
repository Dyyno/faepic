<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\AdminHandler;

class AdminloginController extends Controller
{
    public function signin() {
        $this->render('login-admin');
    }

    public function loginAction() {
        $username = filter_input(INPUT_POST, 'username');
        $password = filter_input(INPUT_POST, 'password');

        if ($username && $password) {
            $token = AdminHandler::verifyLogin($username, $password);
            if ($token) {
                $_SESSION['tokenAdmin'] = $token;
                $this->redirect('/admin');   
            } else {
                $_SESSION['flashAdmin'] = 'E-mail e/ou senha não conferem.';
                $this->redirect('/login-admin');
            }
        } else {
            $this->redirect('/login-admin');
        }
    }

}
