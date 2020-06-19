<?php
require '../sign.php';
$sign = new Sign();
session_start();
// Get cURL resource
$ch = curl_init();

// Set url
curl_setopt($ch, CURLOPT_URL, $sign -> getHost().'/tickets/register');

// Set method
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');

// Set options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Set headers
curl_setopt($ch, CURLOPT_HTTPHEADER, [
  'Authorization:'.$sign->signAuth().'',
  "Content-Type: application/json; charset=utf-8",
 ]
);
// Create body
$json_array = [
            "uuid" => $_SESSION['uuid'],
            "media_id" => $_POST['media_id'],
            "store_id" => $_POST['store_id'],
            "ticket_number" => $_POST['ticket_number'],
            "ticket_date" =>  $_POST['ticket_date'],
            "ticket_amount" =>  $_POST['ticket_amount']
        ]; 

        
$body = json_encode($json_array);

// Set body
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);

// Send the request & save response to $resp
$resp = curl_exec($ch);

if(!$resp) {
  die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
} else 
{

  echo $resp;
}

// Close request to clear up some resources
curl_close($ch);