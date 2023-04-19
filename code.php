<?php
    $title = 'Courselogin-Signup';
    $status_s = 'active';
    include_once 'includes/header.php';
    
    
if (isset($_POST['register_btn'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $fname = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $issuccess = $crud->insertuser();
}
?>