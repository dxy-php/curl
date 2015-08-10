<?php
$url = 'http://www.demo.com/file/upload';
$media_type = 'text/plain';
$media_type = 'file';
$rename =  'test.txt';
$cfile = curl_file_create(__DIR__.'/t.txt',$media_type,$rename);
$ch = curl_init($url);
//// Assign POST data
curl_setopt($ch,CURLOPT_HTTPHEADER,array("Expect:  "));
$data = array('uploadFile' => $cfile,'media_type'=>'file');
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$content = curl_exec($ch);
$info = curl_getinfo($ch);
curl_close($ch);

print_r($content);
print_r($info);
