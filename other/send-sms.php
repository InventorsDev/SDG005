<?php

require_once "vendor/autoload.php"; 
use Twilio\Rest\Client;

$account_sid = "ACe68a55c222e6a1a6a7819aef7f68ff7d";
$auth_token = "b8c04b5596549b155183f6eb1bab84e7";
$twilio_phone_number = "+13343105864";

$client = new Client($account_sid, $auth_token);

$client->messages->create(
    '+14242753278',
    array(
        "from" => $twilio_phone_number,
        "body" => "Hello from Monthlies, Please make sure you get your sanitary pad prepared for your monthly period. Thanks!"
    )
);
?>