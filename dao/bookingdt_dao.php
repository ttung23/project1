<?php

function loadAll_bookingdt(){
    $query = "SELECT * from bookings bk GROUP BY bk.booking_id DESC;";
    $listroom = pdo_query_all($query);
    return $listroom;
}

function Insert_bookingdt($id_room,$id_booking)
{
    $sql = "insert into booking_detail(id_room,id_booking) value('$id_room','$id_booking')";
    $room = pdo_execute($sql);
}

?>