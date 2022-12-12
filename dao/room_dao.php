<?php
// select theo room
function loadAll_room(){
    $query = "select r.*,count(sv.id_room) as 'sv' from room r  left join service_detail sv on sv.id_room=r.room_id where r.status = 1 GROUP BY room_id desc limit 4";
    $listroom = pdo_query_all($query);
    return $listroom;
}
function loadAll_room4(){
    $query = "select r.*,st.star,count(sv.id_room) as 'sv' from room r left join vote_room st on st.id_room = r.room_id left join service_detail sv on sv.id_room=r.room_id where r.status = 1  GROUP BY room_id desc ";
    $listroom = pdo_query_all($query);
    return $listroom;
}
function loadAll_room5(){
    $query = "SELECT r.*,count(dt.id_room) as 'sld' FROM room r LEFT JOIN booking_detail dt ON dt.id_room = r.room_id LEFT JOIN bookings bk ON dt.id_booking = bk.booking_id WHERE month(bk.check_in_date) = 12 and r.status = 1 GROUP BY r.room_id";
    $listroom = pdo_query_all($query);
    return $listroom;
}
function loadAll_room6(){
    $query = "select r.*,st.star,count(sv.id_room) as 'sv' from room r left join vote_room st on st.id_room = r.room_id left join service_detail sv on sv.id_room=r.room_id GROUP BY r.room_id desc ";
    $listroom = pdo_query_all($query);
    return $listroom;
}
function loadAll_room_price(){
    $query = "SELECT MIN(r.price) as 'min',MAX(r.price) as 'max' FROM room r;";
    $listroom = pdo_query_all($query);
    return $listroom;
}
function loadAll_room_price_list($id){
    $query = "SELECT r.*,ct.name as 'tendt' FROM room r inner join categories_room ct  on ct.categories_id=r.id_category_room where r.price =" .$id." and  r.status = 1 ";
    $listroom = pdo_query_all($query);
    return $listroom;
}
function loadOne_room_status($id)
{
    $sql = "select r.* from room r   where r.status =" . $id;
    $room = pdo_query_one($sql);
    return $room;
}

// select theo likes
function loadAll_room_by_likes(){
    $query = "select r.*,st.star,count(sv.id_room) as 'sv',COUNT(st.id_room) as 'tbl' from room r left join vote_room st on st.id_room = r.room_id left join service_detail sv on sv.id_room=r.room_id GROUP BY likes desc limit 0,10;";
    $listroom = pdo_query_all($query);
    return $listroom;
}
// select 1 room
function loadOne_room($id)
{
    $sql = "select r.* from room r where room_id =" . $id." and r.status = 1 ";
    $room = pdo_query_one($sql);
    return $room;
}

function load_one_room($id)
{
    $sql = "select r.*, cate.name as name_cate from room r  INNER JOIN categories_room cate on r.id_category_room = cate.categories_id where room_id =" . $id;
    $room = pdo_query_one_person($sql);
    return $room;
}
// load phong theo dich vu
function load_room_service($id)
{
    $sql = "select r.* from room r inner join categories_room sv on sv.id_room= r.room_id  where id_category_room= " . $id." and  r.status = 1" ;
    $room = pdo_query_all($sql);
    return $room;
}
// hien thi theo sap xep
function load_room_order($id)
{
    $sql = "select * from room where r.status = 1  order by '$id' desc";
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
    $sql = "select r.*  from room r left join service_detail sv on sv.id_room=r.room_id where id_category_room= ? and r.status = 1 limit 4;";
    $room = pdo_query_all($sql,$id);
    return $room;
}

function load_sum_like () {
    $sql = "SELECT SUM(likes) as tong_like FROM `room`";
    $sum_like = pdo_query_one_person($sql);
    return $sum_like;
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
function room_add_likes($id)
{
    $sql = "UPDATE room SET likes = likes + 1 WHERE room_id = ?";
    $room = pdo_query_all($sql,$id);
    return $room;
}
function room_add_dislikes($id)
{
    $sql = "UPDATE room SET likes = likes - 1 WHERE room_id = ?";
    $room = pdo_query_all($sql,$id);
    return $room;
}
function insert_room($name, $des, $thumbnail, $id_cate, $price, $star, $quantity,$status,$location,$acreage,$view,$likes)
{
    $sql = "insert into room(name, description, thumbnail, id_category_room, price, star, quantity,status,location,acreage,view,likes) value('$name', '$des', '$thumbnail', '$id_cate', '$price', '$star', '$quantity','$status','$location','$acreage','$view','$likes')";
    pdo_execute($sql);
}
function update_room($name, $des, $thumbnail, $id_cate, $price, $star, $quantity,$location,$acreage,$id)
{
    $sql = "update room set name= ?, description=?, thumbnail= ?, id_category_room= ?, price= ?, star= ?, quantity=?, location= ?, acreage=? where room_id =?";
    pdo_execute($sql,$name, $des, $thumbnail, $id_cate, $price, $star, $quantity,$location,$acreage,$id);
}

function  find_room($checkin,$checkout)
{
    $sql = "SELECT r.*,ct.name as 'tendt' FROM room r inner join categories_room ct on ct.categories_id = r.id_category_room where room_id not in (select r.room_id from room r INNER join booking_detail bd on bd.id_room = r.room_id left JOIN bookings bk on bk.booking_id = bd.id_booking where bk.check_in_date >= '$checkin' and bk.check_in_date <= '$checkout' or bk.check_out_date <= '$checkin' and bk.check_out_date >= '$checkout') and r.status = 1 order by room_id";
    $room = pdo_query_one($sql);
    return $room;
}

function load_room_like($id)
{
    $sql = "select * room order by likes desc";
    $room = pdo_query_all($sql);
    return $room;
}
function block_room($room_id){
    $query = "update room set status = 2 where room_id = ?";
    pdo_execute($query, $room_id);
}

function unlock_room($room_id){
    $query = "update room set status = 1 where room_id = ?";
    pdo_execute($query, $room_id);
}

function add_img_room ($img_detail, $id_room) {
    $sql = "INSERT INTO image_detail (id_list_image, id_room) VALUES (?,?)";
    pdo_execute($sql, $img_detail, $id_room);
}

function add_service_room ($id_room, $id_service) {
    $sql = "INSERT INTO service_detail (id_room, id_service) VALUES (?,?)";
    pdo_execute($sql, $id_room, $id_service);
}

function load_all_img () {
    $sql = "SELECT * FROM list_image";
    $list_img = pdo_query_all($sql);
    return $list_img;
}
?>