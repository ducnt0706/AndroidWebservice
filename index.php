<?php
//1.Create a Sinh Vien Class
class SinhVien{
    //1.constructor
    function SinhVien($name,$age,$address){
        $this->Name=$name;
        $this->Age=$age;
        $this->Address=$address;
    }
}
//2.Tao mang
$arr= array();
//3.them phan tu mang
array_push($arr,new SinhVien("Nguyen Van A",21,"Cau Giay"));
array_push($arr,new SinhVien("Tran Thu Quynh",20,"Long Bien"));
array_push($arr,new SinhVien("Doan Lan Anh",22,"Xuan Dinh"));
//4.chuyen dinh dang mang -Json
json_encode($arr);
$test=json_encode($arr);
echo json_encode($arr);
?>