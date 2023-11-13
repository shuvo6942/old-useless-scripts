<?php
include'config.php';
$file=preg_replace('|<script(.*?)</script>|is','',$file);
$file = preg_replace('|<div class="ad(.*?)</div>|is','',$file);
$file = preg_replace('|<div class="logo">(.*?)</div>|is','<div class="logo"><a href="'.$siteurl.'"><img width="300" height="55" alt="'.$sitename.'" src="/images/logo.png" /></a></div>',$file);
$file=str_replace('SKYiTech.com','Khalequzzaman',$file);
$file=str_ireplace('NewMp3Maza.com',$sitename,$file);
$file=str_ireplace('WAPSITE','web portal',$file);

$file=str_replace('NewMp3Maza','NextMusics',$file);

$file=str_replace('newmp3maza.css','nextmusics.css',$file);

$file=str_replace('http://www.nextmusics.com/services/contect/','https://web.facebook.com/Khalequzzaman24',$file);

$file = preg_replace('|<form method="get"(.*?)</form>|is','',$file);
$file = str_replace('href="/','href="'.$siteurl.'/',$file);
$file = preg_replace('|<div class="f1">(.*?)</html>|is','',$file); 
$file=preg_replace(array('|<img src="/siteuploads(.*?)/>|','|<p class="showimage">(.*?)</p>|'),'',$file);
?>

