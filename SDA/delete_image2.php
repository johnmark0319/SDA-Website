<?php
include("connect.php"); 

if (array_key_exists('delete_file', $_POST)) {
    $name = $_POST['delete_file'];
    $filename = $_POST['delete_file2'];
    $fullPath = "uploads1/" . $filename;

    if (file_exists($fullPath)) {
        unlink($fullPath); 

        // Execute a DELETE query to remove the record from the database managers
        $sql = "DELETE FROM members WHERE name = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $name );
        $stmt->execute();
        $stmt->close();


    } else {
        echo 'Could not delete ' . $name  . ', file does not exist.';
    }
    header('location:adminHomepage.php');
}
?>