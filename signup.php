<?php
    $title = 'Courselogin-Signup';
    $status_s = 'active';
    include_once 'db/conn.php';
    include_once 'includes/header.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// if (isset($_POST['register_btn'])) {
    echo $fname = trim($_POST['fname']);
    echo $lname = trim($_POST['lname']);
    echo $phone = trim($_POST['phone']);
    echo $gender = trim($_POST['gender']);
    echo $email = trim($_POST['email']);
    echo $password = trim($_POST['password']);
    echo $confirm_password = trim($_POST['confirm_password']);
    
    
    

    // Checking if textbox empty
    if (empty($fname) || empty($lname) || empty($phone) || empty($gender) || empty($email) || empty($password) || empty($confirm_password)) {
        $erroempty = '<div class="alert alert-danger"><h6>field can not be empty</h6></div>';



    } else {  
        $emailresult = $vuser->getuserbyemail($email);
        if ($emailresult['num'] > 0) {
            $exist = '<div class="alert alert-danger"><h6>Email address already exist</h6></div>';
            // echo 'Email address already exist';
        } else {
            $issuccess = $vuser->insertuser($fname,$lname,$phone,$gender,$email,$password);
            while (!$issuccess) {
                include_once 'form.php';
                
            }
            if ($issuccess) {

                echo 'you have successfully signup';
                header('location:code.php');   
                
            }
        }
    }
}

?>





<?php
include_once 'signupform.php';

?>


   
<?php

?>   
<?php
    include_once 'includes/footer.php';
?>
