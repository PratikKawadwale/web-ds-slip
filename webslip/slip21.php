<!--Q.1) Create an array of 15 high temperatures, approximating the weather for a spring month, 
then find the average high temp, the five warmest high temps Display the result on the browser.  
-->
<?php
  $highTemps = array(68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78);
  $count = count($highTemps);
  $total = 0;
  foreach ($highTemps as $h)
  {
    $total += $h;
  }
  $avg = round($total / $count);
  echo "The average high temperature for the month was $avg &amp;deg;F.\n";
  rsort($highTemps);
  $topTemps = array_slice($highTemps, 0, 5);
  echo "The warmest five high temperatures were: <br />\n";
  foreach ($topTemps as $t)
  {
    echo "$t &amp;deg;F <br/> \n";
  }
  $lowTemps = array_slice($highTemps, -5, 5);
  echo "The coolest five high temperatures were: <br/>\n";
  foreach ($lowTemps as $l)  
  {
    echo "$l &amp;deg;F <br/> \n";
  }
?>