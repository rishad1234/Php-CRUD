<?php
    print_r($_GET);
    
?>

<html>
    <head>
        <title>
            Document
        </title>
    </head>
    <body>
        <?php
            $id = 10;
            $button = "Click here";
        ?>
        <a href="get.php?id=<?php echo $id?>"><?php echo $button?></a>
    </body>
</html>