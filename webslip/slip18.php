<!--Q.1) Write a menu driven program to perform the following operations on an associative array 
a. Reverse the order of each element’s key-value pair. 
b. Traverse the element in an array in random order. 
c. Convert the array elements into individual variables. 
d. Display the elements of an array along with key. -->
<html>
 <body>
  <form method="post" action="slip18.php">
   Enter Your Choice
     <input type="number" name="t1"><br><br>
     a.Reverse the order of each elements key-value pair <br>
     b.Traverse the element in an array in random order <br>
     c.Convert the array elements into individual variables <br> 
     d.Display the elements of an array along with key <br><br>  
   <input type="Submit">
  </form>
 </body>
</html>
<?php
  $a=Array("Sagar"=>"31","Vicky"=>"41","Leena"=>"39","Ramesh"=>"40");
  $ch=$_POST["t1"];
  switch($ch)
  {
    case 1:$s=array_flip($a);
           print_r($s);
           break;
    case 2:shuffle($a);
           print_r($a);
           break;
    case 3:extract($a);
           echo $Sagar;
           echo $Vicky;
           echo $Leena;
           echo $Ramesh;
           break;
    case 4:foreach($a as $key=>$value)
           {
             echo "$key:$value <br>";
           }  
           break; 
  }
?>