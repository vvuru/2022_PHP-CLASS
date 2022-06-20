<?php
    $host = gethostbyname("127.0.0.1");
    $port = 20213;
    set_time_limit(0);
    $maxdevice = 5;
    if(($sock = socket_create(AF_INET, SOCK_STREAM, 0)) < 0) {
        echo "socket_create() failed: reason : " . socket_strerror($sock) . "<br>";
    } 
    if(($ret = socket_bind($sock, $host, $port) < 0)) {
        echo "socket_bind() failed: reason : " . socket_strerror($ret) . "<br>";
    }
    if(($ret = socket_listen($sock, $maxdevice)) == false) {
        echo "socket_listen() failed: reason : " . socket_strerror($ret) . "<br>";
    }

    $clients = [$sock];
    $reply = "";
    $write = array();
    $except = array();
    $read[0] = $sock;
    while(true) {        
        if(socket_select($read, $write, $except, $tv_sec = 5) < 1) {
            if(in_array($sock, $read)) {
                $c_accept = socket_accept($sock) or die("Could not accept incoming connection.");
                $clients[] = $c_accept;

                $key = array_search($sock, $read);
                unset($read[$key]);
            }

            if(count($read) > 0) {

                foreach($read as $current_sock) {
                    $msg = socket_read($current_sock, 2048) or die ("Could not read input\n");
                    $reply .= trim($msg);
                    echo "Client says:\t $msg <br><br>";

                    foreach($clients as $client) {
                        socket_write($client, $reply, strlen($reply)) or die ("Coult not write output\n");
                    }
                }
            }
        }
    }

    socket_close($sock);