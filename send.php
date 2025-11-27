<?php
$data = json_decode(file_get_contents('php://input'), true);
$game = $data['game'];

$botToken = "8407110778:AAHMcp5n2AwfEFmg9IPiXoAzpvKeaJSOIoo"; 
$chatId = "7725797144";     

$message = "New Request – Heaven Of Games\nJeu demandé: $game\nTime: ".date("d/m/Y H:i");

file_get_contents("https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=".urlencode($message));

echo "ok";
?>
