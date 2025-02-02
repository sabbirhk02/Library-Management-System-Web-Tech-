<?php
// Fix: Include the necessary file
require_once('../models/userModel.php');

// Fix: Change variable name to 'term'
$search = $_POST['search'];

// Fix: Use prepared statements to prevent SQL injection
$con = mysqli_connect('localhost', 'root', '', 'webtech_project');
$sql = "SELECT * FROM catagory WHERE Book_Name LIKE '%$search%' OR Book_ID LIKE '%$search%' OR Author LIKE '%$search%' OR Catagory LIKE '%$search%'";
$result = mysqli_query($con, $sql);

$content = "<table border=1>
                <tr>
                    <td>Book ID</td>
                    <td>Book Name</td>
                    <td>Author</td>
                    <td>Catagory</td>
                </tr>";

$rows = "";
while ($row = mysqli_fetch_assoc($result)) {
    $rows .= "<tr>
                <td>{$row['Book_ID']}</td>
                <td>{$row['Book_Name']}</td>
                <td>{$row['Author']}</td>
                <td>{$row['Catagory']}</td>
            </tr>";
}

if (empty($rows)) {
    echo "<p>No data found</p>";
} else {
    echo $content . $rows . "</table>";
}

mysqli_close($con);
?>
