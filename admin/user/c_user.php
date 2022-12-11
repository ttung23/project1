<?php
session_start();

// MODEL
require_once '../global.php';
require_once '../../dao/pdo.php';
require_once '../../dao/user_dao.php';

// CONTROLLER
if (isset($_GET['status'])) {
    $users = load_user_by_status($_GET['status']);
} else {
    $users = loadAll_users();
}

if (isset($_POST['block_user'])) { // BLOCK USER
    if (isset($_POST['users'])) {
        $choose_user_id = $_POST['users'];

        for ($i = 0; $i < count($choose_user_id); $i++) {
            $block_user = set_status_user(0, $choose_user_id[$i]);
        }
    }
    header("location:c_user.php?status=0");

} elseif (isset($_POST['unlock_user'])) { // UNLOCK USER
    if (isset($_POST['users'])) {
        $choose_user_id = $_POST['users'];

        for ($i = 0; $i < count($choose_user_id); $i++) {
            $unlock_user = set_status_user(1, $choose_user_id[$i]);
        }
    }
    header("location:c_user.php?status=1");

} elseif (isset($_POST['delete_user'])) {
    if (isset($_POST['users'])) {
        $choose_user_id = $_POST['users'];

        for ($i = 0; $i < count($choose_user_id); $i++) {
            $delete_user = delete_user($choose_user_id[$i]);
        }
    }
    header("location:c_user.php");
} elseif (isset($_GET['edit_users'])) {

    $len_user_edit = count($_SESSION['user_edit']);
    for ($i = 0; $i < $len_user_edit; $i++) {
        $users_edit[$i] = load_one_user($_SESSION['user_edit'][$i]);
    }

    if (isset($_POST['btn_edit_user'])) {
        $name = $_POST['name'];
        $username =  $_POST['username'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $image_name = $_POST['image'];

        $avatar = $_FILES['image'];

        for ($i = 0; $i < $len_user_edit; $i++) {
            if ($name[$i] == "") {
                $err['name'][$i] = "Bạn chưa nhập họ tên";
            }
    
            if ($username[$i] == "") {
                $err['username'][$i] = "Bạn chưa nhập tên tài khoản";
            }
    
            if ($email[$i] == "") {
                $err['email'][$i] = "Bạn chưa nhập email";
            }
    
            if ($address[$i] == "") {
                $err['address'][$i] = "Bạn chưa nhập địa chỉ";
            }
    
            if ($phone[$i] == "") {
                $err['phone'][$i] = "Bạn chưa nhập số điện thoại";
            }
    
            if ($date[$i] == "") {
                $err['date'][$i] = "Bạn chưa chọn ngày sinh";
            }
    
            if ($avatar['size'][$i] > 0) {
                $image_name[$i] = $avatar['name'][$i];
                $ext = pathinfo($image_name[$i], PATHINFO_EXTENSION);
    
                if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                    $err['img'][$i] = 'Ảnh không đúng định dạng';
                } elseif ($avatar['size'][$i] >= 2 * 1024 * 1024) {
                    $err['img'][$i] = 'Ảnh không được quá 2MB';
                }
            }
    
            if (empty($err)) {
                $user = Update_user($name[$i], $username[$i], $gender[$i], $email[$i], $image_name[$i], $address[$i], $phone[$i], $date[$i], $users_edit[$i]->user_id);
    
                if ($avatar['size'][$i] > 0) {
                    move_uploaded_file($avatar['tmp_name'][$i], '../../layout/assets/img/users/' . $image_name[$i]);
                }

                header('location:c_user.php');
            }
        }
    }

    $VIEW_TITLE = "Sửa thông tin người dùng";
    $VIEW_CSS = 'admin_add.css';
    $VIEW_ADMIN_NAME = '../user/edit_user.php';
} else {
    if (isset($_POST['edit_user'])) {
        if (isset($_POST['users'])) {
            $_SESSION['user_edit'] = $_POST['users'];
            header('location:c_user.php?edit_users');
        } else {
            header('location:c_user.php');
        }
    }

    $VIEW_TITLE = "Danh sách User";
    $VIEW_CSS = 'danh_sach_user.css';
    $VIEW_ADMIN_NAME = '../user/danh_sach_user.php';
}

// // edit user
// if (isset($_POST['edit_user'])) {

//     $id_user = $_GET['id_user']; 

//     // lấy ra user
//     $user = loadOne_user($id_user);

//     
// }


include_once '../templates/layout/layout.php';
