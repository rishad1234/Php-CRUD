<?php
    include "db.php";
    function show_the_ids(){
        global $connection;
        $query = "SELECT * FROM users";
        $result = mysqli_query($connection, $query);
        
        if(!$result){
            die("query failed" .  mysqli_error());
        }

        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            echo "<option value='$id'>$id</option>";
        }
    }

    function update_data(){
        global $connection;
        $username = $_POST['username'];
        $password  = $_POST['password'];
        $id = $_POST['id'];
        
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);
        
        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = '$id'";
        
        $result = mysqli_query($connection, $query);
        
        if(!$result){
            die("nothing found" . mysqli_error($connection));
        }else{
            echo "record updated";
        }   
    }

    function delete_data(){
        global $connection;
        $username = $_POST['username'];
        $password  = $_POST['password'];
        $id = $_POST['id'];
        
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);
        
        $query = "DELETE FROM users ";
        $query .= "WHERE id = '$id'";
        
        $result = mysqli_query($connection, $query);
        
        if(!$result){
            die("nothing found" . mysqli_error($connection));
        }else{
            echo "record deleted";
        }      
    }
    
    function create_rows(){
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password']; 
        
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);
        
        $hashFormat = "$2y$10$";
        $salt = "iusesomecrazystrings22";
        $hash_and_salt = $hashFormat . $salt;
        $password = crypt($password, $hash_and_salt);
        
        $query = "INSERT INTO users(username, password) ";
        $query .= "VALUES ('$username', '$password')";
        $result = mysqli_query($connection, $query);
        
        if(!$result){
            die("die bitch");
        }else{
            echo "record created";
        }
    }

    function read_data(){
        global $connection;
        $query = "SELECT * FROM users";
        $result = mysqli_query($connection, $query);

        if(!$result){
            die("query failed" .  mysqli_error());
        }
        
        while($row = mysqli_fetch_assoc($result)){
            print_r($row);
        } 
    }

?>





















