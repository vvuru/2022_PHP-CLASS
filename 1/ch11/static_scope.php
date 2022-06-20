<?php
function A()
{
    global $n;
    print "$n<br>";
}

function B()
{
    $n="B";
    A();
}

$n="M";
print $n."<br>";
A();
B();