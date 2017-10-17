<?php
$date =  date('Y/m/d', time());
echo "The value of \$date: ".$date."<br>";
echo "<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";
echo "<br>";

if(i>0){
	echo"the future";
} elseif(i<0){
	echo"the past";
} else{
	echo"Oops";
}
echo"<br>";

echo"<br>";

echo strpos($tar, "/")."<br>";
echo strrpos($tar, "/");
echo"<br>";

echo"<br>";

echo stripos($date)."<br>";
echo"<br>";

echo str_word_count($tar)."<br>";
echo"<br>";

echo strlen($tar)."<br>";
echo"<br>";

echo ord($tar)."<br>";
echo"<br>";

echo substr($date,-2)."<br>";
echo"<br>";

$date =  date('Y/m/d', time());
echo str_split($date)."<br>";
print_r($date);



$year = array("2012", "396", "300","2000", "1100", "1089");

echo "The value of \$year: ";

print_r($year)
//foreach ($year as $value) {
//    $value = ;
//}



?>