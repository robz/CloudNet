<?php

$text = $_GET['text'];

//$text = mysql_real_escape_string( $text );

mysql_connect ("localhost:3307","root","asdf123") or die ('Error: ' . mysql_error());

mysql_select_db("testcloud") or die ('Data error:' . mysql_error());

$textFormQuery = 
"REPLACE INTO gdoc (id, text) VALUES (1, '$text')";

mysql_query($textFormQuery) or die ('Error updating database ' . mysql_error());

echo "Sent...";

?>
