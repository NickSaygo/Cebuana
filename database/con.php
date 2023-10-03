<?php

    $server = 'localhost';
    $username = 'nickroot';
    $password = 'nickpassword';
    $dbname =  'cebuana_db';

    $connect = new mysql_connect($server, $username, $password, $dbname);

    if (! $connect) {
        die('Could not connect:' .mysql_error());
    }

    // else {
    //     echo ('Connected');
    // }
?>