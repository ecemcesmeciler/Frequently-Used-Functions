// ayların Türkçe'ye çevrilmesi
function tarihDenk($ay)
{
	$aylar = [
        '01' => 'Ocak',
        '02' => 'Şubat',
        '03' => 'Mart',
        '04' => 'Nisan',
        '05' => 'Mayıs',
        '06' => 'Haziran',
        '07' => 'Temmuz',
        '08' => 'Ağustos',
        '09' => 'Eylül',
        '10' => 'Ekim',
        '11' => 'Kasım',
        '12' => 'Aralık'
    ];
    return $aylar[$ay] ?? 'Geçersiz Ay';
}
