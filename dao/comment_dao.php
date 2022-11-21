<?php
function load_comment_database()
{
    $sql = "select * from vote_room order by vote_room_id desc";
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
function Insert_conmment($content,$idroom)
{
    $sql = "insert into vote_room(comment,id_room) value('$content','$idroom')";
    $comment = pdo_execute($sql);
    return $comment;
}
// update comment user
function Update_comment($star,$comment)
{
    $query = "Update vote_room set star = ? ,comment = ?";
    pdo_execute($query,$star,$comment);
}
function comment_remove_by_cate_id($cate_id){
    $query = "delete from products where category_id = ?";
    pdo_execute($query, $cate_id);
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


?>