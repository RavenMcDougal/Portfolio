<?php
$targetDir = "images/";

foreach ($_FILES["photos"]["tmp_name"] as $key => $tmp) {
  $name = basename($_FILES["photos"]["name"][$key]);
  $target = $targetDir . time() . "_" . $name;
  move_uploaded_file($tmp, $target);
}

header("Location: index.php");
exit;
