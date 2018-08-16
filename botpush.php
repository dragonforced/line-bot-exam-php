<?php



require "vendor/autoload.php";

$access_token = 'k0GW1kDqdCnUStcbSEPUFDDwMcD2CsqnlK5UD4BpdYsn3edbY7mCx/yLMP2a5NMuNKwa8kb5IdQk7qZAF6+6MST9aUvbF907iy3QUFOToCrb3J2nVnfdYsLjaG04kqD6fR4pGT6I0qlBjcmgBXPzJAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '443912894eddfac62389bf3c6e70b492';

$pushID = 'Ue6493050c50fe07e1e2d21a2d681d9cb';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







