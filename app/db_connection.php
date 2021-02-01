<?php

$mysql_access = mysqli_connect('localhost','root','root','coffee_shop');

function fetchData($query)
{
    global $mysql_access;
    $queryResult    = mysqli_query($mysql_access, $query) or die(mysqli_error($mysql_access));
    $data           = [];
    while($row      = mysqli_fetch_assoc($queryResult)) {
        $data[]     = $row;
    }
    return $data;
}

function fetchDataObject($query)
{
    global $mysql_access;
    $queryResult    = mysqli_query($mysql_access, $query) or die(mysqli_error($mysql_access));
    $data           = [];
    while($row      = mysqli_fetch_object($queryResult)) {
        $data[]     = $row;
    }
    return $data;
}

function dbQuery($query)
{
    global $mysql_access;
    return mysqli_query($mysql_access, $query) or die(mysqli_error($mysql_access));
}
