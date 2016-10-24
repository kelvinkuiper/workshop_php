<?php
$servername = "localhost";
$username = "homestead";
$password = "secret";
$dbname = "workshop_php"; //string

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname); //object

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$sql = "SELECT id, post_date, post_title FROM news ORDER BY post_date DESC";
$result = $mysqli->query($sql);

// Check query
if($result == false) {
    die('Query klopt niet: ' . $mysqli->error);
}
?>
<table>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?php echo $row['post_date'] ?></td>
        <td><?php echo $row['post_title'] ?></td>
    </tr>
    <?php endwhile; ?>
</table>
