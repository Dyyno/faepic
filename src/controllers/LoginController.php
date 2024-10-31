<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\UserHandler;

class LoginController extends Controller {

    public function signin() {
        $this->render('signin');
    }

    public function signup() {
        $this->render('signup');
    }

    public function signinAction() {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password');

        if ($email && $password) {
            $token = UserHandler::verifyLogin($email, $password);
            if ($token) {
                $_SESSION['token'] = $token;
                $this->redirect('/');   
            } else {
                $_SESSION['flash'] = 'E-mail e/ou senha não conferem.';
                $this->redirect('/login');
            }
        } else {
            $this->redirect('/login');
        }
    }

    public function signupAction() {
        $username = filter_input(INPUT_POST, 'username');
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password');

        if ($username && $email && $password) {

            if (UserHandler::emailExists($email) === false) {
                $token = UserHandler::addUser($username, $email, $password); 
                $_SESSION['token'] = $token;
                $this->redirect('/');   
            } else {
                $_SESSION['flash'] = 'E-mail já cadastrado.';
                $this->redirect('/cadastro');
            }
            
        } else {
            $this->redirect('/cadastro');
        }
    }
}