<!--Q.1) Write a menu driven program to perform the following queue related operations  
a) Insert an element in queue  
b) Delete an element from queue  
c) Display the contents of queue
-->
<html>
 <body>
  <form method="post" action="slip22.php">
   Enter Your Choice
     <input type="number" name="t1"><br><br>
     a) Insert an element in queue <br> 
     b) Delete an element from queue <br> 
     c) Display the contents of queue <br><br>  
   <input type="Submit">
  </form>
 </body>
</html>
<?php
  $a=Array(10,20,30);
  $ch=$_POST["t1"];
  switch($ch)
  {
    case 1:array_unshift($a,60);
           print_r($a);
           break;
    case 2:array_shift($a);
           print_r($a);
           break;
    case 3:$n=print_r($a);  
           break; 
  }
?> 