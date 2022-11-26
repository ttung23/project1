<?php
function loadAll_news(){
    $query = "SELECT news.*, ad.name as admin_name FROM news LEFT JOIN admins ad on news.id_admin = ad.admin_id";
    $listservice = pdo_query_all($query);
    return $listservice;
}

function news_remove_by_id($news_id){
    $query = "delete from news where news_id = ?";
    pdo_execute($query, $news_id);
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