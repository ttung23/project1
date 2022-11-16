<?php
function loadAll_categories(){
    $query = "select * from categories_room order by categories_id desc";
    $listcategories = pdo_query_all($query);
    return $listcategories;
}

function category_remove_by_id($cate_id){
    $query = "delete from categories where id = ?";
    pdo_execute($query, $cate_id);
}

?>