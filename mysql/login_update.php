<?php include "db.php";?>
<?php include "functions.php";?>

<?php

if(isset($_POST['submit'])){
    updatetable();
    echo "User Updated";
}

?>


<?php include "include/header.php";?>
    <div class="container">
        <div class="col-xs-6">
           <h1 class="text-center">UPDATE USER</h1>
            <form action="login_update.php" method="post">
                <div class="form-group">
                   <label for="username">Username</label>
                   <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                   <label for="password">Password</label>
                   <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <select name="id" id="">
                       <?php
                            showAllData();
                       ?>
                    </select>
                </div>
                <div>
                    <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
                </div>
            </form>
        </div>
    </div>
<?php include "include/footer.php";?>
