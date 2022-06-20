<?php
    // Access Modifier
    // 접근제어 지시자
    // 접근지시어
    // 접근제어자
    // java: private default protected public
    class Student {
        public $cnt = 3;
        public $studentId;
        public $studentName;

        public function printStudent($id, $name) {
            print "ID : {$id}<br>";
            print "Name : {$name}<br>";

            if($this->cnt == 0) {
                return;
            }
            $this->cnt--;
            $this->printStudent("111", "222");
        }
    }

    function printStudent($id, $name) {
        print "dddd : {$id}, {$name}";
    }

    $obj = new Student;
    $obj->studentId = 20171234;
    $obj->studentName = "Alice";
    $obj->printStudent($obj->studentId, $obj->studentName);

    printStudent("kkkk", "gggg");

    