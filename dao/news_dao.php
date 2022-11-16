<?php
function loadAll_news(){
    $query = "select * from news order by news_id desc";
    $listservice = pdo_query_all($query);
    return $listservice;
}

function news_remove_by_id($cate_id){
    $query = "delete from service where id = ?";
    pdo_execute($query, $cate_id);
}

?>