<?php

$id = $_GET['username'];

mysql_connect ("localhost:3307","root","asdf123") or die ('Error: ' . mysql_error());

mysql_select_db("testcloud") or die ('Data error:' . mysql_error());

$textFormQuery = "SELECT text FROM clouddata WHERE id = '$id'";

$result = mysql_query($textFormQuery) or die ('Error updating database' . mysql_error());
$row = mysql_fetch_array($result);

echo $row["text"];

?>
