<!-- Q.1) Design an HTML form to accept two strings from the user. Write a PHP script for the 
following.
a. Find whether the small string appears at the start of the large string. 
b. Find the position of the small string in the big string. 
c. Compare both the string for first n characters, also the comparison should not be case 
sensitive -->
<html>
<body>
    <form action="slip8.php" method="POST">
        Enter String 1:<input type="text" name="String1"><br>
        Enter String 2:<input type="text" name="String2"><br>
        <input type="radio" name="r" value="r1">Find whether the small string appears at the start of the lasge string <br>
        <input type="radio" name="r" value="r2">Find whether the position of the small string in the big string<br>
        <input type="radio" name="r" value="r3">compare both strings for the first n character,also comparision should not be case sensitive<br>
        <input type="submit" value="submit">
    </form>
</body>
</html>
<?php
$str1=$_POST["String1"];
$str2=$_POST["String2"];
$ch=$_POST['r'];
switch($ch)
{
   case 'r1':$pos=strpos($str1,$str2);
           if($pos!=0)
           echo "str2 not present at the start of the str1";
           else
           echo "str2 present at the start of the str1";
           break;
   case 'r2':$pos=strpos($str1,$str2);
            echo $pos;
            break;
   case 'r3':$pos=strcasecmp($str1,$str2);
           echo $pos;
           break;
}
?>