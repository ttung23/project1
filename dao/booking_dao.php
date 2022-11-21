<?php

function loadAll_booking(){
    $query = "SELECT * from bookings bk GROUP BY bk.booking_id DESC;";
    $listroom = pdo_query_all($query);
    return $listroom;
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
function Insert_booking($name,$date_add,$check_in_date,$check_out_date,$quantity_people,$total_amount,$messege,$phone,$email,$names)
{
    $sql = "insert into bookings($name,$date_add,check_in_date,check_out_date,quantity_people,total_amount,messege,phone,email,names) value('$name','$date_add','$check_in_date','$check_out_date','$quantity_people','$total_amount','$messege','$phone','$email','$names')";
    $room = pdo_execute($sql);
    return $room;
}
function  update_booking($name,$date_add,$check_in_date,$check_out_date,$quantity_people,$total_amount,$messege,$phone,$email,$names)
{
        $sql = "update bookings set name_booking = ?,date_add = ?,check_in_date = ? ,check_out_date = ?,status = ?,quantity_people = ?,total_amount = ?,message = ?,phone = ?,email = ?, name = ?";
    pdo_execute($sql,$name,$date_add,$check_in_date,$check_out_date,$quantity_people,$total_amount,$messege,$phone,$email,$names);
}
function comment_remove_by_cate_id($cate_id){
    $query = "delete from products where category_id = ?";
    pdo_execute($query, $cate_id);
}


?>