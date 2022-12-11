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

function load_one_new ($id_new) {
    $query = "SELECT news.*, ad.name as admin_name FROM news LEFT JOIN admins ad on news.id_admin = ad.admin_id where news_id = ?";
    $listservice = pdo_query_one_person($query, $id_new);
    return $listservice;
}

function load_new_by_status ($status) {
    $sql = "SELECT news.*, ad.name as admin_name FROM news LEFT JOIN admins ad on news.id_admin = ad.admin_id where news.status = ?";
    $new = pdo_query_all($sql, $status);
    return $new;
}

function set_status_new ($status, $id_new) {
    $sql = "UPDATE news set status = ?, updated_at = current_timestamp() WHERE news_id = ?";
    pdo_execute($sql, $status, $id_new);
}

function Insert_new($name,$images,$content,$status,$id_admin){
    $query = "INSERT into news (name,images,content,status,id_admin, created_at) VALUES(?,?,?,?,?, current_timestamp())";
    pdo_execute($query,$name,$images,$content,$status,$id_admin);
}

function Update_news($name, $images, $content, $id_admin, $id)
{
    $query = "UPDATE news set name = ?, images = ?, content = ?, id_admin = ?, updated_at = current_timestamp() where news_id = ?";
    pdo_execute($query, $name, $images, $content, $id_admin, $id);
}

function Approve_news ($id_news) {
    $query = "UPDATE news set status = 1, updated_at = current_timestamp() where news_id = ?";
    pdo_execute($query, $id_news);
}

function Prive_news ($id_news) {
    $query = "UPDATE news set status = 2, updated_at = current_timestamp() where news_id = ?";
    pdo_execute($query, $id_news);
}

?>