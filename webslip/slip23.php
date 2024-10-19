<!-- Q.1) Write a menu driven program to perform the following stack related operations: 
a) Insert an element in stack  
b) Delete an element from stack  
c) Display the contents of stack
-->
<html>
 <body>
  <form method="post" action="slip23.php">
   Enter Your Choice
     <input type="number" name="t1"><br><br>
     a) Insert an element in stack <br> 
     b) Delete an element from stack <br> 
     c) Display the contents of stack <br><br>  
   <input type="Submit">
  </form>
 </body>
</html>

<?php
  $a=Array(10,20,30);
  $ch=$_POST["t1"];
  switch($ch)
  {
    case 1:$s=array_push($a,40);
           print_r($s);

           break;
    case 2:array_pop($a);
           print_r($a);
           break;
    case 3:$n=print_r($a);  
           break; 
  }
?>