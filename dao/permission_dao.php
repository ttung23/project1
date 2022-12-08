<?php
function loadAll_permissions(){
    $query = "select * from permissions";
    $permission = pdo_query_all($query);
    return $permission;
}
function loadAll_permissionsone($id){
    $query = "select * from permissions where permission_id = ?";
    $room = pdo_query_one($query,$id);
    return $room;
}

function load_permission_by_id($id_per){
    $query = "select * from permissions where permission_id = ?";
    $permission = pdo_query_one_person($query, $id_per);
    return $permission;
}

function permissions_remove_by_id($cate_id){
    $query = "delete from permissions where permission_id = ?";
    pdo_execute($query, $cate_id);
}
function Insert_permissions($name,$description){
    $query = "INSERT into permissions(name,description, create_at) values(?,?, current_timestamp())";
    pdo_execute($query, $name,$description);
}
function Update_permissions($name,$description,$id)
{
    $query = "Update permissions set name = ?, description = ? where permission_id = ?";
    pdo_execute($query,$name,$description,$id);
}

?>