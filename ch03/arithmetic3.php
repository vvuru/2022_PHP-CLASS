<?php
    // && : true 만들기가 힘듬. false 만들기 쉬움.
    // || : false 만들기가 힘듬. true 만들기 쉬움.

    $name = 1;
    
    if(1 && 1 && -1 && 5 && 'a' && $name)
    {
        print "나는 진실이다<br>";
    }

    if(0 || 1 || 0 || 1)
    {
        print "I'm true";
    }
?>