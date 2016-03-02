<!DOCTYPE html>
<html lang="en">
<LINK href="stylesheet.css" rel="stylesheet" type="text/css">

<head>
    <meta charset="UTF-8">

    <title>UniHelp Home</title>

</head>

<body>
    <div id="headeruni">
        <h1>Welcome <?php echo $_GET["name"]; ?> to UniHelp!</h1>
    </div>

    <div id ="infouni">
        <h3>Welcome to UniHelp. The social Network getting you connected to other people all over the University for any help you require!</h3>
    </div>

<div id ="nameandemail">
    <form action="formsend.php" method="post">
        First name: <br> <input type="text" name="name"><br>
        Email:  <br> <input type="text" name="email"><br>
        Comment: <br> <input type="text" name="message"><br>
        <input type="submit" name="submit">
    </form>
   </div>
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
            echo $timestamp = date('d-m-y G:i:s ');
            echo "<br>";
            echo "<br>";
            echo $row[2] . "";
            echo "</p>";
            echo "<p>";
            echo $row[3] . "";
            echo "</p>";
            echo "</div>";
            echo "<br>";
        }
        ?>
        </div>
</body>

<div id="footer">Copyright &copy James Taylor 2016</div>
</html>
