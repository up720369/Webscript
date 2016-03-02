<?php
    include('dbconnect.php');

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    $result = mysql_query("DELETE FROM Dbsaved WHERE id=$id")
    or die (mysql_error());

    if ($result) {
        header("location: UniHelpindex.php");
    }
}

?>