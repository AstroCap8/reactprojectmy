<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'gamedb');

    if(!$connect){
        die('Error connect to GameBD');
    }

?>