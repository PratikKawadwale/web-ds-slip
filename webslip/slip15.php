<!--Q.1) Design a form to accept string from the user and perform the following operations 
a.To select first 5 words from the string 
b.Convert the given string to lowercase and then to Title case. 
c.Pad the given string with “*” from left and right both the sides.  
d.Remove the leading whitespaces from the given string.  
e.Find the reverse of given string. -->

<html>
 <body>
  <form method="post" action="slip15.php">
   Enter String
    <input type="text" name="t1"><br><br>
   <input type="radio" name="r" value="a">
    Length Of String<br>
   <input type="radio" name="r" value="b">
    Lowercase And Title Case<br>
   <input type="radio" name="r" value="c">
   Padding Both Sides<br>
   <input type="radio" name="r" value="d">
   Remove Spaces<br>
   <input type="radio" name="r" value="e">
   Reverse The String<br><br>
   <input type="Submit" value="submit">
  </form>
 </body>
</html>
<?php
  $s1=$_POST["t1"];
  $ch=$_POST["r"];
  switch($ch)
  {
     case 'a':$s=substr($s1,0,5);
              echo("Length Of String=".$s);
              break;
     case 'b':$l=strtolower($s1);
              $w=ucwords($s1);
              echo("Lowercase=".$l);
              echo("Titlecase=".$w); 
              break;
     case 'c':$p=str_pad($s1,strlen($s1)+2,"*",STR_PAD_BOTH);
              echo("Padding=".$p);
              break;
     case 'd':$w=trim($s1);
              echo("Remove White Spaces=".$w);
              break;
     case 'e':$r=strrev($s1);
              echo("Reverse STring=".$r);
              break; 
  }
?>
