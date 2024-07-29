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
        <form method='post' action='delete_image2.php' >
                <input type='hidden' name='delete_file' value='$name'>
                <input type='hidden' name='delete_file2' value='$filename'>
                 <input type='submit' value='Delete member' style='position: relative; bottom: 16vh; left: 1vh; cursor:pointer;' >
            </form>
            <p id='employee-name'>$name</p>
          </div>
        ";
    }
} else {
    echo "No records found.";
}
?>
