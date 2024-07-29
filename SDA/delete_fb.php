<?php
// Connect to your database (use your actual credentials)
include 'connect.php'; // Make sure this includes your database connection settings

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['delete']) && isset($_POST['news_id'])) {
        $newsId = $_POST['news_id'];

        // Perform the deletion query
        $sql = "DELETE FROM fb_embeds WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $newsId);

        if ($stmt->execute()) {
            header('location:adminHomepage.php');
            exit;
        } else {
            echo "Error deleting news item.";
        }

        $stmt->close();
    }
}

// Close the database connection
$conn->close();
?>