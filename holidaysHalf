/*
$holidaysHalfs yarım gün tatiller arrayi
iki tarih arasında yarım gün tatile denk gelen gün var ise sürekli 0.5 ile toplayarak çıkarılacak çalışma günü sayısını döndürür 
*/
function check_in_range($startDate,$endDate,	$holidaysHalfs)
{
	$ifInRange=0;
	foreach ($holidaysHalfs as $givenSaturday)
	{
		if(($givenSaturday >= $startDate)&&($givenSaturday <=$endDate))
		{
			$ifInRange+=0.5;
		}
	}
	return $ifInRange;
}
