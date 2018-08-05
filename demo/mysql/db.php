<?php
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    if($connection){
    }else{
        die("database not found");
    }
?>