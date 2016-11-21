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

$sql = "
SELECT news.*, authors.first_name, authors.last_name
FROM news 
LEFT JOIN authors ON news.author_id = authors.id
ORDER BY post_date DESC
";

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
        <td>
            <a href="show.php?id=<?php echo $row['id'] ?>">
                <?php echo $row['post_title'] ?>
            </a>
        </td>
        <td>
            <?php echo $row['first_name'] ?> <?php echo $row['last_name'] ?>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
