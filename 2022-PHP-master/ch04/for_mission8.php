<?php
$star = rand(2, 10);

/*
    만약에 star 값이 2
    **
    **

    만약에 star 값이 4
    ****
    ****
    ****
    ****

    */
print "star : $star <br>";
for ($i = 0; $i < $star; $i++) {

    for ($z = 0; $z < $star; $z++) {
        if ($z > 0) {
            print " ";
        }
        print "*";
    }
    print "<br>";
}
