<?php
function loadAll_service() {
    $query = "SELECT sv.*, room.name as room_name FROM `service` sv LEFT JOIN room on sv.id_room = room.room_id;";
    $listservice = pdo_query_all($query);
    return $listservice;
}
function loadAll_service_room($id){
    $query = "select * from service where id_room=".$id;
    $listservice = pdo_query_one($query);
    return $listservice;
}

function service_remove_by_id($id_service){
    $query = "delete from service where service_id = ?";
    pdo_execute($query, $id_service);
}
function Insert_service($name,$images,$description,$price,$quantity,$status,$id_room){
    $query = "Insert into service(name, images, description, price, quantity, status, id_room) values(?,?,?,?,?,?,?)";
    pdo_execute($query, $name,$images,$description,$price,$quantity,$status,$id_room);
}
function Update_service($name,$images,$description,$price,$quantity,$status,$id_room)
{
    $query = "Update service set name = ? , images = ?,description = ?,price = ?,quantity = ?, status = ?, id_room = ? where user_id = ?";
    pdo_execute($query,$name,$images,$description,$price,$quantity,$status,$id_room);
}

?>