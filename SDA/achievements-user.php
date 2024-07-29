<?php
// Connect to your database (use your actual credentials)
include 'connect.php';

// Retrieve data (assuming you have a 'content' column in your table)
$sql = "SELECT embed_code FROM fb_embeds WHERE category = 'achievements'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $embedCode = $row['embed_code'];
        echo $embedCode; // Display the iframe
    }
} else {
    echo "No news content found."; // Placeholder message
}

// Close the database connection
$conn->close();
?>