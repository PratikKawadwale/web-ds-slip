<!-- Q.1) Write a script to accept two integers(Use html form having 2 textboxes).  
Write a PHP script to,  
a. Find mod of the two numbers.  
b. Find the power of first number raised to the second.  
c. Find the sum of first n numbers (considering first number as n)  
d. Find the factorial of second number.  
(Write separate function for each of the above operations.) -->
<html>
 <body>
  <form method="post" action="slip10.php">
   Enter First Number
     <input type="text" name="t1"><br><br>
   Enter Second Number
     <input type="text" name="t2"><br><br>
   Enter Your Choice
     <input type="number" name="t3"><br><br>
     a. Find mod of the two numbers <br>
     b. Find the power of first number raised to the second <br>  
     c. Find the sum of first n numbers <br>  
     d. Find the factorial of second number <br><br>  
   <input type="Submit">
  </form>
 </body>
</html>
<?php
  $n1=$_POST["t1"];
  $n2=$_POST["t2"];
  $ch=$_POST["t3"];
  switch($ch)
  {
    case 1:mod($n1,$n2);
           break;
    case 2:power($n1,$n2);
           break;
    case 3:sum($n1);  
           break;
    case 4:fact($n2);  
           break; 
  }
  function mod($n1,$n2)
  {
    $c=$n1%$n2;
    Echo("Mod Of Two Numbers=".$c);
  }
  function power($n1,$n2)
  {
    $power=1;
    while($n2>0)
    {
      $power=$power*$n1;
      $n2=$n2-1;
    }
    Echo("Power=".$power);
  }
  function sum($n1)
  {
    $s=0;
    while($n1>=0)
    {
      $s=$s+$n1;
      $n1--;
    }
    Echo("Sum of Numbers=".$s);
  }
  function fact($n2)
  {
    $f=1;
    while($n2>0)
    {
      $f=$f*$n2;
      $n2--;
    }
    Echo("Factorial of Second Numbers=".$f);
  }
?>