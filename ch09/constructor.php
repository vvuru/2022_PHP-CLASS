<?php
    class Fruit {
        private $name;
        private $color;
        private $price;
        
        //오버로딩(똑같은 이름의 함수 혹은 메소드를 여러개 만들수 있는 기법 - 자바 제외 덮어쓰기됨)
        //오버라이딩(메소드를 새롭게 재정의하는 것)
        function __construct($name, $price, $color=null) {
            $this->name = $name;
            $this->color = $color;
            $this->price = $price;
        }

        function print_fruit() {
            print "Name : {$this->name}<br>";
            print "Color : {$this->color}<br>";
            print "Price : {$this->price}<br>";
        }
    }

    $apple = new Fruit("Apple", 1000, "red");
    $banana = new Fruit(null, 500);

    $apple->print_fruit();
    $banana->print_fruit();