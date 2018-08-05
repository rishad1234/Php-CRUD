<?php
    if(isset($_POST['submit'])){
        $username = $_POST['name'];
        $password = $_POST['password'];
        $minimum = 5;
        $maximum = 15;
        $names = array ("edwin", "student", "peter");
//        echo (string) $username . " " . (string) $password;
        if(strlen($username) > $minimum && strlen($username) < $maximum){
            echo "name is good<br>";
        }else{
            echo "name is not good<br>";
        }
        
        if(!in_array($username, $names)){
            echo "not allowed<br>";
        }else{
            echo "welcome<br>";
        }
    }
?>