<?php
    include "db.php";
    include "functions.php";

    if(isset($_POST['submit'])){
        create_rows();
    }

?>

<?php
    include "includes/header.php";
?>

        <div class = "container">
            <h1 class = "text-center">Create</h1>
            <div class = "col-xs-6">
                <form action="login_create.php" method = "post">
                    <div class = "form-group">
                        <label for = "username">Username</label>
                        <input type = "text" class = "form-control" name = "username">
                    </div>
                    <div class = "form-group">
                        <label for = "password">Password</label>
                        <input type = "password" class = "form-control" name = "password">
                    </div>
                    <input type = "submit" name = "submit" value = "Create" class = "btn btn-danger">
                </form>
            </div>
        </div>

<?php
    include "includes/footer.php";
?>




























