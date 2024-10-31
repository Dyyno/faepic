<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\CourseHandler;
use src\handlers\UserHandler;

class HomeController extends Controller
{

    private $loggedUser;

    public function __construct()
    {
        $this->loggedUser = UserHandler::checkLogin();

        if ($this->loggedUser === false) {
            $this->redirect('/login');
        }
    }

    public function index()
    {
        $this->render('home');
    }

    public function pegarCursos()
    {
        $curso = filter_input(INPUT_GET, 'curso');
        $data = CourseHandler::getClasses($curso);
        $this->render('pegar-cursos', [
            'data' => $data
        ]);
    }
}
