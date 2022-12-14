<?php
function loadAll_feedbacks(){
    $query = "SELECT fb.*, us.username, ad.name as admin_name, room.name as room_name 
    FROM `feedbacks` fb LEFT JOIN users us ON fb.id_user = us.user_id 
    LEFT JOIN admins ad on fb.id_admin = ad.admin_id 
    LEFT JOIN room ON fb.id_room = room.room_id";
    $feedbacks = pdo_query_all($query);
    return $feedbacks;
}

function loadAll_feedbacks_user($id,$idroom){
    $query = "SELECT * from feedbacks order by feedbacks where id_user = '$id' and id_room = '$idroom' desc";
    $feedbacks = pdo_query_one($query);
    return $feedbacks;
}


function feedbacks_remove_by_id($cate_id){
    $query = "delete from feedbacks where feedback_id = ?";
    pdo_execute($query, $cate_id);
}
function Insert_feedbacks($content,$status,$reply_date,$id_user,$id_room){
    $query = "Insert into feedbacks(content,status,reply_date,id_user,id_room) values(?,?,?,?,?)";
    pdo_execute($query, $content,$status,$reply_date,$id_user,$id_room);
}
function Update_feedbacks($content,$status,$reply_date,$id_user,$id_room)
{
    $query = "Update feedbacks set content = ? ,status = ?,repy_date = ?,id_user = ?,id_room = ? where permission_id = ?";
    pdo_execute($query,$content,$status,$reply_date,$id_user,$id_room);
}

function add_gmail($tieude,$message,$email){
    $to      = "abc@example.com";
$subject = "$tieude";
$message = "$message";       //MỚI
            
$header  =  "From:$email\r\n";
$header .=  "Cc:$email \r\n";

$header .= "MIME-Version: 1.0\r\n";             //MỚI
$header .= "Content-type: text/html\r\n";       //MỚI

$success = mail ($to,$subject,$message,$header);

if( $success == true )
{
    echo "Đã gửi mail thành công...";
}
else
{
      echo "Không gửi đi được...";
} 

}

?>