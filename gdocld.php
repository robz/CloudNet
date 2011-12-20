<?php

mysql_connect ("localhost:3307","root","asdf123") or die ('Error: ' . mysql_error());

mysql_select_db("testcloud") or die ('Data error:' . mysql_error());

$textFormQuery = "SELECT text FROM gdoc WHERE id = '1'";

$result = mysql_query($textFormQuery) or die ('Error updating database' . mysql_error());
$row = mysql_fetch_array($result);

echo $row["text"];

?>
