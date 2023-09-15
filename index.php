<?php
require_once ('vendor/autoload.php'); // if you use Composer
require_once('ultramsg.class.php'); // if you download ultramsg.class.php

for($i = 0;$i<=1;$i++){
    $ultramsg_token="********"; // Ultramsg.com token
$instance_id="********"; // Ultramsg.com instance id
$client = new UltraMsg\WhatsAppApi($ultramsg_token,$instance_id);


//https://i.hizliresim.com/hvkv6xj.jpeg


$to="+90***********"; 
$image="https://i.hizliresim.com/hvkv6xj.jpeg"; 
$caption="Resimli yazı bile gelsin"; 
$priority=10;
$referenceId="SDK";
$nocache=false; 
$api=$client->sendImageMessage($to,$image,$caption,$priority,$referenceId,$nocache);

print_r($api);
}