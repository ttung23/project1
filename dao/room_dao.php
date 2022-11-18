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
function load_room_service($id)
{
    $sql = "select r.* from room r inner join categories_room sv on sv.id_room= r.room_id  where id_category_room=" . $id;
    $room = pdo_query_all($sql);
    return $room;
}
function load_room_categories($id)
{
    $sql = "select * from room where id_category_room=" . $id;
    $room = pdo_query_all($sql);
    return $room;
}

function room_order_by_cate_id($cate_id){
    $query = "delete from room where category_id = ?";
    pdo_execute($query, $cate_id);
}
function room_remove($id){
    $query = "delete from room where room_id = ?";
    pdo_execute($query, $id);
}
function room_tang_so_luot_xem($id){
    $sql = "UPDATE room SET view = view + 1 WHERE id=?";
    pdo_execute($sql, $id);
}
function insert_room($name, $des, $thumbnail, $id_cate, $price, $star, $quantity,$location,$acreage,$view,$likes,$id_service,$id_admin)
{
    $sql = "insert into hang_hoa(name, description, thumbnail, id_category_room, price, star, quantity,location,acreage,view,likes,id_service,id_admin) value('$name', '$des', '$thumbnail', '$id_cate', '$price', '$star', '$quantity','$location','$acreage','$view','$likes','$id_service','$id_admin')";
    pdo_execute($sql);
}
function  update_room($name, $des, $thumbnail, $id_cate, $price, $star, $quantity,$location,$acreage,$view,$likes,$id_service,$id_admin,$id)
{
        $sql = "update hang_hoa set name='" . $name . "', description='" . $des . "', thumbnail='" . $thumbnail . "', id_category_room='" . $id_cate . "',price='" . $price . "',star='" . $star . "', quantity='" . $quantity . "', location='" . $location . "', acreage='" . $acreage . "', view='" . $view . "', likes='" . $likes . "', id_service='" . $id_service . "' where room_id=" . $id;
    pdo_execute($sql);
}
function  find_room($checkin,$checkout)
{
    $sql = "SELECT * FROM room where room_id not in (select r.room_id from room r INNER join booking_detail bd on bd.id_room = r.room_id left JOIN bookings bk on bk.booking_id = bd.id_booking where bk.check_in_date >= '$checkin' and bk.check_in_date <= '$checkout' or bk.check_out_date <= '$checkin' and bk.check_out_date >= '$checkout')";
    $room = pdo_query_one($sql);
    return $room;
}
function load_room_like($id)
{
    $sql = "select * room order by likes desc";
    $room = pdo_query_all($sql);
    return $room;
}
?>