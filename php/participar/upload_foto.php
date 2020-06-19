<?php
require '../sign.php';
$sign = new Sign();

// $cFile = new CURLFile($_FILES['file_participar1']['tmp_name'], $_FILES['file_participar1']['type'], basename($_FILES['file_participar1']['name']));
// $data = array( "filedata" => $cFile, "filename" => $cFile->postname);
// // Get cURL resource
//    //print_r ($cFile);
// //echo "$cFile";
// $ch = curl_init();

// $url = $sign -> getHost2().'/api/upload';

// //$url = "URL_PATH of upload.php"; // e.g. http://localhost/myuploader/upload.php // request URL
// $filename = $_FILES['file_participar1']['name'];
// $filedata = $_FILES['file_participar1']['tmp_name'];
// $filesize = $_FILES['file_participar1']['size'];

//     $headers = array("text/plain; charset=utf-8",
//     "content-type: multipart/form-data;"); // cURL headers for file uploading
//     $postfields = array("filedata" => "@$filedata", "filename" => $filename);
//     $ch = curl_init();
//     $options = array(
//         CURLOPT_URL => $url,
//         CURLOPT_HEADER => true,
//         CURLOPT_POST => true,
//         CURLOPT_HTTPHEADER => $headers,
//         CURLOPT_POSTFIELDS => $postfields,
//         CURLOPT_INFILESIZE => $filesize,
//         CURLOPT_RETURNTRANSFER => true
//     ); // cURL options
//     //print_r ($options);

//     curl_setopt_array($ch, $options);


// // Send the request & save response to $resp
// $resp = curl_exec($ch);


// if(!$resp) {
//   die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
// } else {
//   echo  $resp;
// }

// // Close request to clear up some resources
// curl_close($ch);

$cFile = new \CURLFile($_FILES['file']['tmp_name'], $_FILES['file']['type'], basename($_FILES['file']['name']));
//$data = array( "filedata" => $cFile, "filename" => $cFile->postname);
$data = array( "filedata" => $cFile);
// Get cURL resource

$url = $sign -> getHost2();

$ch = curl_init();

// Set url
curl_setopt($ch, CURLOPT_HTTPHEADER, array('',) );
// Set method
curl_setopt($ch, CURLOPT_URL, $url); 
 curl_setopt($ch, CURLOPT_HEADER, false ); 
 curl_setopt($ch, CURLOPT_POST,1);
             
 curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Send the request & save response to $resp
$resp = curl_exec($ch);


if(!$resp) {
  die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
} else {
  echo  $resp;
}

// Close request to clear up some resources
curl_close($ch);

