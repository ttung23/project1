<?php
session_start();

require_once '../global.php';
require_once '../../dao/pdo.php';
require_once '../../dao/category_dao.php';
require_once '../../dao/room_dao.php';
require_once '../../dao/service_dao.php';
require_once '../../dao/booking_dao.php';
require_once '../../dao/user_dao.php';
$booking = loadAll_booking();
$user = loadAll_users();


if(isset($_GET['add-booking'])){
    if(isset($_POST['add_booking'])){
             $name_booking = $_POST['name_booking'];
            $check_in_date = $_POST['check_in_date'];
            $check_out_date = $_POST['check_out_date'];
            $status = $_POST['status'];
            $email = $_POST['Email'];
            $quantity = $_POST['quantity'];
            $total_amount = $_POST['total_amount'];
            $id_user = $_POST['id_user'];
            $messeage = $_POST['messeage'];
            $phone = $_POST['phone'];
            $err = [];
    
            if ($name_booking == "") {
                $err['name_booking'] = "Bạn chưa nhập tên Phòng";
            }    
            if ($id_user == "") {
                $err['id_user'] = "Bạn chưa nhập Giá Phòng";
            }
            if ($total_amount == "") {
                $err['total_amount'] = "Bạn chưa nhập tên danh mục";
            }
    
            if ($messeage == "") {
                $err['messeage'] = "Bạn chưa chọn diện tích";
            }
    
            if ($phone == "") {
                $err['phone'] = "Bạn chưa nhập vị trí";
            }
    
            if ($check_out_date == "") {
                $err['check_out_date'] = "Bạn chưa nhập diện tích";
            }
            if ($check_in_date == "") {
                $err['check_in_date'] = "Bạn chưa nhập tên danh mục";
            }
            if ($quantity == "") {
                $err['quantity'] = "Bạn chưa nhập tên danh mục";
            }
    
            if ($status == "") {
                $err['status'] = "Bạn chưa nhập trạng thái của Phòng";
            }
    
            if (!$err) {
                $add_room = Insert_booking($check_in_date,$check_out_date,$status,$quantity,$total_amount,$messeage, $phone,$email,$name_booking,$id_user);
                header('location:c_booking.php');
    }
}
    $VIEW_TITLE = "Thêm danh mục";
    $VIEW_CSS = 'admin_add_danhmuc.css';
    $VIEW_ADMIN_NAME = 'add-booking.php';

}elseif(isset($_GET['edit-booking'])){
    $id = $_GET['id'];
    $booking_one = Load_one($id);
    if(isset($_POST['edit_booking'])){
        $name_booking = $_POST['name_booking'];
        $check_in_date = $_POST['check_in_date'];
        $check_out_date = $_POST['check_out_date'];
        $status = $_POST['status'];
        $email = $_POST['Email'];
        $quantity = $_POST['quantity'];
        $total_amount = $_POST['total_amount'];
        $id_user = $_POST['id_user'];
        $messeage = $_POST['messeage'];
        $phone = $_POST['phone'];
        $err = [];
        if ($name_booking == "") {
            $err['name_booking'] = "Bạn chưa nhập tên Phòng";
        }    
        if ($id_user == "") {
            $err['id_user'] = "Bạn chưa nhập Giá Phòng";
        }
        if ($total_amount == "") {
            $err['total_amount'] = "Bạn chưa nhập tên danh mục";
        }

        if ($messeage == "") {
            $err['messeage'] = "Bạn chưa chọn diện tích";
        }

        if ($phone == "") {
            $err['phone'] = "Bạn chưa nhập vị trí";
        }

        if ($check_out_date == "") {
            $err['check_out_date'] = "Bạn chưa nhập diện tích";
        }
        if ($check_in_date == "") {
            $err['check_in_date'] = "Bạn chưa nhập tên danh mục";
        }
        if ($quantity == "") {
            $err['quantity'] = "Bạn chưa nhập tên danh mục";
        }

        if ($status == "") {
            $err['status'] = "Bạn chưa nhập trạng thái của Phòng";
        }

       if (!$err) {

           $update = update_booking($check_in_date,$check_out_date,$status,$quantity,$total_amount,$messeage, $phone,$email,$name_booking,$id_user,$id);
           if ($image['size'] > 0) {
               move_uploaded_file($image['tmp_name'], '../../layout/assets/img/' . $image_name);
           }

           header('location:c_booking.php');
}
    }
    $VIEW_TITLE = "Sửa danh mục";
    $VIEW_CSS = 'admin_add_danhmuc.css';
    $VIEW_ADMIN_NAME = 'edit-booking.php';
}else{
    if (isset($_POST['delete_booking'])) {
        if (isset($_POST['booking'])) {
            $choose_cate = $_POST['booking'];
            for ($i = 0; $i < count($choose_cate); $i++) {
                $delete_room = booking_remove_by_id($choose_cate[$i]);
            }
    
            header('location:c_booking.php');
        }
    }
    $VIEW_TITLE = "Danh sách danh mục";
    $VIEW_CSS = 'admin_booking1.css';
    $VIEW_ADMIN_NAME = '../booking/danh-sach.php';
}

include_once '../templates/layout/layout.php';

?>