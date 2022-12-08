<?php
function loadAll_service() {
    $query = "SELECT se.*, room.name as room_name FROM `service_detail` sv LEFT JOIN room on sv.id_room = room.room_id LEFT JOIN service se on se.service_id = sv.id_service GROUP by se.service_id;    ";
    $listservice = pdo_query_all($query);
    return $listservice;
}
function loadAll_service_room($id){
    $query = "select sv.* from service sv left join service_detail dt on dt.id_service = sv.service_id left join room r on r.room_id = dt.id_room where dt.id_room =".$id;
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