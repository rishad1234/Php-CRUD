<?php

    print_r($_POST);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            post
        </title>
    </head>
    <body>
        <form action="post.php" method = "post">
            <input type = "text" placeholder="Enter name: " name = "name"><br><br>
            <input type = "submit" name = "submit">
        </form>
    </body>
</html>