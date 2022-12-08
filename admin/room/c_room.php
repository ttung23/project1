<?php
session_start();
require_once '../global.php';
require_once '../../dao/pdo.php';
require_once '../../dao/category_dao.php';
require_once '../../dao/room_dao.php';
require_once '../../dao/service_dao.php';
require_once '../../dao/permission_dao.php';
$categoryAll = loadAll_categories();
$service = loadAll_service();
$roomAll = loadAll_room4();

if(isset($_GET['id'])){
    $loadone = loadOne_room_status($_GET['id']);
}else{
    $loadone = $roomAll;
}
$permis =  loadAll_permissions();

// if(isset($_SESSION['id']) == 5){
if(isset($_GET['add-room'])){
    if(isset($_POST['add_room'])){
        $name_room = $_POST['name_room'];
        $category_id = $_POST['category_id'];
        $service_id = $_POST['service_id'];
        $price_room = $_POST['price_room'];
        $quantity = $_POST['quantity'];
        $star = $_POST['star'];
        $location = $_POST['location'];
        $acreage_room = $_POST['acreage_room'];
        $view = 0;
        $likes = 0;
        $status = 1;
        $description = $_POST['description'];
        $image = $_FILES['image'];
        $image_name = $image['name'];
        $err=[];

        if ($name_room == "") {
            $err['name_room'] = "Bạn chưa nhập tên phòng";
        }

        if ($price_room == "") {
            $err['price_room'] = "Bạn chưa nhập Giá Phòng";
        }
        if ($category_id == "") {
            $err['category_id'] = "Bạn chưa nhập tên danh mục";
        }

        if ($quantity == "") {
            $err['quantity'] = "Bạn chưa chọn diện tích";
        }

        if ($location == "") {
            $err['location'] = "Bạn chưa nhập vị trí";
        }

        if ($acreage_room == "") {
            $err['acreage_room'] = "Bạn chưa nhập diện tích";
        }
        if ($service_id == "") {
            $err['service_id'] = "Bạn chưa nhập tên danh mục";
        }

        if ($status == "") {
            $err['status'] = "Bạn chưa nhập trạng thái của Phòng";
        }

        if ($description == "") {
            $err['description'] = "Bạn chưa nhập mô tả của Phòng";
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
            $add_room = insert_room($name_room, $description, $image_name, $category_id, $price_room,$star, $quantity,$status,$location,$acreage_room,$view,$likes,$service_id);

            if ($image['size'] > 0) {
                move_uploaded_file($image['tmp_name'], '../../layout/assets/img/product/' . $image_name);
            }

            header('location:c_room.php');
        }
    }

    $VIEW_TITLE = "Thêm danh mục";
    $VIEW_CSS = 'admin_add_danhmuc.css';
    $VIEW_ADMIN_NAME = 'add-room.php';
    
} elseif(isset($_GET['edit_room'])){
    $len_room_edit = count($_SESSION['room_edit']);
    for ($i = 0; $i < $len_room_edit; $i++) {
        $room_edit[$i] = load_one_room($_SESSION['room_edit'][$i]);
    }

    if(isset($_POST['btn_edit_room'])){
        $name_room = $_POST['name_room'];
        $category_id = $_POST['category_id'];
        $service_id = $_POST['service_id'];
        $price_room = $_POST['price_room'];
        $quantity = $_POST['quantity'];
        $star = $_POST['star'];
        $location = $_POST['location'];
        $acreage_room = $_POST['acreage_room'];
        $location = $_POST['location'];
        $description = $_POST['description'];
        $image_name = $_POST['image'];
        $image = $_FILES['image'];

        $err=[];
        for ($i = 0; $i < $len_room_edit; $i++) {
            if ($name_room[$i] == "") {
                $err['name_room'][$i] = "Bạn chưa nhập tên Phòng";
            }
    
            if ($price_room[$i] == "") {
                $err['price_room'][$i] = "Bạn chưa nhập Giá Phòng";
            }
    
            if ($star[$i] == "") {
                $err['star'][$i] = "Bạn chưa nhập số sao";
            }
    
            if ($category_id[$i] == "") {
                $err['category_id'][$i] = "Bạn chưa nhập tên danh mục";
            }
    
            if ($quantity[$i] == "") {
                $err['quantity'][$i] = "Bạn chưa chọn diện tích";
            }
    
            if ($location[$i] == "") {
                $err['location'][$i] = "Bạn chưa nhập vị trí";
            }
    
            if ($acreage_room[$i] == "") {
                $err['acreage_room'][$i] = "Bạn chưa nhập diện tích";
            }
            if ($service_id[$i] == "") {
                $err['service_id'][$i] = "Bạn chưa nhập tên danh mục";
            }
    
            if ($description[$i] == "") {
                $err['description'][$i] = "Bạn chưa nhập mô tả của Phòng";
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
            
            if (empty($err)) {
    
                $update = update_room($name_room[$i], $description[$i] ,$image_name[$i], $category_id[$i], $price_room[$i], $star[$i], $quantity[$i], $location[$i], $acreage_room[$i],$view,$likes,$service_id[$i], $room_edit[$i]->room_id);
                if ($image['size'][$i] > 0) {
                    move_uploaded_file($image['tmp_name'][$i], '../../layout/assets/img/product/' . $image_name[$i]);
                }
    
                header('location:c_room.php');
            }
        }
    }
    $VIEW_TITLE = "Sửa thông tin phòng";
    $VIEW_CSS = 'admin_add.css';
    $VIEW_ADMIN_NAME = 'edit-room.php';
} else {
    if (isset($_POST['delete_room'])) {
        if (isset($_POST['room'])) {
            $choose_cate = $_POST['room'];
    
            for ($i = 0; $i < count($choose_cate); $i++) {
                $delete_room = room_remove($choose_cate[$i]);
            }
            header('location:c_room.php');
        }
    } elseif (isset($_POST['edit_room'])) {
        if (isset($_POST['room'])) {
            $_SESSION['room_edit'] = $_POST['room'];
            header('location:c_room.php?edit_room');
        } else {
            header('location:c_room.php');
        }

    } elseif (isset($_POST['unlock_room'])) {
        if (isset($_POST['room'])) {
            $choose_user_id = $_POST['room'];
            for ($i = 0; $i < count($choose_user_id); $i++) {
                $unblock_user = unlock_room($choose_user_id[$i]);
            }
        }
        header("location:c_room.php");
        
    } elseif (isset($_POST['lock_room'])) {
        if (isset($_POST['room'])) {
            $choose_user_id = $_POST['room'];
    
            for ($i = 0; $i < count($choose_user_id); $i++) {
                $lock_user = block_room($choose_user_id[$i]);
            }
        }
        header("location:c_room.php");
    }

    $VIEW_TITLE = "Danh sách phòng";
    $VIEW_CSS = 'admin_room.css';
    $VIEW_ADMIN_NAME = '../room/danh-sach.php';
}

include_once '../templates/layout/layout.php';
