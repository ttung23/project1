<?php
function loadAll_permissions(){

    $query = "select * from permissions order by permission_id desc";
    $listservice = pdo_query_all($query);
    return $listservice;
}
function loadAll_permissionsone($id){
    $query = "select * from permissions where permission_id = ?";
    $room = pdo_query_one($query,$id);
    return $room;
}
function permissions_remove_by_id($cate_id){
    $query = "delete from permissions where permission_id = ?";
    pdo_execute($query, $cate_id);
}
function Insert_permissions($name,$description){
    $query = "Insert into permissions(name,description) values(?,?)";
    pdo_execute($query, $name,$description);
}
function Update_permissions($name,$description,$id)
{
    $query = "Update permissions set name = ? ,description = ? where permission_id = ?";
    pdo_execute($query,$name,$description,$id);
}

?>