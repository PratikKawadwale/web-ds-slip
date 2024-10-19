<!--ERROR Q.1) Write a PHP script for the following: Design a form to accept the marks of 5 different 
subjects of a student, having serial number, subject name & marks out of 100. Display the 
result in the tabular format which will have total, percentage and grade. Use only 3 text 
boxes.(Use array of form parameters) --> 
<html>
 <body>
  <form method="post" action="slip16.php">
   Student ID
    <input type="text" name="t1"><br><br>
   Student Name
    <input type="text" name="t2"><br><br>
   Student Marks
    <input type="text" name="t3"><br><br>
   <input type="Submit">
  </form>
 </body>
</html>
<?php
  $a=$_POST["t1"];
  $b=$_POST["t2"];
  $c=$_POST["t3"];
  $sum=0;
  echo "<h1><center>Marksheet</center></h1>";
  echo "<h3><center>Student ID:$a</h3><br>";
  $d=explode(",",$b);
  $e=explode(",",$c);
  echo "<center><table border=2>";
  for($i=1;$i<=5;$i++)
  {
    echo"<tr>";
      echo"<td> $d[$i]</td>";
      echo"<td> $e[$i]</td>";
    echo"</tr>";
    $sum=$e[$i]+$sum;
  }
  $per=$sum/5;
  echo"<tr><td>Total Marks</td><td>$sum</td>";
  echo"<tr><td>Percentage</td><td>$per</td></tr>";
  echo"</center>";
?>

