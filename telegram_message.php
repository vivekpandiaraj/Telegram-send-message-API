<?php	
function sendMessage($chatID, $messaggio, $token) {

$url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatID;
$url = $url . "&text=" . urlencode($messaggio);
$ch = curl_init();
$optArray = array(
CURLOPT_URL => $url,
CURLOPT_RETURNTRANSFER => true
);
curl_setopt_array($ch, $optArray);
$result = curl_exec($ch);
curl_close($ch);
return $result;
} //function end

$token = "Your Bot Token which is available in Botfather";
$chatid = "Your Telegram Numeric id";
echo sendMessage($chatid, "Your Message", $token);
?>
