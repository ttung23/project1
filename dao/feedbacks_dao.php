<?php
function loadAll_feedbacks(){
    $query = "select * from feedbacks order by feedbacks desc";
    $feedbacks = pdo_query_all($query);
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