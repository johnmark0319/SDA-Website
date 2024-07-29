<?php 

include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
        if (isset($_POST['cebu'])) {
            $category = 'cebu';
        } 

        elseif (isset($_POST['makati'])) {
            $category = 'makati';
        } 

        elseif (isset($_POST['bohol'])) {
        $category = 'bohol';
        } 

        elseif (isset($_POST['negros'])) {
            $category = 'negros';
            } 

            elseif (isset($_POST['pampanga'])) {
                $category = 'pampanga';
                } 

        else {
            $category = 'other';
        }

    $fullname = $_POST["fullname"];
    $filename = $_FILES["image"]["name"];
    
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $allowedTypes = array("jpg", "jpeg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "uploads/".$filename;
    if (file_exists($targetPath)) {
        echo "The image file already exists. Please try again.";
        // You can choose to stop processing here or continue with other validations.
    } else {
        // File doesn't exist, proceed with insertion
        if (move_uploaded_file($tempName, $targetPath)) {
            $query = "INSERT INTO managers (name, filename, category) VALUES ('$fullname', '$filename', '$category')";
            if (mysqli_query($conn, $query)) {
                echo "Your image is inserted.";
            } else {
                echo "Something went wrong while inserting data.";
            }
        } else {
            echo "File is not uploaded.";
        }
    }

    header('location:adminHomepage.php');
}
?>