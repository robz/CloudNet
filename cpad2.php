<?php

if($_POST['userCode'])
{
    $file_name = "test.txt";
    $file_open = fopen("test.txt","a+");
    
    fwrite($file_open, $_POST['userCode']);
    fclose($file_open);
}
?>

<form action="<?=$PHP_SELF?>" method="POST">
<textarea name="addition" ROWS=25 COLS=100 >

<?php
$fileLines = file ("test.txt");

foreach ($fileLines as $fileData)
 {echo $fileData;}

?>
</textarea>

<input type="submit" value="And your wildest fantasies will come true." name='userCode'>
