<?php
//    echo "hello";
//    $name = "rishad";
//    echo $name;
//    if(3 > 10){
//        $name = "<h1>rishadul islam khan</h1>";
//        echo $name;
//    }else{
//        echo "no no no";
//    }


//    $number  = 34;
//    switch($number){
//        case 34: 
//            echo "34";
//            break;
//        case 10:
//            echo "10";
//            break;
//        case 12: 
//            echo "12";
//            break;
//    }


//    $number = 0;
//    while($number <= 100){
//        $str  =(string)$number;
//        echo $str . " ";
//        $number += 1;
//    }
    
    
//    for($counter = 0; $counter <= 100; $counter++){
//        echo (string) $counter . " ";
//    }


//    $numbers = [10, 11, 12, 13, 1, 2, 4, 6];
//    foreach($numbers as $number){
//        echo (string)$number . " ";
//    }


//    function printToscreen($number){
//        echo "hello from php" . " " . (string)$number; 
//    }
//    printToScreen(100);

    
//    function sum($number1, $number2){
//        return $number1 + $number2;
//    }
//
//    $add = sum(10, 20);
//    echo (string)$add;


//    define("NAME", 1000);
//    echo NAME;

//    if(isset($_POST['submit'])){
//        $username = $_POST['name'];
//        $password = $_POST['password'];
//        $minimum = 5;
//        $maximum = 15;
//        $names = array ("edwin", "student", "peter");
////        echo (string) $username . " " . (string) $password;
//        if(strlen($username) > $minimum && strlen($username) < $maximum){
//            echo "name is good<br>";
//        }else{
//            echo "name is not good<br>";
//        }
//        
//        if(!in_array($username, $names)){
//            echo "not allowed<br>";
//        }else{
//            echo "welcome<br>";
//        }
//    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Form control
        </title>
    </head>
    <body>
        <form action="form_process.php" method = "post">
            <input type = "text" placeholder="Enter name: " name = "name"><br><br>
            <input type = "password" placeholder = "Password: " name = "password"><br><br>
            <input type = "submit" name = "submit">
        </form>
    </body>
</html>
























