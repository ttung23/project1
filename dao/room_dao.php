<?php

function loadAll_room(){
    $query = "select r.*,st.star,count(sv.id_room) as 'sv',COUNT(st.id_room) as 'tbl' from room r left join vote_room st on st.id_room = r.room_id left join service sv on sv.id_room=r.room_id GROUP BY room_id desc limit 0,4;";
    $listroom = pdo_query_all($query);
    return $listroom;
}
function loadOne_room($id)
{
    $sql = "select * from room where room_id =" . $id;
    $room = pdo_query_one($sql);
    return $room;
}
function load_room_categories($id)
{
    $sql = "select * from room r inner join service sv on sv.id_room= r.room_id  where id_category_room=" . $id;
    $room = pdo_query_all($sql);
    return $room;
}
function product_remove_by_cate_id($cate_id){
    $query = "delete from products where category_id = ?";
    pdo_execute($query, $cate_id);
}
function room_tang_so_luot_xem($id){
    $sql = "UPDATE room SET view = view + 1 WHERE id=?";
    pdo_execute($sql, $id);
}


?>