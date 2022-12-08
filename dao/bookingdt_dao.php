<?php

function loadAll_bookingdt(){
    $query = "SELECT * from bookings bk GROUP BY bk.booking_id DESC;";
    $listroom = pdo_query_all($query);
    return $listroom;
}
function loadAll_bookingdt_booking($id){
    $query = "SELECT r.name as 'tenphong',bk.* from bookings bk inner join booking_detail dt on dt.id_booking = bk.booking_id INNER JOIN room r on r.room_id = dt.id_room where bk.booking_id = ?;";
    $listroom = pdo_query_one($query,$id);
    return $listroom;
}

function load_statistic_by_month ($month) {
    $sql = "SELECT COUNT(*) as tong_luot_dat FROM booking_detail WHERE month(created_at) = ?";
    $statistic = pdo_query_one_person($sql, $month);
    return $statistic;
}

function load_sales_by_month ($month) {
    $sql = "SELECT SUM(bk.total_amount) as tong_doanh_thu FROM `booking_detail` dt LEFT JOIN bookings bk on dt.id_booking = bk.booking_id WHERE MOnth(dt.created_at) = ?";
    $sales = pdo_query_one_person($sql, $month);
    return $sales;
}

function Insert_bookingdt($id_room,$id_booking)
{
    $sql = "insert into booking_detail(id_room,id_booking) values('$id_room','$id_booking')";
    $room = pdo_execute($sql);
}

?>