<?php
function loadAll_service(){
    $query = "select * from service order by service_id desc";
    $listservice = pdo_query_all($query);
    return $listservice;
}
function loadAll_service_room($id){
    $query = "select * from service where id_room= ? desc";
    $listservice = pdo_query_one($query,$id);
    return $listservice;
}

function service_remove_by_id($cate_id){
    $query = "delete from service where id = ?";
    pdo_execute($query, $cate_id);
}
function Insert_service($name,$images,$description,$price,$quantity,$status,$id_room){
    $query = "Insert into service(name,images,description,price,quantity,status,id_room) values(?,?,?,?,?,?,?)";
    pdo_execute($query, $name,$images,$description,$price,$quantity,$status,$id_room);
}
function Update_service($name,$images,$description,$price,$quantity,$status,$id_room)
{
    $query = "Update service set name = ? , images = ?,description = ?,price = ?,quantity = ?, status = ?, id_room = ? where user_id = ?";
    pdo_execute($query,$name,$images,$description,$price,$quantity,$status,$id_room);
}

?>