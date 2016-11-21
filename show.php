<?php
$id = $_GET['id'];

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

// Create query
$sql = "SELECT * FROM news WHERE id=$id";
$result = $mysqli->query($sql);

// Check query
if($result == false) {
    die('Query klopt niet: ' . $mysqli->error);
}
?>


<?php if($news = $result->fetch_assoc()): ?>
    <h1><?php echo $news['post_title'] ?></h1>
    <p><?php echo $news['post_content'] ?></p>
    Geplaatst op <?php echo $news['post_date'] ?>
<?php endif ?>

