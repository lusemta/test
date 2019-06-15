<?php
setlocale(LC_ALL, 'tr_TR.UTF-8');
session_start();
echo "naber";
define("ANA_DIZIN", "asds");
define("SERVER", "https://www.kurasepeti.com/");
define("DOSYAYOL",$_SERVER['DOCUMENT_ROOT']."/kurasepeti/");
// $_SERVER['DOCUMENT_ROOT']."/"
define("JSDEGIS",time());
$uygulama = new Uygulamalar;
