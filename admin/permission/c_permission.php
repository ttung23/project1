<?php
session_start();


require_once '../global.php';
require_once '../../dao/pdo.php';
require_once '../../dao/category_dao.php';
require_once '../../dao/room_dao.php';
require_once '../../dao/service_dao.php';
require_once '../../dao/permission_dao.php';
$permission = loadAll_permissions();

if(isset($_GET['add-per'])){
    $len_rows = $_SESSION['add_per'];

    if(isset($_POST['add_per'])){
        $name_per = $_POST['name_per'];
        $description = $_POST['description'];

        for ($i = 0; $i < $len_rows; $i++) {
            if ($name_per[$i] == "") {
                $err['name_per'][$i] = "Bạn chưa nhập tên chức vụ";
            }    
            if ($description[$i] == "") {
                $err['description'][$i] = "Bạn chưa nhập mô tả của chức vụ";
            }
            if (empty($err)) {
                $add_room = Insert_permissions($name_per[$i], $description[$i]);
                header('location:c_permission.php');
            }
        }
    }
    $VIEW_TITLE = "Thêm danh mục";
    $VIEW_CSS = 'admin_add.css';
    $VIEW_ADMIN_NAME = 'add-permission.php';

} elseif (isset($_GET['edit_per'])){
    $len_per_edit = count($_SESSION['per_edit']);

    for ($i = 0; $i < $len_per_edit; $i++) {
        $per_edit[$i] = load_permission_by_id($_SESSION['per_edit'][$i]);
    }

    if(isset($_POST['edit_permission'])){
        $name_permission = $_POST['name_permission'];
        $des = $_POST['des'];
        $err = [];

        for ($i = 0; $i < $len_per_edit; $i++) {
            if ($name_permission[$i] == "") {
                $err['name_permission'][$i] = "Bạn chưa nhập tên chức vụ";
            }    
            if ($des[$i] == "") {
                $err['des'][$i] = "Bạn chưa nhập mô tả cho chức vụ";
            }
            if (empty($err)) {
                $add_room = Update_permissions($name_permission[$i], $des[$i], $per_edit[$i]->permission_id);
                header('location:c_permission.php');
            }
        }
    }
    $VIEW_TITLE = "Sửa Thông Tin Chức Vụ";
    $VIEW_CSS = 'admin_add.css';
    $VIEW_ADMIN_NAME = 'edit-permission.php';
} else {
    if (isset($_POST['delete_per'])) {
        if (isset($_POST['permission'])) {
            $choose_per = $_POST['permission'];
    
            for ($i = 0; $i < count($choose_per); $i++) {
                $delete_permission = permissions_remove_by_id($choose_per[$i]);
            }
    
            header('location:c_permission.php');
        }
    } elseif (isset($_POST['edit_per'])) {
        if (isset($_POST['permission'])) {
            $_SESSION['per_edit'] = $_POST['permission'];
            header("location:c_permission.php?edit_per");
        } else {
            header("location:c_permission.php");
        }
    } elseif (isset($_POST['add_per'])) {
        $quantity_rows = $_POST['quantity_rows'];

        if ($quantity_rows <= 0) {
            $loi = "Số lượng phải lớn hơn 1";
        }

        if (!isset($loi)) {
            $_SESSION['add_per'] = $quantity_rows;
            header('location:c_permission.php?add-per');
        }
    }
    $VIEW_TITLE = "Danh sách chức vụ";
    $VIEW_CSS = 'admin_room.css';
    $VIEW_ADMIN_NAME = '../permission/danh-sach.php';
}

include_once '../templates/layout/layout.php';

?>