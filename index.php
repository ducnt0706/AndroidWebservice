<?php

//1.Create a Sinh Vien Class
class SinhVien{
    //1.constructor
    function SinhVien($id,$name,$age,$address){
        $this->Id=$id;
        $this->Name=$name;
        $this->Age=$age;
        $this->Address=$address;
    }
}
//2.Tao mang
$arr= array();

//3.Connect to databse
require_once 'dbconn.php';


//4.them phan tu mang
$sql="SELECT * FROM contact";
$data=$conn->query($sql);
foreach($data as $row){ 
  array_push($arr,new SinhVien($row['id'],$row['name'],$row['age'],$row['address']));
}

//4.chuyen dinh dang mang -Json
json_encode($arr);
echo json_encode($arr);
?>