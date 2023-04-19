<?php

    class crud {
        private $db;
        
        function __construct($conn)
        {
        $this->db = $conn;
        }
        
        public function insertuser($fname,$lname,$phone,$email,$password){
            try {
                $sql = "INSERT INTO users (fname, lname, phone, email, password) VALUE(:fname, :lname, :phone, :email, :password)";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(":fname",$fname);
                $stmt->bindparam(":lname",$lname);
                $stmt->bindparam(":phone",$phone);
                $stmt->bindparam(":email",$email);
                $stmt->bindparam(":password",$password);
                
                $stmt->execute();
                return true;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
        
        public function getuser(){

        }
        
        public function getuserbyemail($email){
            try {
                $sql = "SELECT count(*) AS NUM FROM `users` WHERE email = :email";
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