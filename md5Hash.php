$str = "xxxxxxx";
$a=md5($str);

echo $a;
$b=md5("xxxxxxx");
if($a==$b)
{
	echo(' ok');
}
