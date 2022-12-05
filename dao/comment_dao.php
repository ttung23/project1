<?php
function load_comment_database()
{
    $sql = "SELECT users.name, vr.vote_room_id, vr.comment, vr.star, room.name as room_name, vr.created_at 
    FROM room 
    INNER JOIN vote_room vr ON room.room_id = vr.id_room 
    INNER JOIN users ON vr.id_user = users.user_id;";
    $comment = pdo_query_all($sql);
    return $comment;
}

function loadOne_comment($id)
{
    $sql = "select vr.*,us.name as 'tennguoidung' from vote_room vr left join room r on r.room_id = vr.id_room left join users us on us.user_id = vr.id_user where id_room =" . $id;
    $comment = pdo_query_one($sql);
    return $comment;
}

function load_room_comment($id)
{
    $sql = "select * from room where id_category_room=" . $id;
    $room = pdo_query_all($sql);
    return $room;
}

function Insert_conmment($content,$idroom,$id_user)
{
    $sql = "insert into vote_room(comment,id_room,id_user) value('$content','$idroom','$id_user')";
    $comment = pdo_execute($sql);
}

// update comment user
function Update_comment($star,$comment)
{
    $query = "Update vote_room set star = ? ,comment = ?";
    pdo_execute($query,$star,$comment);
}

function Remove_comment($id_comment){
    $query = "delete from vote_room where vote_room_id = ?";
    pdo_execute($query, $id_comment);
}

// đếm tổng số bình luận
function countbl()
{
    $sql = "SELECT vote_room_id FROM vote_room_id WHERE vote_room_id > 0";
    $comment = pdo_query_all($sql);
    return $comment;
}

function detailcomment()
{
    $sql = "select hh.room_id,hh.name,count(*) quantity,min(create_at),max(create_at) from vote_room bl join room hh on hh.id = bl.id_product GROUP BY hh.room_id,hh.name having quantity >0;";
    $comment = pdo_query_all($sql);
    return $comment;
}
