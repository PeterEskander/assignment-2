<?php
	$date =  date('Y-m-d', time());
	echo "The value of \$date: ".$date."<br>";
	$newdate= str_replace("-", "/", $date);
echn $newdate
	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";
	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);
	if ($newdate < $tar) {
		echo "the past"
	}
	else if ($newdate == $tar) {
		echo "Oops";
	}
	elseif ($newdate > $tar) {
		echo "The future";
	}
	$firstdash = strpos($newdate, /);
	$seconddash = strpos($newdate, /, $firstdash);
	echo ($firstdash . " " . $seconddash);
	$numberOfWord= str_word_count($newdate);
	echo $numberOfWord;
	$stringLength= stringLength($newdate);
	echo ($stringLength);
	$firstcharacter= substr($newdate, 0, 1);
	$FCAV= ord($firstcharacter);
	echo ($FCAV);
	$lasttwocharachters= substr($newdate, -2, 2);
	echo ($lasttwocharachters);
	$datelist=explode("/", $newdate)
	echo ($datelist[1] . " " . $datelist[2] . " " . $datelist[3]);
	$resultlist = array();
	for ($i=0; $i < count($year); $i++) { 
		if ($year[$i] % 4 == 0):
			if ($year[$i] % 100 != 0):
				array_push($resultlist, $i);
		if ($year[$i] % 100 == 0):
			array_push($resultlist, $i);
	}
	$result=implode(" ", $resultlist)
	echo ($result)
	?>
