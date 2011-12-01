<?php

$text = $_GET['Code']; 
$id = $_GET['username'];

mysql_connect ("localhost:3307","root","asdf123") or die ('Error: ' . mysql_error());

mysql_select_db("testcloud") or die ('Data error:' . mysql_error());

$textFormQuery = "INSERT INTO clouddata (id, text) VALUES ('$id', '$text')";

mysql_query($textFormQuery) or die ('Error updating database ' . mysql_error());

?>
