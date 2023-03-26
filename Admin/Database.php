<?php
    class Database{
        private $db;
        
        function __construct(){
            try{
                $this->db = new PDO("mysql:host=localhost;dbname=restaurant", "root", "");
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e){
                die($e->getMessage());
            }
        }
    
        function Login($email, $password){
            $sql= "SELECT * FROM `admin` WHERE `email` = ? AND `password` = ?;";
            $b= $this->db->prepare($sql);
            $b->execute(array($email, $password));
            if($b->rowCount() == 1)
                return true;
            else
                return false;
        }

        function UpdateAdmin($fname, $lname){
            $email = $_COOKIE['email'];
            $password = $_COOKIE['password'];
            try{
                $sql= "UPDATE `admin` SET `first_name` =?, `last_name` =? WHERE `email` =? AND `password` =?;";
                $b= $this->db->prepare($sql);
                $b->execute(array($fname, $lname, $email, $password));
                return true;
            }
            catch(PDOException){
                return false;       
            }
        } 

        function CheckEmail($email){
            $sql = "SELECT email FROM `admin` WHERE email = ?;";
            $b=$this->db->prepare($sql);
            $b->execute(array($email));
            if($b->rowCount() == 0)
                return true;
            else
                return false;
        }
        
        function SignUp($fname,$lname,$email,$password){
            try{
                $sql = "INSERT INTO `admin` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES (NULL,?,?,?,?);";
                $a = $this->db->prepare($sql);
                $a->execute(array($fname,$lname,$email,$password));
                return true;
            }
            catch(PDOException $e) {
                return false;
            }
        }
        
        function OnlyOneAdminExist(){
            $sql= "SELECT * FROM `admin`;";
            $b= $this->db->prepare($sql);
            $b->execute(array());
            if($b->rowCount() == 1)
                return true;
            else
                return false;
        }
        
        function Delete($email, $password){
            $sql= "SELECT * FROM `admin` WHERE `email` = ? AND `password` = ?;";
            $b= $this->db->prepare($sql);
            $b->execute(array($email, $password));
            if($b->rowCount() == 1){
                $sql= "DELETE FROM `admin` WHERE `email` = ? AND `password` = ?;";
                $b= $this->db->prepare($sql);
                $b->execute(array($email, $password));
                return true;
            }
            else
                return false;
        }

        function ChangePassword($email, $password, $newPassword){
            $sql= "SELECT * FROM `admin` WHERE `email` = ? AND `password` = ?;";
            $b= $this->db->prepare($sql);
            $b->execute(array($email, $password));
            if($b->rowCount() == 1){
                $sql= "UPDATE `admin` SET `password` =? WHERE `email` =?;";
                $b= $this->db->prepare($sql);
                $b->execute(array($newPassword, $email));
                return true;
            }
            else
                return false;
        }

        function TableAvailable($date){
            date_default_timezone_set("Asia/Karachi");
            $newTime = date("Y-m-d h:i a", strtotime($date) + 5400);
            $sql = "SELECT * FROM `booked_table` WHERE `date` BETWEEN? AND?;";
            $b= $this->db->prepare($sql);
            $b->execute(array($date,$newTime));
            if($b->rowCount() >=0 && $b->rowCount() <= 10)
                return true;
            else
                return false;
        }

        function DeleteOldReservation(){
            date_default_timezone_set("Asia/Karachi");
            $newTime = date('Y-m-d h:i a', strtotime(date('Y-m-d h:i a')) - 1200);
            $sql = "DELETE FROM `booked_table` WHERE `date` <=?";
            $b= $this->db->prepare($sql);
            $b->execute(array($newTime));
        }

        function BookTable($name,$email,$phone,$date,$no_people, $message){
            try{
                $sql = "INSERT INTO `booked_table` (`id`, `name`, `email`, `phone`, `date`, `no_people`, `message`) VALUES (NULL,?,?,?,?,?,?);";
                $b= $this->db->prepare($sql);
                $b->execute(array($name,$email,$phone,$date,$no_people, $message));
                return true;
            }
            catch(PDOException $e) {
                return false;
            }
        }

        function ShowBookedTables(){
            $sql= "SELECT * FROM `booked_table`;";
            $table= $this->db->query($sql);
            $table->execute(array());
            return $table;
        }

        function ShowAdminData($email, $password){
            $sql = "SELECT * FROM `admin` WHERE `email` =? AND `password`=?;";
            $adm= $this->db->prepare($sql);
            $adm->execute(array($email,$password));
            return $adm;
        }

        function Feedback($name, $email, $subject, $message){
            try{
                $sql = "INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `message`) VALUES (NULL,?,?,?,?);";
                $b= $this->db->prepare($sql);
                $b->execute(array($name,$email,$subject,$message));
                return true;
            }
            catch(PDOException) {
                return false;
            }
            
        } 

        function ShowMessages(){
            $sql= "SELECT * FROM `feedback`;";
            $table= $this->db->query($sql);
            $table->execute(array());
            return $table;
        }
        

    }


?>