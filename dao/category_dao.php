<?php
function loadAll_categories(){
    $query = "select * from categories_room";
    $listcategories = pdo_query_all($query);
    return $listcategories;
}

function category_remove_by_id ($cate_id){
    $query = "delete from categories_room where categories_id= ?";
    pdo_execute($query, $cate_id);
}

function Insert_category($name,$status,$description,$images){
    $query = "Insert into categories_room (name, status, description, images) values(?,?,?,?)";
    pdo_execute($query, $name, $status, $description, $images);
}
function Update_feedbacks($name,$status,$description,$images)
{
    $query = "Update categories_room set name = ? ,status = ?,description = ?,images = ?, where categories_id = ?";
    pdo_execute($query,$name,$status,$description,$images);
}

?>