<?php 

$konek = mysqli_connect('localhost','root','root','db_coffeshop');

function query($query){
    global $konek;
    $hasilQuery     = mysqli_query($konek, $query);
    $data           = [];
    while($row      = mysqli_fetch_assoc($hasilQuery)) {
        $data[]     = $row;
    }
    return $data;
}

function queryobj($query){
    global $konek;
    $hasilQuery     = mysqli_query($konek, $query);
    $data           = [];
    while($row      = mysqli_fetch_object($hasilQuery)) {
        $data[]     = $row;
    }
    return $data;
}
