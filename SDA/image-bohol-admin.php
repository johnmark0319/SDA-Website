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
            <form method='post' action='delete_image.php' >
                <input type='hidden' name='delete_file' value='$name'>
                <input type='hidden' name='delete_file2' value='$filename'>
                 <input type='submit' value='Delete manager' style='position: relative; bottom: 16vh; left: 1vh; cursor:pointer;' >
            </form>
              <button class='myButton' data-employee-name='$name'>$name</button>
        </div>
        ";
    }
} else {
    echo "No records found.";
}
?>
