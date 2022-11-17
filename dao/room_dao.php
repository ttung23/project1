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
function load_room_like($id)
{
    $sql = "select * room order by likes desc";
    $room = pdo_query_all($sql);
    return $room;
}
?>