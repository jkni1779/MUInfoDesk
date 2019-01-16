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

    <div class ="topnav">
        <a class="active" href="<?php echo base_url()?>Main/frontendhome">Home</a>
        <a href="<?php echo base_url()?>Main/backendhome">Backend</a>
    </div>

    <div style="position: center">
        <a href="<?php echo base_url()?>Main/checkout" class="dropbtn">Check Out</a>
        <a href="<?php echo base_url()?>Main/checkin" class="dropbtn">Check In</a>
    </div>

</body>
</html>