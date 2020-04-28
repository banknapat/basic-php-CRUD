<?php
// ต่อ database
$condb = mysqli_connect("localhost","root","12345678","workshop_crud_member") or die("Error : ".mysqli_error($condb));

//set utf8 การตั้งค่าให้ใช้งานร่วมกับภาษาไทยได้
mysqli_query($condb, "SET NAMES 'utf8' ");
//set time zone
date_default_timezone_set('Asia/Bangkok');

?>