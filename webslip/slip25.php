<!-- Q.1) Write a menu driven program to perform various file operations. Accept filename from 
user.             
a) Display type of file.  
b) Display last modification time of file  
c) Display the size of file  
d) Delete the file -->
<html>
 <body>
  <form method="post" action="slip25.php">
   Enter File Name
     <input type="text" name="t1"><br><br>
   Enter Your Choice
     <input type="number" name="t2"> <br>
     a) Display type of file <br>  
     b) Display last modification time of file <br>   
     c) Display the size of file <br>  
     d) Delete the file <br><br>
   <input type="Submit">
  </form>
 </body>
</html>
<?php
  $s1=$_POST["t1"];
  $ch=$_POST["t2"]; 
  switch($ch)
  {
    case 1:if(file_exists($s1))
             echo("Type Of File=".filetype($s1));
           else
             echo("File Does Not Exists..");
           break;
    case 2:if(file_exists($s1))
             echo("Last Modified Time=".filemtime($s1));
           else
             echo("File Does Not Exists..");
           break;
    case 3:if(file_exists($s1))
             echo("Size Of File=".filesize($s1));
           else
             echo("File Does Not Exists..");
           break;
    case 4:if(file_exists($s1))
           {
             unlink($s1);
             echo("File Deleted...");
           }
           else
           {
             echo("File Does Not Exists..");
           }
           break; 
  }
?>
