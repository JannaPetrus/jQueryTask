<?php
include_once 'json-header-sleep.php';
$str = file_get_contents('C:\Program Files (x86)\Ampps\www\jq-course.local\www\mocks\post_search.ser.php');
$arr = unserialize($str);
echo json_encode($arr);
?>
