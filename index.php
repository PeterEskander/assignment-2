<?php
	$date =  date('Y-m-d', time());
	echo "The value of \$date: ".$date."<br>";
	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";
	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);
	$date =  date('Y/m/d', time());
	echo "The value of \$date: ".$date."<br>";
	if ($date < $tar) {
		echo "the past"
	}
	else if ($date == $tar) {
		echo "Oops";
	}
	elseif ($date > $tar) {
		echo "The future";
	}
	/*This is a comment*/
?>
