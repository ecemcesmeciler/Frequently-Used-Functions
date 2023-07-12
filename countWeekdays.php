/hafta içi günleri sayar 
function calculateBusinessDays($startDate, $endDate) 
{
	$start = strtotime($startDate);
	$end = strtotime($endDate);

	$businessDays = 0;

	while ($start <= $end) {
		$currentDayOfWeek = date('N', $start); // 1 (Monday) through 7 (Sunday)

		// Check if the current day is a weekday (Monday to Friday)
		if ($currentDayOfWeek <= 5) {
			$businessDays++;
		}

		$start = strtotime('+1 day', $start); // Move to the next day
	}

	return $businessDays;
}
