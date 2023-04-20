<?php
    $title = 'Courselogin-Welcome';
    $status_s = 'active';
    include_once 'includes/header.php';
    require_once 'db/conn.php';
    
    if (isset($_POST['register_btn'])) {
        echo $fname = trim($_POST['fname']);
        echo $lname = trim($_POST['lname']);
}
//include_once 'signupform.php';
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="alert alert-success" role="alert">
                <h1>Welcome! on board <?php //echo $fname. ' ' . $lname; ?></h1>
                <h1>Operation completed, You have successfully signup Please! click the button below to login</h1>
            </div>
            <button type="button" class="btn"><a href="login.php">Login</a></button>
            
        </div>
    </div>
</div>

