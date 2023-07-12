//yılın hangi çeyreğinde olduğumuzu tespit eder ve o çeyreğin ilk ve son günlerini array içinde döndürür
function hangiCeyrekteyiz()
{
    $monthToday=date('m');
    switch (true) {
        case ($monthToday=='01' || $monthToday=='02' || $monthToday=='03') :
            $date1 = date('Y').'-01-01';
            $date2 = date('Y').'-03-31';
            break;
        case ($monthToday=='04' || $monthToday=='05' || $monthToday=='06') :
            $date1 = date('Y').'-04-01';
            $date2 = date('Y').'-06-30';
            break;
        case ($monthToday=='07' || $monthToday=='08' || $monthToday=='09'):
            $date1 = date('Y').'-07-01';
            $date2 = date('Y').'-09-30';
            break;
        case ($monthToday=='10' || $monthToday=='11' || $monthToday=='12'):
            $date1 = date('Y').'-10-01';
            $date2 = date('Y').'-12-31';
            break;
        default:
            return "Invalid date";
    }  
    return array($date1, $date2);
}
