<?php


if (isset($_POST['register_btn'])) {
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['fname']);
    $phone = trim($_POST['phone']);
    $gender = trim($_POST['gender']);
    $fname = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    $issuccess = $crud->insertuser();
}
?>