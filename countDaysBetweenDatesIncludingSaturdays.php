//iki tarih arası günleri cuamrtesi dahil olarak sayar,tatil günlerini eklemez
function ikiTarihArasiGunler($date1, $date2,$holidays)
{
    $startDate = strtotime($date1);
    $endDate = strtotime($date2);
    $days = array();

	
    for ($currentDate = $startDate; $currentDate <= $endDate; $currentDate += 86400) 
	{
        $dayOfWeek = date('N', $currentDate); // 1 (Monday) through 7 (Sunday)
        $currentDateFormatted = date('Y-m-d', $currentDate);

        if ($dayOfWeek >= 1 && $dayOfWeek <= 6 && !in_array($currentDateFormatted, $holidays)) 
		    {
            $days[] = $currentDateFormatted;
        } 
    }
    return $days;
}
