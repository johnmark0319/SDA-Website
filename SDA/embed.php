<?php 

include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

   $iframe=$_POST['iframe'];

   if (isset($_POST['news'])) {
      $category = 'news';
  } 
  
   elseif (isset($_POST['events'])) {
      $category = 'events';
  } 

   elseif (isset($_POST['achievements'])) {
   $category = 'achievements';
   } 
  
   else {
      $category = 'other';
  }


   $sql = "INSERT INTO fb_embeds (category, embed_code) VALUES ('$category', '$iframe')";
   
   if ($conn->query($sql) === TRUE) {
      echo "Record inserted successfully!";
      header('location:adminHomepage.php');
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

}


?>