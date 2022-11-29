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
function Insert_bookingdt($id_room,$id_booking)
{
    $sql = "insert into booking_detail(id_room,id_booking) value('$id_room','$id_booking')";
    $room = pdo_execute($sql);
}

?>