<?php 
include("dbcon.php");

$mid = $_POST['memberid']; 
$cid = $_POST['courtid']; 
$bd = $_POST['bookingDate']; 
$st = $_POST['startTime']; 
$et = $_POST['endTime']; 

$sql = "insert into booking(memberid,courtid,bookingDate,starttime,endtime) values ('$mid','$cid','$bd','$st','$et')";

mysqli_query($conn,$sql); 
mysqli_close($conn); 
?>