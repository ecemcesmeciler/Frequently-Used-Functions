// tarih cumartesiyse 0,5 değilse 1 döndürür
function isCumartesi($date) 
{
    $dateTime = DateTime::createFromFormat('d.m.Y', $date);
    $dayOfWeek = $dateTime->format('N'); 
    
    if ($dayOfWeek == 6) {
        return 0.5;
    } else {
        return 1;
    }
}
