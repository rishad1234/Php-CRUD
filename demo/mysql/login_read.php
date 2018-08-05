<?php

    include "db.php";
    include "functions.php";

?>
<?php
    include "includes/header.php";
?>

    <div class = "container">
        <div class = "col-xs-6">
            <h1 class = "text-center">Read</h1>
            <pre style = "color : red">
            <?php
            read_data();
            ?>
            </pre>
        </div>
    </div>

<?php
    include "includes/footer.php";
?>


