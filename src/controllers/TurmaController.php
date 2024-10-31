<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\CourseHandler;
use src\handlers\UserHandler;
use src\handlers\PhotoHandler;

class TurmaController extends Controller
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
        $turma = CourseHandler::checkTurmaExists($atts['idturma']);
        if ($turma === false) {
            $this->redirect('/');
        }
        $photosTurma = PhotoHandler::getPhotosByClass($turma->turma);

        $this->render('turma', [
            'turmas' => $turma,
            'photos' => $photosTurma
        ]);
    }

}
