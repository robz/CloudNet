 <?php 
 $File = "test.txt"; 
 $Handle = fopen($File, 'w');
 $Data = "Derr\n"; 
 fwrite($Handle, $Data); 
 $Data = "Hurr\n"; 
 fwrite($Handle, $Data); 
 print "Data Written"; 
 fclose($Handle); 
 ?>
