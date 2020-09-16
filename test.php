<?php
$severname="DESKTOP-BPII449\SQLEXPRESS";
$connectioninfo=array("Database"=>"test", "UID"=>"sa", "PWD"=>"ngoc123");
$conn=sqlsrv_connect($severname,$connectioninfo);

if($conn){
    echo "ket noi thanh cong";
}else{
    echo "ket noi that bai";
    die(print_r(sqlsrv_errors(), true));
}

?>