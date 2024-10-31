<?php
namespace src\handlers;

use \src\models\Curso;
use src\models\Turma;

class CourseHandler {
    public static function getCourses() {
        $courses = Curso::select()->get();
        return $courses;
    }

    public static function getClasses($curso) {
        $classes = Turma::select()->where('curso', $curso)->get();
        return $classes;
    }

    public static function checkTurmaExists($idTurma) {
        $data = Turma::select()->where('id', $idTurma)->one();
        if ($data) {
            $turmas = new Turma();
            $turmas->id = $data['id'];
            $turmas->turma = $data['turma'];
            return $turmas;
        }
        return false;
    }

    public static function getTurmaIdByName($turma) {
        $data = Turma::select()->where('turma', $turma)->one();
        if ($data) {
            return $data['id'];
        }
        return false;
    }
}