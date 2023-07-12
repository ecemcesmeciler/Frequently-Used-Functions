// $holidaysHalf arrayinde (yarım gün tatiller) ,iki tarih arası bu günlere denk geliyorsa ger gün için 0,5 ile toplayıp sonucu döndürür
function check_in_range_weekday($startDate,$endDate,$holidaysHalf)
{	
	$ifInRangeWeekday=0;
	foreach ($holidaysHalf as $givenWeekday)
	{
		if(($givenWeekday >= $startDate)&&($givenWeekday <=$endDate))
		{
			$ifInRangeWeekday+=0.5;
		}
	}
	return $ifInRangeWeekday;	
}
