<?php
require '../sign.php';
$sign = new Sign();

$mediaId ="";
if(isset($_FILES['file'])){


    $cFile = new CURLFile($_FILES['file']['tmp_name'], $_FILES['file']['type'], basename($_FILES['file']['name']));
    $data = array( "filedata" => $cFile, "filename" => $cFile->postname);
    // Get cURL resource
       
    $ch = curl_init();

    $url = $sign -> getHost2().'/api/upload';
    // Set url
    //curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data;") );
    // Set method
    curl_setopt($ch, CURLOPT_URL, $url ); 
     curl_setopt($ch, CURLOPT_HEADER, true ); 
     curl_setopt($ch, CURLOPT_POST,true);
     
     curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Accept: text/html",
    "content-type: multipart/form-data;"));           
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $resp = curl_exec($ch);


    if(!$resp) {
      die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
    } else {
      //$obj = json_decode($resp);
      //$mediaId = $obj->{'response_object'}->{'media_id'};
      echo $resp;
    }

    // Close request to clear up some resources
    curl_close($ch);

}