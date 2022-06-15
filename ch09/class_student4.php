<?php
    class Student {        
        private $studentId;
        private $studentName;

        function __construct() {}

        public function printStudent() {
            print "ID : {$this->studentId}<br>";
            print "Name : {$this->studentName}<br>";
        }

        public function getStudentId() {
            return $this->studentId;
        }

        public function setStudentId($studentId) {
            $this->studentId = $studentId;
            return $this;
        }
    }

    $obj = new Student();
    //print $obj->setStudentId(1122)->getStudentId() . "<br>";      
    print "1번째 : " . $obj->setStudentId(1122)->getStudentId() . "<br>";

    $obj2 = new Student;
    print $obj2->setStudentId(8888)->getStudentId() . "<br>";  
    print "2번째 : " . $obj->getStudentId() . "<br>";

   // $obj->printStudent();




    