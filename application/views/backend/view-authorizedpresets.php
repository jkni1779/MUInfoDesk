<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Database View Authorized Presets</title>
    <link rel="stylesheet" type="text/css" href="/assets/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<header>

    <h1>Iowa State University</h1>
    <h2>Memorial Union Equipment Checkout</h2>

</header>
<body>

    <div class ="topnav">
        <a class="active" href="<?php echo base_url()?>Main/backendhome">Home</a>
        <a class="active" href="<?php echo base_url()?>Main/viewalldatabase">Previous Page</a>
        <a href="<?php echo base_url()?>Databaseview/logout">Logout</a>
    </div>

    <div class="table-responsive">
        <br>
        <h4> Authorized Presets </h4>  
        <br>
        <table class="table table-hover">
            <tr>
                <th>UID</th>
                <th>PresetID</th>
                <th>Delete</th>
            </tr>
            <?php
            if($fetch_authorized_presets->num_rows() > 0)
            {
                foreach($fetch_authorized_presets->result() as $row)
                {
            ?>
                <tr>
                    <td><?php echo $row->UID; ?></td>
                    <td><?php echo $row->presetID; ?></td>
                    <td><a href="#" class="delete_data_authorized_presets" id="<?php echo $row->UID; ?>">Delete</td>
                </tr>
            <?php
                }
            }
            else
            {
            ?>
                <tr>
                    <td colspan="3">No Data Found</td>
                </tr>
            <?php 
            }
            ?>
        </table>
    </div>
    <script>
        $(document).ready(function(){
            $('.delete_data_authorized_presets').click(function(){
                var id = $(this).attr("id");
                if(confirm("Are you sure you want to delete this?"))
                {
                    window.location="<?php echo base_url();?>Databaseview/delete_data_authorized_presets/"+id;
                    return true;
                }
                else
                {
                    return false;
                }

            });
        });
    </script>

</body>
</html>