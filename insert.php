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

// We gaan kijken of het formulier is verstuurd
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = $_POST['date'];


    if(empty($title)) {
        die('Je moet een title invullen');
    }

    if(empty($content)) {
        die('Je moet een content invullen');
    }

    if(empty($date)) {
        die('Je moet een datum invullen');
    }

    $sql = "INSERT INTO news (post_date, post_title, post_content) VALUES ('$date', '$title', '$content')";
    $result = $mysqli->query($sql);

    // Check query
    if($result == false) {
        die('Query klopt niet: ' . $mysqli->error);
    } else {
        die('Het is gelukt');
    }
}
?>
<h1>Nieuws toevoegen</h1>
<form method="post">
    <div>
        Titel <br />
        <input type="text" name="title" id="title" />
    </div>
    <div>
        Content <br />
        <textarea name="content" rows="10" cols="200"></textarea>
    </div>
    <div>
        Datum: <br />
        <input type="text" name="date" />
    </div>
    <button name="submit" type="submit">Opslaan</button>
</form>