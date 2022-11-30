<?php
// MODEL
require_once '../global.php';
require_once '../../dao/pdo.php';
require_once '../../dao/user_dao.php';

// CONTROLLER
$users = loadAll_users();

// block user
if (isset($_POST['block_user'])) {
    if (isset($_POST['user'])) {
        $choose_user_id = $_POST['user'];

        for ($i = 0; $i < count($choose_user_id); $i++) {
            $block_user = block_user($choose_user_id[$i]);
        }
    }
    header("location:c_user.php");

    // unlock user
} else if (isset($_POST['unlock_user'])) {
    if (isset($_POST['user'])) {
        $choose_user_id = $_POST['user'];

        for ($i = 0; $i < count($choose_user_id); $i++) {
            $unlock_user = unlock_user($choose_user_id[$i]);
        }
    }
    header("location:c_user.php");
}

// // edit user
// if (isset($_POST['edit_user'])) {

//     $id_user = $_GET['id_user']; 

//     // lấy ra user
//     $user = loadOne_user($id_user);

//     if (isset($_POST['btn_edit_user'])) {
//         $name = $_POST['name'];
//         $username =  $_POST['username'];
//         $gender = $_POST['gender'];
//         $email = $_POST['email'];
//         $address = $_POST['address'];
//         $phone = $_POST['phone'];
//         $date = $_POST['date'];
//         $image_name =  $_POST['image'];

//         $avatar =  $_FILES['image'];

//         if ($name == "") {
//             $err['name'] = "Bạn chưa nhập họ tên";
//         }

//         if ($username == "") {
//             $err['username'] = "Bạn chưa nhập tên tài khoản";
//         }

//         if ($gender == "") {
//             $err['gender'] = "Bạn chưa chọn giới tính";
//         }

//         if ($email == "") {
//             $err['email'] = "Bạn chưa nhập email";
//         }

//         if ($address == "") {
//             $err['address'] = "Bạn chưa nhập địa";
//         }

//         if ($phone == "") {
//             $err['phone'] = "Bạn chưa nhập số điện thoại";
//         }

//         if ($date == "") {
//             $err['date'] = "Bạn chưa chọn ngày sinh";
//         }

//         if ($avatar['size'] > 0) {
//             $img_name = $avatar['name'];
//             $ext = pathinfo($img_name, PATHINFO_EXTENSION);

//             if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
//                 $err['img'] = 'Ảnh không đúng định dạng';
//             } elseif ($avatar['size'] >= 2 * 1024 * 1024) {
//                 $err['img'] = 'Ảnh không được quá 2MB';
//             }
//         }

//         if (empty($err)) {
//             $user = Update_user($name, $username, $gender, $email, $img_name, $address, $phone, $date, $id_user);

//             move_uploaded_file($avatar['tmp_name'], '../../layout/assets/img/' . $img_name);
//         }
//     }
// }

$VIEW_TITLE = "Danh sách User";
$VIEW_CSS = 'danh_sach_user.css';
$VIEW_ADMIN_NAME = '../user/danh_sach_user.php';

include_once '../templates/layout/layout.php';
