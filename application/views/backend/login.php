<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="/assets/style.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<header>

    <h1>Iowa State University</h1>
    <h2>Memorial Union Equipment Checkout</h2>

</header>
<body>
    <div class="container">
        <br /><br /><br />
        <form method="post" action="<?php echo base_url(); ?>Databaseview/login_validation">
            <div class="form-group">
                <label>Enter Username</label>
                <input type="text" name="username" class="form-control" />
                <span class="text-danger"><?php echo form_error("username");?></span>

            </div>
            <div class="form-group">
                <label>Enter Password</label>
                <input type="password" name="password" class="form-control" />
                <span class="text-danger"><?php echo form_error("password");?></span>
            </div>
            <div class="form-group">
                <label>Enter Password</label>
                <input type="submit" name="insert" value="Login" />
                <?php
                echo $this->session->flashdata("error");
                ?>
            </div>
        </form>
    </div>

</body>
</html>