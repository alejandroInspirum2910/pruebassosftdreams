<?php
require '../sign.php';
$sign = new Sign();
session_start();
// Get cURL resource
$ch = curl_init();

// Set url
curl_setopt($ch, CURLOPT_URL, $sign -> getHost().'/users/mail/change');

// Set method
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');

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
            "new_mail_address" => $_POST['new_mail_address']
        ]; 

        
$body = json_encode($json_array);

// Set body
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);

// Send the request & save response to $resp
$resp = curl_exec($ch);

if(!$resp) {
  die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
} 
else {
  $obj = json_decode($resp);
  if ($obj->{'internal_code'}='0') 
  {
  	$_SESSION['mail_address']=$obj->{'response_object'}->{'mail_address'};
  }
  

  echo $resp;
}

// Close request to clear up some resources
curl_close($ch);