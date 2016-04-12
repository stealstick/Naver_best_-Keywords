<?
#snoop class
include_once 'Snoopy.class.php';
$snoopy = new snoopy;

#naver
$snoopy->fetch("http://www.naver.com");
$txt = $snoopy->results;

#string number find

$findme = '<select name="query">';
$findme2 = '</select>
<input type="hidden" name="ie" value="utf8" />';
$pos = strpos($txt, $findme);
$pos2 = strpos($txt, $findme2);

$len=$pos2-$pos;												#실시간 검색어 string len

#file name
$today = date("YmdHis");
$filename="sil".$today.".txt";
echo $filename;
$fp = fopen("./silgum/$filename", 'w');
$fwrite = fwrite($fp, substr($txt, $pos, $len));
echo substr($txt, $pos, $len);


#fwrite($fp, $txt);
#fclose($fp);
?>
<meta charset = "utf-8">
