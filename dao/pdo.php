<?php
const DBHOST = "localhost";
const DBNAME = "hermes_hotel";
const DBUSER = "root";
const DBPASS = "";
const DBCHARSET = "utf8";

// tạo kết nối từ project php sang mysql
function getConnect(){
    $connect = new PDO("mysql:host=" .DBHOST. ";dbname=" .DBNAME. ";charset=" .DBCHARSET, DBUSER, DBPASS);
    return $connect;
}


function pdo_query_all($query){
    // select * from users where email = ? or role_id = ?

    $args = func_get_args();
    $args = array_slice($args, 1);
    
    $conn = getConnect();
    
    $stmt = $conn->prepare($query);
    $stmt->execute($args);
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);
    if(count($data) > 0){
        return $data;
    }

    return [];

}


function pdo_query_one($query){
    // select * from users where email = ? or role_id = ?

    $args = func_get_args();
    $args = array_slice($args, 1);
    
    $conn = getConnect();
    
    $stmt = $conn->prepare($query);
    $stmt->execute($args);
    $data = $stmt->fetch(PDO::FETCH_OBJ);
    if(count($data) > 0){
        return $data;
    }
    return null;

}


function pdo_execute_get_id($query){

    $args = func_get_args();
    $args = array_slice($args, 1);
    
    $conn = getConnect();
    
    $stmt = $conn->prepare($query);
    $stmt->execute($args);
    $lastId =  $conn->lastInsertId();
    return $lastId;
}


function pdo_execute($query){

    $args = func_get_args();
    $args = array_slice($args, 1);
    
    $conn = getConnect();
    
    $stmt = $conn->prepare($query);
    $stmt->execute($args);
   
}
?>