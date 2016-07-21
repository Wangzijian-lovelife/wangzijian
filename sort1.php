<?php
$numbers =array(3,5,1,22,11);
rsort($numbers);

$length = count($numbers);
for($x =0; $x<$length; $x++){
	echo $numbers[$x];
	echo "<br>";
}
?>