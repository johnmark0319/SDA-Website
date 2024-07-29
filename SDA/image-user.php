<?php
include("connect.php");

$query = "SELECT * FROM members ";
$result = mysqli_query($conn, $query);

if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $managername = trim($row["category"]);
        $managername = preg_replace('/\s+/', '', $managername);
        $name = $row["name"];
        $filename = $row["filename"];
        $imageurl = "uploads1/" . $filename;
        echo "
        <div class='$managername' style='background-image: url($imageurl); background-size:cover; background-position:center; border-radius: 20px; '>
            <p id='employee-name'>$name</p>
          </div>
        ";
    }
} else {
    echo "No records found.";
}
?>
