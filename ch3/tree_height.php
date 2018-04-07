<?php
$distance = 20;
$rad = 32 * pi() / 180;
$height = $distance * tan($rad);
$height = round($height*10)/10;

echo "木の高さは{$height}mです．";
?>