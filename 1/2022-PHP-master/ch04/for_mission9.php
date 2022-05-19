<?php
$star = rand(3, 10);

/*
    만약에 star 값이 3이면
    *
    **
    ***

    만약에 star 값이 4이면
    *
    **
    ***
    ****
*/
/*
print "star : $star <br>";
for ($i = 0; $i < $star; $i++) {
    for ($z = 0; $z < $star; $z++) {
        if ($i >= $z) {
            print "* ";
        }
    }
    print "<br>";
}
*/
print "star : $star <br>";
for ($i = 0; $i < $star; $i++) {
    for ($z = 0; $z <= $i; $z++) {
        print "* ";
    }
    print "<br>";
}

print "star : $star <br>";
for ($i = 0; $i < $star; $i++) {
    $sum = $sum . "@";
    print "${sum} <br>";
}
