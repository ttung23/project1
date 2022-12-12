<?php
function loadAll_categories(){
    $query = "select * from categories_room limit 6";
    $listcategories = pdo_query_all($query);
    return $listcategories;
}

function loadOne_category ($id) {{
    $query = "select * from categories_room where categories_id = ? limit 6";
    $listcategories = pdo_query_one_person($query, $id);
    return $listcategories;
}}

function load_cate_by_status ($status) {
    $query = "select * from categories_room where status = ? limit 6";
    $listcategories = pdo_query_all($query, $status);
    return $listcategories;
}

function set_status_cate ($status, $id_cate) {
    $sql = "UPDATE categories_room set status = ?, updated_at = current_timestamp() where categories_id = ?";
    pdo_execute($sql, $status, $id_cate);
}

function category_remove_by_id ($cate_id){
    $query = "delete from categories_room where categories_id= ?";
    pdo_execute($query, $cate_id);
}

function Insert_category($name,$status,$description,$images){
    $query = "Insert into categories_room (name, status, description, images) values(?,?,?,?)";
    pdo_execute($query, $name, $status, $description, $images);
}
function Update_category($name,$status,$description,$images, $id_cate)
{
    $query = "UPDATE categories_room set name = ? ,status = ?,description = ?,images = ?, created_at = current_timestamp() where categories_id = ?";
    pdo_execute($query,$name,$status,$description,$images, $id_cate);
}

?>