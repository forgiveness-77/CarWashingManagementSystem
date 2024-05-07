<?php
$input_string = "PHPPOT";
$response_hashcode = array();
$response_hashcode["md5_raw_empty"] = md5($input_string);
$response_hashcode["md5_raw_false"] = md5($input_string, FALSE);
$response_hashcode["md5_raw_true"] = md5($input_string, TRUE);
$response_hashcode["sha1_raw_empty"] = sha1($input_string);
$response_hashcode["sha1_raw_false"] = sha1($input_string, FALSE);
$response_hashcode["sha1_raw_true"] = sha1($input_string, TRUE);
print "<PRE>";
print_r($response_hashcode);
print "</PRE>";
?>