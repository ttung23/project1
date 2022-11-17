<?php
function loadAll_feedbacks(){
    $query = "select * from feedbacks order by feedbacks desc";
    $feedbacks = pdo_query_all($query);
    return $feedbacks;
}

function feedbacks_remove_by_id($cate_id){
    $query = "delete from feedbacks where feedback_id = ?";
    pdo_execute($query, $cate_id);
}
function Insert_feedbacks($content,$status,$reply_date,$id_user,$id_room){
    $query = "Insert into feedbacks(content,status,reply_date,id_user,id_room) values(?,?,?,?,?)";
    pdo_execute($query, $content,$status,$reply_date,$id_user,$id_room);
}
function Update_feedbacks($content,$status,$reply_date,$id_user,$id_room)
{
    $query = "Update feedbacks set content = ? ,status = ?,repy_date = ?,id_user = ?,id_room = ? where permission_id = ?";
    pdo_execute($query,$content,$status,$reply_date,$id_user,$id_room);
}

?>