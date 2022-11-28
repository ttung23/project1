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
function Insert_news($name,$images,$content,$status,$id_admin){
    $query = "Insert into news(name,images,content,status,id_admin) values(?,?,?,?,?)";
    pdo_execute($query,$name,$images,$content,$status,$id_admin);
}
function Update_news($name,$images,$content,$status,$id_admin,$id)
{
    $query = "Update news set name = ? ,images = ?,content = ?,status = ?,id_admin = ? where news_id = ?";
    pdo_execute($query,$name,$images,$content,$status,$id_admin,$id);
}

?>