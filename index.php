<?php
$servername = "localhost";
$username = "homestead";
$password = "secret";
$dbname = "workshop_php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, post_date, post_title FROM news ORDER BY post_date DESC";
$result = $conn->query($sql);

// Check query


?>
<table>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?php echo $row['post_date'] ?></td>
        <td><?php echo $row['post_title'] ?></td>
    </tr>
    <?php endwhile; ?>
</table>
