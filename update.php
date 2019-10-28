<?php
require_once 'dbconn.php';

$id=$_POST['idSV'];
$name=$_POST['nameSV'];
$age=$_POST['ageSV'];
$address=$_POST['addressSV'];

$sql="UPDATE contact SET name='$name',age='$age',address='$address' WHERE id='$id'";
if($conn->query($sql)){
    echo "success";
}else{
    echo "fail";
}
?>