<?php
function loadAll_service(){
    $query = "select * from service order by service_id desc";
    $listservice = pdo_query_all($query);
    return $listservice;
}

function service_remove_by_id($cate_id){
    $query = "delete from service where id = ?";
    pdo_execute($query, $cate_id);
}
function Insert_user($name,$username,$password,$gender,$email,$images,$address,$phone,$date){
    $query = "Insert into users(name,username,password,gender,email,adress,phone,date) values(?,?,?,?,?,?,?)";
    pdo_execute($query, $name,$username,$password,$gender,$email,$images,$address,$phone,$date);
}
function Update_user($id,$name,$username,$password,$gender,$email,$images,$address,$phone,$date)
{
    $query = "Update users set name = ? , username = ?,password = ?,gender = ?,email = ?, images = ?, address = ?, phone = ?, date = ? where user_id = ?";
    pdo_execute($query, $name,$username,$password,$gender,$email,$images,$address,$phone,$date,$id);
}

?>