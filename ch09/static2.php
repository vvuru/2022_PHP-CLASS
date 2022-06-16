<?php

class Computer {
    public static $brand="";
    public $price;

    function __construct(){
        self::$brand="";
        $this->init();
    }

    function init() {
        self::$brand="";
    }

    static function setBrand($brand){
        self::$barnd=$brand;
    }

    function myPrint() {
        print "컴퓨터 브랜드는 " . self::$brand . ", 가격은 {$this->price}입니다 <br>";
    }

    static function myPrint() {
        print "컴퓨터 브랜드는 " . self::$brand . ", 가격은 {$this->price}입니다 <br>"; 
    }
    // static이 붙지않은 멤버필드만 사용하지않는다면 언제든 사용가능
}

Computer::$brand = "LG";

$c= new Computer();
$c->price = 10,000;
$c->myPrint();

$c2 = new Computer();
$c2->price = 20,000;
$c2->myPrint();

// Computer::$brand = "Samsung";
Computer::setBrand("Samsung");
$c->myPrint();
$c2->myPrint();


