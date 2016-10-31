<?php
include('connect.php');

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
        <td>
            <a href="show.php?id=<?php echo $row['id'] ?>">
                <?php echo $row['post_title'] ?>
            </a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
