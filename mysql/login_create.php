<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php
createrows();
?>

<?php include "include/header.php";?>
    <div class="container">
       <h1 class="text-center">CREATE USER</h1>
        <div class="col-xs-6">
            <form action="login_create.php" method="post">
                <div class="form-group">
                   <label for="username">Username</label>
                   <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                   <label for="password">Password</label>
                   <input type="password" name="password" class="form-control">
                </div>
                <div>
                    <input class="btn btn-primary" type="submit" name="submit" value="CREATE">
                </div>
            </form>
        </div>
    </div>
<?php include "include/footer.php"?>
