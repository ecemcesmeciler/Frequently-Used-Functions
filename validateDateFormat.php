// tarih Y-m-d formatında mı kontrol eder 
function validateDateFormat($date) {
    $dateTime = DateTime::createFromFormat('Y-m-d', $date);
    return $dateTime && $dateTime->format('Y-m-d') === $date;
}
