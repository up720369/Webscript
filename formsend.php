<?php
    include ("dbconnect.php");

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO Dbsaved (name,email,message) VALUES ('$name','$email','$message')";
$result = mysql_query($sql);

mysql_close($db);
?>

<div id="grabphpdiv">

    <?php
    $db = mysql_connect("localhost", "root", "root");
    if (!$db) {
        die("Database connect failed: " . mysql_error());
    }

    $db_select = mysql_select_db("test", $db);
    if (!$db_select) {
        die("Database selection failed: " . mysql_error());
    }
    $result = mysql_query("SELECT * FROM Dbsaved", $db);
    if (!$result) {
        die ("Database query failed: " . mysql_error());
    }
    while ($row = mysql_fetch_array($result)) {
        echo "<div id='posts'>";
        echo "<h2>";
        echo $row[1] . "";
        echo "</h2>";
        echo "<p>";
        echo $row[2] . "";
        echo "</p>";
        echo "<p>";
        echo $row[3] . "";
        echo "</p>";
        echo "</div>";
        echo "<br>";
    }

    if ($result) {
        header("location: UniHelpindex.php");
    }
    ?>