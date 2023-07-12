// İKİ TARİH ARASI CUMARTESİ SAYISINI TESPİT EDER
function saturdayfunc($dt1,$todaysDate)
	{
	$tm1 = strtotime($dt1);
	$tm2 = strtotime($todaysDate);
	$dt = Array ();
	for($i=$tm1; $i<=$tm2;$i=$i+86400) 
	{
	if(date("w",$i) == 6) {
		$dt[] = date("l Y-m-d ", $i);
	}
	}
	count($dt);
	$saturdays=count($dt);
	return $saturdays;
}
