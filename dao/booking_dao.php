<?php

function loadAll_booking(){
    $query = "SELECT * from bookings bk GROUP BY bk.booking_id DESC;";
    $listroom = pdo_query_all($query);
    return $listroom;
}
function Load_one($id){
    $query = "select * from bookings where booking_id = ?";
    $listuser = pdo_query_one($query,$id);
    return $listuser;
}
function loadAll_booking_user($id){
    $query = "SELECT * from bookings bk WHERE id_user = '$id' GROUP BY booking_id DESC;";
    $listroom = pdo_query_all($query);
    return $listroom;
}

function booking_remove_by_id($cate_id){
    $query = "delete from bookings where booking_id = ?";
    pdo_execute($query, $cate_id);
}
function Insert_booking($check_in_date,$check_out_date,$status,$quantity_people,$total_amount,$message,$phone,$email,$names,$id_user)
{
    $sql = "insert into bookings(check_in_date,check_out_date,status,quantity_people,total_amount,message,phone,email,name,id_user) value('$check_in_date','$check_out_date','$status','$quantity_people','$total_amount','$message','$phone','$email','$names','$id_user')";
    $room = pdo_execute($sql);
}
function  update_booking($check_in_date,$check_out_date,$status,$quantity_people,$total_amount,$message,$phone,$email,$names,$id_user,$id)
{
        $sql = "update bookings set check_in_date = ? ,check_out_date = ?,status = ?,quantity_people = ?,total_amount = ?,message = ?,phone = ?,email = ?, name = ?,id_user=? where booking_id=?";
    pdo_execute($sql,$check_in_date,$check_out_date,$status,$quantity_people,$total_amount,$message,$phone,$email,$names,$id_user,$id);
}
function booking_remove_by_cate_id($cate_id){
    $query = "delete from products where category_id = ?";
    pdo_execute($query, $cate_id);
}


?>