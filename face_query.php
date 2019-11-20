<?php
include "conn.php";
$stmt = $db->prepare('SELECT * FROM face_table WHERE face_id = :iddegeri');
$stmt->execute(array(':iddegeri' => strip_tags($_GET["gor"])));
$stmt->execute();
if($row = $stmt->fetch()) {
echo '<title>'.$row["face_title"].'</title>';
echo '<b>Face Location<pre>'.$row["face_json"].'</pre></b><br><b>Pics : </b><br>';
echo '<img src="data:image/png;base64,'.$row["face_data"].'" alt="Face Picture" />';
}
?>