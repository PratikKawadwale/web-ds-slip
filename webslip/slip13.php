<!--Q.1) Write a PHP script to create a chess board using CSS on table cells. -->
<html>
 <body>
  <table border="1px">
    <?php
      echo"Chess Board";
      $value=0;
      for($c=0;$c<8;$c++)
      {
        echo "<tr>";
        $value=$c;
        for($r=0;$r<8;$r++)
        {
          if($value%2==0)
          {
            echo("<td height=20px width=20px bgcolor=black></td>");
	    $value++;
          }
          else
          {
            echo("<td height=20px width=20px bgcolor=white></td>");
            $value++;
          } 
        }
        echo "<tr>";
      }
    ?> 
  </table>
 </body>
</html>
	