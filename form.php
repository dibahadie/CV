<?php
 chdir("Messages"); 
 $counter_file = fopen("counter.txt","w");
 $counter = fread($counter_file, "r");
 $counter = $counter + 1;
 fwrite($counter_file, $counter);

 $name = $_POST["name"];
 $email = $_POST["email"];
 $message = $_POST["message"];
 $file = fopen($counter.".txt","w");
 fwrite($file,$name);
 fwrite($file,"\n");
 fwrite($file,$email);
 fwrite($file,"\n");
 fwrite($file,$message);
 fclose($file);
 ?>
