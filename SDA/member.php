<?php
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $filename = $_FILES["image"]["name"];
    $category = $_POST["owner"];

    // Check if the filename already exists in the database
    $sql_check_filename = "SELECT filename FROM members WHERE filename = ?";
    $stmt_check_filename = $conn->prepare($sql_check_filename);
    $stmt_check_filename->bind_param("s", $filename);
    $stmt_check_filename->execute();
    $stmt_check_filename->store_result();

    if ($stmt_check_filename->num_rows > 0) {
        echo "File '$filename' already exists in the database. Data not inserted.";
    } else {
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowedTypes = array("jpg", "jpeg", "png", "gif");
        $tempName = $_FILES["image"]["tmp_name"];
        $targetPath = "uploads1/" . $filename;

        if (in_array($ext, $allowedTypes)) {
            if (move_uploaded_file($tempName, $targetPath)) {
                $query = "INSERT INTO members (name, filename, category) VALUES ('$fullname', '$filename', '$category')";
                if (mysqli_query($conn, $query)) {
                    echo "Your image is inserted";
                } else {
                    echo "Something went wrong while inserting data.";
                }
            } else {
                echo "File is not uploaded.";
            }
        } else {
            echo "Your file type is not allowed.";
        }
    }

    $stmt_check_filename->close();
    header('location:adminHomepage.php');
}
?>