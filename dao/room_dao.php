<?php
// select theo room
function loadAll_room(){
    $query = "select r.*,st.star,count(sv.id_room) as 'sv',COUNT(st.id_room) as 'tbl' from room r left join vote_room st on st.id_room = r.room_id left join service sv on sv.id_room=r.room_id GROUP BY room_id desc limit 0,4;";
    $listroom = pdo_query_all($query);
    return $listroom;
}
function loadAll_room4(){
    $query = "select r.*,st.star,count(sv.id_room) as 'sv',COUNT(st.id_room) as 'tbl' from room r left join vote_room st on st.id_room = r.room_id left join service sv on sv.id_room=r.room_id GROUP BY room_id desc;";
    $listroom = pdo_query_all($query);
    return $listroom;
}
function loadOne_room_status($id)
{
    $sql = "select r.*from room r   where r.status =" . $id;
    $room = pdo_query_one($sql);
    return $room;
}

// select theo likes
function loadAll_room_by_likes(){
    $query = "select r.*,st.star,count(sv.id_room) as 'sv',COUNT(st.id_room) as 'tbl' from room r left join vote_room st on st.id_room = r.room_id left join service sv on sv.id_room=r.room id GROUP BY likes desc limit 0,10;";
    $listroom = pdo_query_all($query);
    return $listroom;
}
// select 1 room
function loadOne_room($id)
{
    $sql = "select r.*,sv.name as 'namedichvu',sv.price as 'pricedichvu' from room r  inner join service sv on sv.service_id = r.id_service where room_id =" . $id;
    $room = pdo_query_one($sql);
    return $room;
}
// load phong theo dich vu
function load_room_service($id)
{
    $sql = "select r.* from room r inner join categories_room sv on sv.id_room= r.room_id  where id_category_room= " . $id;
    $room = pdo_query_all($sql);
    return $room;
}
// hien thi theo sap xep
function load_room_order($id)
{
    $sql = "select * from room order by '$id' desc";
    $room = pdo_query_all($sql);
    return $room;
}
// hien thi theo sap xep tag hay giam
function load_room_order_add($id)
{
    $sql = "select * from room order by room_id" .$id;
    $room = pdo_query_all($sql);
    return $room;
}
// load phong theo danh muc
function load_room_categories($id)
{
    $sql = "select * from room where id_category_room=" . $id;
    $room = pdo_query_all($sql);
    return $room;
}

// xoa phong 
function room_order_by_cate_id($cate_id){
    $query = "delete from room where category_id = ?";
    pdo_execute($query, $cate_id);
}
// xoa phong theo id
function room_remove($id){
    $query = "delete from room where room_id = ?";
    pdo_execute($query, $id);
}
// tang so luot xem
function room_tang_so_luot_xem($id){
    $sql = "UPDATE room SET view = view + 1 WHERE room_id=?";
    pdo_execute($sql, $id);
}
// phân trang
//  function read_room($limit,$offset) {
//     $sql = "select * from room limit ?,?";
//     $room = pdo_query_all($sql,$offset,$limit);
//     return $room;
// }

function insert_room($name, $des, $thumbnail, $id_cate, $price, $star, $quantity,$status,$location,$acreage,$view,$likes,$id_service)
{
    $sql = "insert into room(name, description, thumbnail, id_category_room, price, star, quantity,status,location,acreage,view,likes,id_service) value('$name', '$des', '$thumbnail', '$id_cate', '$price', '$star', '$quantity','$status','$location','$acreage','$view','$likes','$id_service')";
    pdo_execute($sql);
}
function  update_room($name, $des, $thumbnail, $id_cate, $price, $star, $quantity,$status,$location,$acreage,$view,$likes,$id_service,$id)
{
        $sql = "update room set name= ?, description=?, thumbnail= ?, id_category_room= ?,price= ?,star= ?, quantity=?,status =?, location= ?, acreage=?, view= ?, likes= ?, id_service=? where room_id =?";
    pdo_execute($sql,$name, $des, $thumbnail, $id_cate, $price, $star, $quantity,$status,$location,$acreage,$view,$likes,$id_service,$id);
}
function  find_room($checkin,$checkout)
{
    $sql = "SELECT r.*,ct.name as 'tendt' FROM room r inner join categories_room ct on ct.categories_id=r.id_category_room where room_id not in (select r.room_id from room r INNER join booking_detail bd on bd.id_room = r.room_id left JOIN bookings bk on bk.booking_id = bd.id_booking where bk.check_in_date >= '$checkin' and bk.check_in_date <= '$checkout' or bk.check_out_date <= '$checkin' and bk.check_out_date >= '$checkout') order by room_id";
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