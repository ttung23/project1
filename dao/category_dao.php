<?php
function loadAll_categories(){
<<<<<<< HEAD
    $query = "select * from categories_room order by categories_id desc";
=======
    $query = "select * from categories_room";
>>>>>>> c8d86ca (add file)
    $listcategories = pdo_query_all($query);
    return $listcategories;
}

<<<<<<< HEAD
function category_remove_by_id($cate_id){
    $query = "delete from categories where id = ?";
    pdo_execute($query, $cate_id);
}
function Insert_category($name,$status,$description,$images){
    $query = "Insert into feedbacks($name,$status,$description,$images) values(?,?,?,?)";
    pdo_execute($query,$name,$status,$description,$images);
=======
function category_remove_by_id ($cate_id){
    $query = "delete from categories_room where categories_id= ?";
    pdo_execute($query, $cate_id);
}

function Insert_category($name,$status,$description,$images){
    $query = "Insert into categories_room (name, status, description, images) values(?,?,?,?)";
    pdo_execute($query, $name, $status, $description, $images);
>>>>>>> c8d86ca (add file)
}
function Update_feedbacks($name,$status,$description,$images)
{
    $query = "Update categories_room set name = ? ,status = ?,description = ?,images = ?, where categories_id = ?";
    pdo_execute($query,$name,$status,$description,$images);
}

?>