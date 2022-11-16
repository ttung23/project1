<?php

function loadAll_comment(){
    $query = "select r.*,st.star,count(sv.id_room) as 'sv',COUNT(st.id_room) as 'tbl' from room r left join vote_room st on st.id_room = r.room_id left join service sv on sv.id_room=r.room_id GROUP BY room_id desc limit 0,4;";
    $listroom = pdo_query_all($query);
    return $listroom;
}
function loadOne_comment($id)
{
    $sql = "select vr.*,us.name as 'tennguoidung' from vote_room vr inner join room r on r.room_id = vr.id_room inner join users us on us.user_id = vr.id_user where id_room =" . $id;
    $comment = pdo_query_one($sql);
    return $comment;
}
function load_room_comment($id)
{
    $sql = "select * from room where id_category_room=" . $id;
    $room = pdo_query_all($sql);
    return $room;
}
function comment_remove_by_cate_id($cate_id){
    $query = "delete from products where category_id = ?";
    pdo_execute($query, $cate_id);
}


?>