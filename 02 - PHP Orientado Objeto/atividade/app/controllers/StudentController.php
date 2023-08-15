<?php

    namespace app\controllers;

    use app\database\models\Student;

    class StudentController {

        private $student;

        public function __construct() {
            $this->student = new Student();
        }

        public function read() {
            return json_encode($this->student->all());
        }

        public function monitor() {

        }

        public function create($data) {

            try {
                $response = $this->student->create(
                    array('nome' => $data['nome'], 'turma' => $data['turma'])
                );
            } catch(Exception $e) {
                return false;
            }

            return json_encode($response);
        }

        public function update($data) {

        }

        public function delete($data) {

        }
    }