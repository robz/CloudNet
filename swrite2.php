<?php

if($_POST['addition']){
$file_name = "something.txt";

$file_open = fopen("test.txt","a+");
fwrite($file_open, $_POST['addition']);
fclose($file_open);
}
?>

<form action="<?=$PHP_SELF?>" method="POST">
<textarea name="addition" COLS=40 ROWS=6>
<?php
$datalines = file ("test.txt");

foreach ($datalines as $zz) {
echo $zz; }

?>
</textarea>

<input type="submit" name="addition">
