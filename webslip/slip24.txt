<!--Q.1) Write a PHP program to read two file names from user and append content of first file into 
second file.  -->

<html>
 <body>
  <form method="post" action="slip24.php">
   Enter First File
     <input type="text" name="t1"><br><br>
   Enter Second File
     <input type="text" name="t2"><br><br>
   <input type="Submit">
  </form>
 </body>
</html>

<?php
  $s1=$_POST["t1"];
  $s2=$_POST["t2"]; 
  $f1=fopen($s1,'r');
  $f2=fopen($s2,'a');
  if($f1==false)
  {
    die("File Not Found..");
  }
  while(!feof($f1))
  {
    $data=fgets($f1);
    fputs($f2,$data);
  }
  echo("File Copy Successfully.."); 
  fclose($f1);
  fclose($f2);
?>