<?php

function sum($parameter1, $parameter2) {
  $addition = $parameter1 + $parameter2;
  return $addition;
}
 function add($x,$y){
    $total=$x+$y;return $total;
    }
    echo "<br><br><br>1 + 16 = " . add(1,16);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Functions</title>
    </head>
    <body>
<?php
$var1 = 18;
$var2 = 12;
$sum = sum($var1, $var2);
echo "Sum of two variables is " . $sum . ".";
?>
    </body>
</html>