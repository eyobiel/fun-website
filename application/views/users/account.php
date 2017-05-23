<!DOCTYPE html>
<html lang="en">  
<head>
<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
</head>
<body>
<div class="container">
    <h2>User Account</h2>
    <h3>Welcome <?php echo $user['first_name']; ?>!</h3>
    <div class="account-info">
        <p><b>First Name: </b><?php echo $user['first_name']; ?></p>
        <p><b>Last Name: </b><?php echo $user['last_name']; ?></p>
        <p><b>Email: </b><?php echo $user['email']; ?></p>
        <p><b>Post Code: </b><?php echo $user['post_code']; ?></p>
        
        
        
    </div>
</div>
</body>
</html>
