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

function load_one_service ($id_service) {
    $query = "SELECT sv.*, room.name as room_name FROM `service` sv LEFT JOIN room on sv.id_room = room.room_id WHERE sv.service_id = ?;";
    $listservice = pdo_query_one_person($query, $id_service);
    return $listservice;
}

function load_service_by_status ($status) {
    $sql = "SELECT sv.*, room.name as room_name FROM `service` sv LEFT JOIN room on sv.id_room = room.room_id where sv.status = ?";
    $listservice = pdo_query_one($sql, $status);
    return $listservice;
}

function service_remove_by_id($id_service){
    $query = "delete from service where service_id = ?";
    pdo_execute($query, $id_service);
}

function set_status_service ($status, $id_service) {
    $query = "UPDATE service set status = ?, updated_at = current_timestamp() where service_id = ?";
    pdo_execute($query, $status, $id_service);
}

function Insert_service($name,$images,$description,$price,$quantity,$status,$id_room){
    $query = "Insert into service(name, images, description, price, quantity, status, id_room) values(?,?,?,?,?,?,?)";
    pdo_execute($query, $name,$images,$description,$price,$quantity,$status,$id_room);
}
function Update_service($name, $images, $description, $price, $quantity, $id_room, $id_service)
{
    $query = "Update service set name = ?, images = ?, description = ?, price = ?, quantity = ?, id_room = ? where service_id = ?";
    pdo_execute($query, $name, $images, $description, $price, $quantity, $id_room, $id_service);
}

?>