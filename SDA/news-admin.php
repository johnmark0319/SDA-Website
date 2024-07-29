<?php
// Connect to your database (use your actual credentials)
include 'connect.php';

// Retrieve data (assuming you have a 'content' column in your table)
$sql = "SELECT id, embed_code FROM fb_embeds WHERE category = 'news'";
$result = $conn->query($sql);

$newsArray = []; // Initialize an empty array to store news content

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $newsArray[] = [
            'id' => $row['id'], // Store the news item ID
            'embed_code' => $row['embed_code'], // Store the embed code
        ];
    }
} else {
    $newsArray[] = [
        'id' => null, // Placeholder ID
        'embed_code' => "No news content found.", // Placeholder message
    ];
}

// Display the news content and delete buttons

foreach ($newsArray as $newsItem) {

    $newsId = $newsItem['id'];
    $embedCode = $newsItem['embed_code'];

    echo $embedCode; // Display the iframe

    if ($newsId !== null) {
        // Display the delete button
        echo "<form action='delete_fb.php' method='post'style='font-size: 2vw; position: relative; top: -5vh; left: -50vh; width: 5vh;' >";
        echo "<input type='hidden' name='news_id' value='$newsId'>";
        echo "<input type='submit' name='delete' value='Delete'>";
        echo "</form>";
    }
}

// Close the database connection
$conn->close();
