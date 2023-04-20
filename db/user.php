<?php

    class user {
        private $db;
        
        function __construct($conn)
        {
        $this->db = $conn;
        }
        
        public function insertuser($fname,$lname,$phone,$gender,$email,$password){
            try {

                $new_password = md5($password.$email);
                
                $sql = "INSERT INTO `users_tb` (firstname, lastname, phone, gender, email, password) VALUE(:fname, :lname, :phone, :gender, :email, :password)";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(":fname",$fname);
                $stmt->bindparam(":lname",$lname);
                $stmt->bindparam(":phone",$phone);
                $stmt->bindparam(":gender",$gender);
                $stmt->bindparam(":email",$email);
                $stmt->bindparam(":password",$new_password);
                // $stmt->bindparam(":verify_token",$verify_token);
                
                $stmt->execute();
                return true;
            
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
        
        public function getuser($email,$password){
            try {
                $sql = "SELECT * FROM users_tb where email = :email";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(":email",$email);
                $stmt->bindparam(":password",$password);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
        
        public function getuserbyemail($email){
            try {
                $sql = "SELECT count(*) as num FROM `users_tb` WHERE email = :email;";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(":email",$email);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }




    }
?>


<!-- 
$fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $fname = $_POST['email'];
    $password = $_POST['password'];
    
    
    fname lname phone email password -->