//iki tarih arası cumartesi sayısını*0,5 döndürür
function cumartesiSayisi($startDate, $endDate) 
{
    $count = 0;
    $currentDate = strtotime($startDate);

    while ($currentDate <= strtotime($endDate)) {
        if (date('N', $currentDate) == 6) {  
            $count+=0.5;
        }
        $currentDate = strtotime('+1 day', $currentDate);  
    }

    return $count;
}
