<?php 
if(isset($_COOKIE['Datee']))
{
$cookiedata = $_COOKIE['Datee'];
}
$todayh = getdate();
print_r($today);
$d = $todayh[mday];
$m = $todayh[mon];
$y = $todayh[year];
$hr = $todayh[hours];
$mi = $todayh[minutes];
$se = $todayh[seconds];
$datestring = "$d - $m - $y, $hr :  $mi  :$se ";
setcookie("Datee",$datestring);
echo "your last visit : ", "$cookiedata";
?>