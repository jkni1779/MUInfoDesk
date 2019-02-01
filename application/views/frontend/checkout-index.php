<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="/assets/checkout-index.js"></script>
    <link rel="stylesheet" type="text/css" href="/assets/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Checkout</title>
    <style></style>
</head>
<header>

    <h1>Iowa State University</h1>
    <h2>Memorial Union Equipment Checkout</h2>
    <h5> Please select one of the following options.
        For individual equipment checkouts, please click other</h5>

</header>
<body>

    <div class ="topnav">
        <a class="active" href="<?php echo base_url()?>Main/frontendhome">Home</a>
        <a class="active" href="<?php echo base_url()?>Main/frontendhome">Previous Page</a>
        <a class="active" href="<?php echo base_url()?>Main/backendhome">Backend</a>
    </div>

    <div class="dropdown">

        <button onclick="myFunction('myDropdown')" class="dropbtn">Preset</button>
        <div id="myDropdown" class="dropdown-content">

            <a href="checkout-auth.html">ITAV</a>
            <a href="checkout-auth.html">AV Tech</a>
            <a href="checkout-auth.html">BM</a>
            <a href="checkout-auth.html">ABM</a>
            <a href="checkout-auth.html">Workspace</a>
            <a href="checkout-auth.html">Cybowl</a>

        </div>

        <button onclick="myFunction('OTHERdropdown')" class="dropbtn">Other</button>
        <div id="OTHERdropdown" class="dropdown-content">

            <a href="checkout-auth.html">Key Checkout</a>
            <a href="checkout-auth.html">Technology</a>
            <a href="checkout-auth.html">MU Polo</a>
            <a href="checkout-auth.html">Cash Bag</a>

        </div>

    </div>
    <div class="end"></div>

</body>