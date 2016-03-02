<?php
if (isset($_POST['submit'])) {

    mysql_error();

    $db = mysql_connect("localhost", "root", "root");
    if (!$db) {
        die("Database connect failed: " . mysql_error());
    }

    $db_select = mysql_select_db("test", $db);
    if (!$db_select) {
        die("Database selection failed: " . mysql_error());
    }
}
?>