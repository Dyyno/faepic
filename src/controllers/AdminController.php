<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\AdminHandler;
use src\handlers\PhotoHandler;

class AdminController extends Controller
{
    private $loggedAdmin;

    public function __construct()
    {
        $this->loggedAdmin = AdminHandler::checkLogin();

        if ($this->loggedAdmin === false) {
            $this->redirect('/login-admin');
        }
    }

    public function index() {
        $photos = PhotoHandler::getDesactivatedPhotos();
        $this->render('admin', [
            'photos' => $photos
        ]);
    }

    public function accept($idphoto) {
        $check = PhotoHandler::acceptPhoto($idphoto);
        $this->redirect('/admin');
    }

    public function reject($idphoto) {
        $check = PhotoHandler::rejectPhoto($idphoto);
        $this->redirect('/admin');
    }

}
