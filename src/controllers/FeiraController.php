<?php
namespace src\controllers;

use \core\Controller;

class FeiraController extends Controller
{

    public function index(){
        $this->render('feira');
    }

    public function hub(){
        $this->render('hub');
    }

    public function hulls(){
        $this->render('hulls');
    }

    public function panela(){
        $this->render('panela');
    }

    public function apparatus(){
        $this->render('apparatus');
    }

    public function berners(){
        $this->render('berners');
    }

    public function tinkerguide(){
        $this->render('tinkerguide');
    }

}
