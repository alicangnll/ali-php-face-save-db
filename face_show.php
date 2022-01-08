<?php
include ("conn.php");

$stmt = $db->prepare('SELECT * FROM face_table WHERE face_id = :iddegeri');
$stmt->execute(array(':iddegeri' => strip_tags($_GET["pic"])));
if($row = $stmt->fetch()) {
$get = ''.$row["face_data"].'';
}

$data = base64_decode($get);
$im = imagecreatefromstring($data);
if (!$im) {
die('Base64 Doğrulanamadı | Base64 Not Valid');
}
include "class/yuz_tanilama.php";
$img_file = 'conv/filename-'.date('Y-m-d').'-'.date('H-i-s').'.jpg';
$newbie = imagejpeg($im, $img_file, 256);

$detector = new alicangonullu\YuzTanila('class/algila.dat');
$detector->faceDetect($img_file);
$tojpeg = $detector->toJpeg();
?>
