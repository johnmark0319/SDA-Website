<?php
include("connect.php"); 

if (array_key_exists('delete_file', $_POST)) {
    $name = $_POST['delete_file'];
    $filename1 = $_POST['delete_file2'];
    $fullPath = "uploads/" . $filename1;

    if (file_exists($fullPath)) {
        unlink($fullPath); 

        // Execute a DELETE query to remove the record from the database managers
        $sql = "DELETE FROM managers WHERE name = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $name );
        $stmt->execute();
        $stmt->close();

        
        // Execute a DELETE query to remove the record from the database members

        $sql_get_filenames = "SELECT filename FROM members WHERE category = ?";
        $stmt_get_filenames = $conn->prepare($sql_get_filenames);
        $stmt_get_filenames->bind_param("s", $name);
        $stmt_get_filenames->execute();
        $stmt_get_filenames->bind_result($filename);

        $filenames = [];

        while ($stmt_get_filenames->fetch()) {
            $filenames[] = $filename; // Add each filename to the array
        }
        
        $stmt_get_filenames->close();

        foreach ($filenames as $filename) {
            $fullPath = "uploads1/" . $filename;
        
            if (file_exists($fullPath)) {
                unlink($fullPath);
        
                // Execute a DELETE query to remove the record from the 'members' table
                $sql_delete_member = "DELETE FROM members WHERE category = ? AND filename = ?";
                $stmt_delete_member = $conn->prepare($sql_delete_member);
                $stmt_delete_member->bind_param("ss", $name, $filename);
                $stmt_delete_member->execute();
                $stmt_delete_member->close();
        
                echo "File '$filename' deleted successfully!";
            } else {
                echo "Could not delete '$filename', file does not exist.";
            }
        }

    } else {
        echo 'Could not delete ' . $name  . ', file does not exist.';
    }
    header('location:adminHomepage.php');
}
?>