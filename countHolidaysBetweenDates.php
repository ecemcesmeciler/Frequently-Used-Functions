//iki tarih arası tatil günlerini sayar
function countHolidays($startDate, $endDate,$holidays) {

    $start = strtotime($startDate);
    $end = strtotime($endDate);

    $holidayCount = 0;

    foreach ($holidays as $holiday) {
        $holidayDate = strtotime($holiday);

      
        if ($holidayDate >= $start && $holidayDate <= $end) {
            $holidayCount++;
        }
    }

    return $holidayCount;
}
