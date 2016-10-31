<?php
include('connect.php');

// Get the ID
$id = $_GET['id'];

// Make Query
$sql = "SELECT * FROM news WHERE id='$id'";

$result = $mysqli->query($sql);
// Check query
if ($result == false) {
    die("Query failed: " . $mysqli->error);
}
?>

<?php while($row = $result->fetch_assoc()): ?>
    <h1><?php echo $row['post_title'] ?></h1>
    <p><?php echo $row['post_content'] ?></p>
    <h4><?php echo $row['post_date'] ?></h4>
<?php endwhile; ?>