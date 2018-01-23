<?php
$git = file_get_contents('http://www.tff.org/Default.aspx?pageID=198');
preg_match_all('@<table width="100%" border="0" cellpadding="1" cellspacing="1">(.*?)</table>@si',$git,$tablo);
$gelen =  strip_tags($tablo[0][0],"<td></td><tr></tr><table></table>");
echo $gelen;
?>