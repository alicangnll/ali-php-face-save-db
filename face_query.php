<?php
include "conn.php";
$stmt = $db->prepare('SELECT * FROM face_table WHERE face_id = :iddegeri');
$stmt->execute(array(':iddegeri' => strip_tags($_GET["gor"])));
if($row = $stmt->fetch()) {
echo '<title>'.$row["face_title"].'</title>';
echo '<b>Face Location<pre>'.$row["face_json"].'</pre></b><br><b>Pics : </b><br>';
echo '<img src="face_show.php?pic='.$row["face_id"].'" alt="Face Picture" />';
}
?>