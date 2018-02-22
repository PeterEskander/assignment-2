<?php
	$date =  date('Y-m-d', time());
	echo "The value of \$date: ".$date."<br>";
	$newdate= str_replace("-", "/", $date);

echo $newdate;
	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";
	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);
	echo '<br>';
	if ($newdate < $tar) {
		echo "the past";
	}
	else if ($newdate == $tar) {
		echo "Oops";
	} 
	elseif ($newdate > $tar) {
		echo "The future";
	}
	echo '<br>';

	$firstdash = strpos($newdate, "/");
	$seconddash = strpos($newdate, "/", $firstdash+1);
	echo $firstdash . " " . $seconddash;
	echo '<br>';

	$datelist=explode("/", $newdate);

	$numberOfWord= str_word_count($newdate);
	echo strlen($datelist[0]). " " . strlen($datelist[1]). " " . strlen($datelist[2]);
	echo '<br>';
	
	$stringLength= strlen($newdate);
	echo $stringLength;
	echo '<br>';
	
	$firstcharacter= substr($newdate, 0, 1);
	$FCAV= ord($firstcharacter);
	echo $FCAV;
	echo '<br>';
	
	$lasttwocharachters= substr($newdate, -2, 2);
	echo $lasttwocharachters;
	echo '<br>';
	
	$datelist=explode("/", $newdate);
	echo $datelist[1] . " " . $datelist[2] . " " . $datelist[3];
	echo '<br>';
	
	$resultlist = array();
	for ($i=0; $i < count($year); $i++) { 
		if ($year[$i] % 4 == 0){
			if ($year[$i] % 100 != 0){
				array_push($resultlist, $year[$i]);
			}
		}
		if ($year[$i] % 100 == 0){
			array_push($resultlist, $year[$i]);
		}
	}
	$result=implode(" ", $resultlist);
	echo $result;
	?>
