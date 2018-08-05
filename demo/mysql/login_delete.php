<?php
    include "db.php";
    include "functions.php";

    if(isset($_POST['submit'])){
        delete_data();
    }

?>

<?php
    include "includes/header.php";
?>

        <div class = "container">
            <div class = "col-xs-6">
                <h1 class = "text-center">Delete</h1>
                <form action="login_delete.php" method = "post">
                    <div class = "form-group">
                        <label for = "username">Username</label>
                        <input type = "text" class = "form-control" name = "username">
                    </div>
                    <div class = "form-group">
                        <label for = "password">Password</label>
                        <input type = "password" class = "form-control" name = "password">
                    </div>
                    <div class = "form-group">
                        <select name="id" id="">
                            <?php
                                show_the_ids();
                            ?>
    <!--                        <option value="">1</option>-->
                        </select>
                    </div>
                    <input type = "submit" name = "submit" value = "Delete" class = "btn btn-danger">
                </form>
            </div>
        </div>

<?php
    include "includes/footer.php";
?>