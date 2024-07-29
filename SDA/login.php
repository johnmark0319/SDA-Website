<?php 

include 'connect.php';

if(isset($_POST['log'])){
   $email=$_POST["email"];
   $password=$_POST['password'];
   //$password=md5($password) ;


   $sql="SELECT * FROM admin WHERE username='$email'  AND password='$password'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    header("Location: adminHomepage.php");
    exit();
   }
   else{
    echo "Not Found, Incorrect Email or Password ' $email ' ' $password ' " ;
   }

}
?>