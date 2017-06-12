<?php
$access_token = 'wB8rBascTx7TGBkarq3AHl+Og5/BC5X86RmpCIXZ9rn10n27q7yAk/L2ab1m5JShbtHohF53jEyjq0gaUhMwTJweTaGv5fzIL/PKn1h56IrqSV6VkxmcHKRZJvi1lOxtFzwrRAV4on9kN5VI7DCo9AdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
