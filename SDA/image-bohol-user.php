<?php
include("connect.php");

$query = "SELECT * FROM managers WHERE category = 'bohol'";
$result = mysqli_query($conn, $query);

if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $name = $row["name"];
        $filename = $row["filename"];
        $imageurl = "uploads/" . $filename;
        echo "
        <div style='background-image:url($imageurl); background-size:cover; background-position:center; border-radius: 20px;'>
              <button class='myButton' data-employee-name='$name'>$name</button>
        </div>
        ";
    }
} else {
    echo "No records found.";
}
?>
