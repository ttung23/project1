<?php 
function loadAll_image($id){
    $query = "select limg.* from list_image limg INNER JOIN image_detail imgdt on imgdt.id_list_image = limg.id_list INNER JOIN room r on r.room_id=imgdt.id_room where id_room =?";
    $listroom = pdo_query_all($query,$id);
    return $listroom;
}
 ?>