<!--Q.1) Write a PHP script for the following: Design a form having a text box and a drop down list 
containing any 3 separators(e.g. #, |, %, @, ! or comma) accept a strings from the user and also a 
separator. 
a. Split the string into separate words using the given separator. 
b. Replace all the occurrences of separator in the given string with some other separator. 
c. Find the last word in the given string. -->
<!DOCTYPE html>
<html>
    <body>
        <form name="f" method="POST" action="slip9.php">
                
Enter a string:  <input type="text" name ="t"><br><br>
    Enter a separator:<select name="sep">
        <option value="#">#</option>
        <option value="%">%</option>
        <option value="@">@</option>
    </select><br><br>
        <input type="radio" name="r" value="1">
         Split the string.<br>
         <input type="radio" name="r" value="2">
         Replace separator.<br>
         <input type="radio" name="r" value="3"> 
         Find the last word.<br><br>
         <input type="submit" name="sb" value="Submit">
        
    </body>
    </html>

    <?php
    $x=$_POST["t"];
    $s=$_POST["sep"];
    $ch=$_POST['r'];
    
    switch($ch)
    {
        case 1: $str=$x;
                      $sep=$s;
                      echo substr(chunk_split($str, 1,$sep),0,-1)."\n";        
               break;
        case 2: $str=$x;
                      $sep=$s;
                    $result=str_replace($str,'#',$sep);
                    echo $result;
               break;
        case 3: $str=$x;
                      $sep=$s;
                   $split=explode(" ",$str);
                   $lastword=$split[count($split)-1];
                   echo $lastword;
                  break;
      }
      
      ?>


