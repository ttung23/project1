<?php
function loadAll_permissions(){
    $query = "select * from permissions order by permissions desc";
    $listservice = pdo_query_all($query);
    return $listservice;
}

function permissions_remove_by_id($cate_id){
    $query = "delete from permissions where permission_id = ?";
    pdo_execute($query, $cate_id);
}
function Insert_permissions($name,$description){
    $query = "Insert into permissions(name,description) values(?,?)";
    pdo_execute($query, $name,$description);
}
function Update_permissions($name,$description)
{
    $query = "Update permissions set name = ? ,description = ? where permission_id = ?";
    pdo_execute($query,$name,$description);
}

?>