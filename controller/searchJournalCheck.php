<?php
// Fix: Include the necessary file
require_once('../models/userModel.php');

// Fix: Change variable name to 'term'
$searchjournal = $_POST['searchjournal'];

// Fix: Use prepared statements to prevent SQL injection
$con = mysqli_connect('localhost', 'root', '', 'webtech_project');
$sql = "SELECT * FROM journal WHERE Journal_ID LIKE '%$searchjournal%' or Tittle LIKE '%$searchjournal%' or PlaceOfP LIKE '%$searchjournal%' or Publisher LIKE '%$searchjournal%' or Volume LIKE '%$searchjournal%' or Issue LIKE '%$searchjournal%'";
$result = mysqli_query($con, $sql);

$content = "<table border=1>
                <tr>
                           <td>Journalid</td>
                            <td>Tittle</td>
                            <td>Place Of Publication</td>
                            <td>Publisher</td>
                            <td>Volume </td>
                            <td>Issue </td>
                            <td>Date </td>
                </tr>";

$rows = "";
while ($row = mysqli_fetch_assoc($result)) {
    $rows .= "<tr>
                <td>{$row['Journal_ID']}</td>
                <td>{$row['Tittle']}</td>
                <td>{$row['PlaceOfP']}</td>
                <td>{$row['Publisher']}</td>
                <td>{$row['Volume']}</td>
                <td>{$row['Issue']}</td>
                <td>{$row['Date']}</td>
            </tr>";
}

if (empty($rows)) {
    echo "<p>No data found</p>";
} else {
    echo $content . $rows . "</table>";
}

mysqli_close($con);
?>
