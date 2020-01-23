<?php
// DB Import : Ali Can Gönüllü
// xxx.php?pic=pics/file_name.jpg OR xxx.php?pic=file_name.jpg

include "class/yuz_tanilama.php";
$get = $_GET["pic"];
$getcurl = $_GET["curl"];

if($getcurl == "1"){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $get);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_MAXREDIRS, 5);
$s = curl_exec($ch);
} else {
}
if(empty($get)) {
	echo 'Yüz Tanımlanamadı!';
} else {
$detector = new alicangonullu\YuzTanila('class/algila.dat');

if($getcurl == "1"){
$detector->faceDetect($s);
} else {
$detector->faceDetect($get);
}

$tojson = $detector->toJson();
include ("conn.php");
if($getcurl == "1"){
	$base64 = base64_encode($s);
} else {
$type = pathinfo($get, PATHINFO_EXTENSION); //If use cURL, Delete this code
$data = file_get_contents($get); //If use cURL, Delete this code
$base64 = base64_encode($data);
}

$update = $db->prepare("INSERT INTO face_table(face_title, face_json, face_data) VALUES (:title, :json, :data) ");
$update->bindValue(':title', $get);
$update->bindValue(':json', $tojson);
$update->bindValue(':data', $base64);
$db->beginTransaction();
$update->execute();
$db->commit();
if($update){
echo '<script>alert("Başarılı | Success");</script>';
if($getcurl == "1"){
// curl_close($ch);
} else {
}

}
}
?>
