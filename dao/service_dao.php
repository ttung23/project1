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

?>