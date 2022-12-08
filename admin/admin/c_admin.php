<?php
session_start();

require_once '../global.php';
require_once '../../dao/pdo.php';
require_once '../../dao/admin_dao.php';
require_once '../../dao/permission_dao.php';

$permission = loadAll_permissions();

if (isset($_GET['id_permission'])) {
    $admin = load_admin_by_permission($_GET['id_permission']);
} else {
    $admin = loadAll_admin();
}

if (isset($_GET['add-admin'])) {
    if (isset($_POST['add_admin'])) {
        $name_admin = $_POST['name_admin'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $image = $_FILES['image'];
        $image_name = $image['name'];
        $id_permission = $_POST['id_permission'];
        $err = [];
        if ($name_admin == "") {
            $err['name_admin'] = "Bạn chưa nhập tên phòng";
        }

        if ($email == "") {
            $err['email'] = "Bạn chưa nhập email";
        }

        if ($password == "") {
            $err['password'] = "Bạn chưa nhập password";
        }

        if ($address == "") {
            $err['address'] = "Bạn chưa chọn address";
        }

        if ($phone == "") {
            $err['phone'] = "Bạn chưa nhập phone";
        }

        if ($gender == "") {
            $err['gender'] = "Bạn chưa nhập giới tính";
        }
        $ext = pathinfo($image_name, PATHINFO_EXTENSION);

        if ($image['size'] <= 0) {
            $err['img'] = "Bạn chưa chọn ảnh cho phòng";
        } else if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
            $err['img'] = "Ảnh không đúng định dạng";
        } else if ($image['size'] >= 2 * 1024 * 1024) {
            $err['img'] = "Ảnh không được quá 2MB";
        }

        if (!$err) {
            $update = Insert_admins($name_admin, $email, $password, $gender, $image_name, $address, $phone, $id_permission);

            if ($image['size'] > 0) {
                move_uploaded_file($image['tmp_name'], '../../layout/assets/img/admins/' . $image_name);
            }

            header('location:c_admin.php');
        }
    }
    $VIEW_TITLE = "Thêm nhân viên";
    $VIEW_CSS = 'admin_add.css';
    $VIEW_ADMIN_NAME = 'add-admin.php';
} elseif (isset($_GET['edit_admin'])) {
    $len_admin_edit = count($_SESSION['admins_edit']);
    for ($i = 0; $i < $len_admin_edit; $i++) {
        $admins[$i] = load_Admin($_SESSION['admins_edit'][$i]);
    }

    if (isset($_POST['edit_admin'])) {
        $name_admin = $_POST['name_admin'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $image = $_FILES['image'];
        $image_name = $image['name'];
        $id_permission = $_POST['permission'];
        $image_name = $_POST['image'];

        $err = [];

        for ($i = 0; $i < $len_admin_edit; $i++) {
            if ($name_admin[$i] == "") {
                $err['name_admin'][$i] = "Bạn chưa nhập tên Phòng";
            }
            if ($email[$i] == "") {
                $err['email'][$i] = "Bạn chưa nhập email";
            }
            if ($password[$i] == "") {
                $err['password'][$i] = "Bạn chưa nhập password";
            }
    
            if ($address[$i] == "") {
                $err['address'][$i] = "Bạn chưa chọn address";
            }
    
            if ($phone[$i] == "") {
                $err['phone'][$i] = "Bạn chưa nhập phone";
            }
    
            if ($gender[$i] == "") {
                $err['gender'][$i] = "Bạn chưa nhập gender";
            }
    
            if ($image['size'][$i] > 0) {                
                $image_name[$i] = $image['name'][$i];
                $ext = pathinfo($image_name[$i], PATHINFO_EXTENSION);

                if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                    $err['img'][$i] = "Ảnh không đúng định dạng";
                } else if ($image['size'][$i] >= 2 * 1024 * 1024) {
                    $err['img'][$i] = "Ảnh không được quá 2MB";
                }
            }
    
            if (!$err) {
                $update = Update_admins($name_admin[$i], $email[$i], $password[$i], $gender[$i], $image_name[$i], $address[$i], $phone[$i], $id_permission[$i], $admins[$i]->admin_id);
                move_uploaded_file($image['tmp_name'][$i], '../../layout/assets/img/admins/' . $image_name[$i]);
    
                header('location:c_admin.php');
            }
        }
    }
    $VIEW_TITLE = "Sửa thông tin nhân viên";
    $VIEW_CSS = 'admin_add.css';
    $VIEW_ADMIN_NAME = 'edit-admin.php';
} else {
    if (isset($_POST['delete_admin'])) {
        if (isset($_POST['admin'])) {
            $choose_cate = $_POST['admin'];

            for ($i = 0; $i < count($choose_cate); $i++) {
                $delete_admin = admin_remove_by_id($choose_cate[$i]);
            }

            header('location:c_admin.php');
        }
    } elseif (isset($_POST['edit_admin'])) {
        if (isset($_POST['admin'])) {
            $_SESSION['admins_edit'] = $_POST['admin'];
            header('location:c_admin.php?edit_admin');
        } else {
            header('location:c_admin.php');
        }
    }
    $VIEW_TITLE = "Danh sách nhân viên";
    $VIEW_CSS = 'admin_cmt.css';
    $VIEW_ADMIN_NAME = '../admin/danh-sach.php';
}

include_once '../templates/layout/layout.php';
