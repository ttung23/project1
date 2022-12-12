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
$roomAll = loadAll_room6();
$img = load_all_img();

if(isset($_GET['id'])){
    $loadone = loadOne_room_status($_GET['id']);
}else{
    $loadone = $roomAll;
}
$permis =  loadAll_permissions();

// if(isset($_SESSION['id']) == 5){
if(isset($_GET['add-room'])){
    $len_rows = $_SESSION['add_room'];

    if(isset($_POST['add_room'])){
        $name_room = $_POST['name_room'];
        $category_id = $_POST['category_id'];
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

        for ($i = 0; $i < $len_rows; $i++) {
            if ($name_room[$i] == "") {
                $err['name_room'][$i] = "Bạn chưa nhập tên phòng";
            }
    
            if ($price_room[$i] == "") {
                $err['price_room'][$i] = "Bạn chưa nhập Giá Phòng";
            } elseif (!is_numeric(($price_room[$i]))) {
                $err['quantity'][$i] = "Giá phòng phải là số";
            } elseif ($price_room[$i] <=0 ) {
                $err['price_room'][$i] = "Giá phòng phải lớn hơn 0";
            }

            if ($category_id[$i] == "") {
                $err['category_id'][$i] = "Bạn chưa nhập tên danh mục";
            }
    
            if ($quantity[$i] == "") {
                $err['quantity'][$i] = "Bạn chưa nhập số lượng người";
            } elseif (!is_numeric($quantity[$i])) {
                $err['quantity'][$i] = "Số lượng người phải là số";
            } elseif ($quantity[$i] <= 0) {
                $err['quantity'][$i] = "Số lượng người phải lớn hơn 0";
            }

            if ($star[$i] == "") {
                $err['star'][$i] = "Bạn chưa nhập số sao";
            } elseif ($star[$i] <= 0) {
                $err['star'][$i] = "Số sao phải lớn hơn 0 và nhỏ hơn hoặc bằng 5";
            }
    
            if ($location[$i] == "") {
                $err['location'][$i] = "Bạn chưa nhập số tầng";
            } elseif (!is_numeric($location[$i])) {
                $err['location'][$i] = "Vị trí tầng phải là số";
            } elseif ($location[$i] < 1 || $location[$i] > 4) {
                $err['location'][$i] = "Khách sạn chỉ có 4 tầng";
            }
    
            if ($acreage_room[$i] == "") {
                $err['acreage_room'][$i] = "Bạn chưa nhập diện tích";
            } elseif (!is_numeric($acreage_room[$i])) {
                $err['acreage_room'][$i] = "Diện tích phòng phải là số";
            } elseif ($location[$i] <= 0 || $location[$i] > 300) {
                $err['acreage_room'][$i] = "Diện tích phải lớn hơn 0 và nhỏ hơn 300m<sup>2</sup>";
            }
    
            if ($description[$i] == "") {
                $err['description'][$i] = "Bạn chưa nhập mô tả của phòng";
            }
    
            $ext = pathinfo($image_name[$i], PATHINFO_EXTENSION);
    
            if ($image['size'][$i] <= 0) {
                $err['img'][$i] = "Bạn chưa chọn ảnh cho phòng";
            } else if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                $err['img'][$i] = "Ảnh không đúng định dạng";
            } else if ($image['size'][$i] >= 2 * 1024 * 1024) {
                $err['img'][$i] = "Ảnh không được quá 2MB";
            }
            
            if (!$err) {
                $add_room = insert_room($name_room[$i], $description[$i], $image_name[$i], $category_id[$i], $price_room[$i],$star[$i], $quantity[$i],$status,$location[$i],$acreage_room[$i],$view,$likes);
    
                if ($image['size'][$i] > 0) {
                    move_uploaded_file($image['tmp_name'][$i], '../../layout/assets/img/product/' . $image_name[$i]);
                }
    
                header('location:c_room.php');
            }
        }
    }

    $VIEW_TITLE = "Thêm danh mục";
    $VIEW_CSS = 'admin_add.css';
    $VIEW_ADMIN_NAME = 'add-room.php';
    
} elseif(isset($_GET['edit_room'])){
    $len_room_edit = count($_SESSION['room_edit']);
    for ($i = 0; $i < $len_room_edit; $i++) {
        $room_edit[$i] = load_one_room($_SESSION['room_edit'][$i]);
    }

    if(isset($_POST['btn_edit_room'])){
        $name_room = $_POST['name_room'];
        $category_id = $_POST['category_id'];
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
            } elseif (!is_numeric(($price_room[$i]))) {
                $err['quantity'][$i] = "Giá phòng phải là số";
            } elseif ($price_room[$i] <=0 ) {
                $err['price_room'][$i] = "Giá phòng phải lớn hơn 0";
            }
    
            if ($star[$i] == "") {
                $err['star'][$i] = "Bạn chưa nhập số sao";
            }
    
            if ($category_id[$i] == "") {
                $err['category_id'][$i] = "Bạn chưa nhập tên danh mục";
            }
    
            if ($quantity[$i] == "") {
                $err['quantity'][$i] = "Bạn chưa nhập số lượng người";
            } elseif (!is_numeric($quantity[$i])) {
                $err['quantity'][$i] = "Số lượng người phải là số";
            } elseif ($quantity[$i] <= 0) {
                $err['quantity'][$i] = "Số lượng người phải lớn hơn 0";
            }

            if ($star[$i] == "") {
                $err['star'][$i] = "Bạn chưa nhập số sao";
            } elseif ($star[$i] <= 0) {
                $err['star'][$i] = "Số sao phải lớn hơn 0 và nhỏ hơn hoặc bằng 5";
            }
    
            if ($location[$i] == "") {
                $err['location'][$i] = "Bạn chưa nhập số tầng";
            } elseif (!is_numeric($location[$i])) {
                $err['location'][$i] = "Vị trí tầng phải là số";
            } elseif ($location[$i] < 1 || $location[$i] > 4) {
                $err['location'][$i] = "Khách sạn chỉ có 4 tầng";
            }
    
            if ($acreage_room[$i] == "") {
                $err['acreage_room'][$i] = "Bạn chưa nhập diện tích";
            } elseif (!is_numeric($acreage_room[$i])) {
                $err['acreage_room'][$i] = "Diện tích phòng phải là số";
            } elseif ($location[$i] <= 0 || $location[$i] > 300) {
                $err['acreage_room'][$i] = "Diện tích phải lớn hơn 0 và nhỏ hơn 300m<sup>2</sup>";
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
    
                $update = update_room($name_room[$i], $description[$i] ,$image_name[$i], $category_id[$i], $price_room[$i], $star[$i], $quantity[$i], $location[$i], $acreage_room[$i],$view,$likes, $room_edit[$i]->room_id);
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
} elseif (isset($_GET['add_img_room'])) {
    $len_rows = count($_SESSION['room_add_img']);
    for ($i = 0; $i < $len_rows; $i++) {
        $room_add_img[$i] = load_one_room($_SESSION['room_add_img'][$i]);
    }

    if (isset($_POST['add_img_room'])) {
        $img = $_POST['imgs'];

        for ($i = 0; $i < $len_rows; $i++) {

            if (empty($err)) {
                for ($j = 0; $j < $_SESSION['add_img_room']; $j++) {
                    $add_imgs = add_img_room($img[$j], $room_add_img[$i]->room_id);
                }

                header('location:c_room.php');
            }

        }
    }

    $VIEW_TITLE = "Thêm ảnh vào phòng";
    $VIEW_CSS = 'admin_add.css';
    $VIEW_ADMIN_NAME = 'add_img_room.php';
} elseif (isset($_GET['add_service_room'])) {
    $len_rows = count($_SESSION['room_add_service']);
    for ($i = 0; $i < $len_rows; $i++) {
        $room_add_service[$i] = load_one_room($_SESSION['room_add_service'][$i]);
    }

    if (isset($_POST['add_service_room'])) {
        $services = $_POST['services'];

        for ($i = 0; $i < $len_rows; $i++) {

            if (empty($err)) {
                for ($j = 0; $j < $_SESSION['add_service_room']; $j++) {
                    $add_services = add_service_room($room_add_service[$i]->room_id, $services[$j]);
                }

                header('location:c_room.php');
            }

        }
    }

    $VIEW_TITLE = "Thêm dịch vụ vào phòng";
    $VIEW_CSS = 'admin_add.css';
    $VIEW_ADMIN_NAME = 'add_service_room.php';
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
    } elseif (isset($_POST['add_room'])) {
        $quantity_rows = $_POST['quantity_rows'];

        if ($quantity_rows <= 0) {
            $loi = "Số lượng phải lớn hơn 1";
        }

        if (!isset($loi)) {
            $_SESSION['add_room'] = $quantity_rows;
            header('location:c_room.php?add-room');
        }
    } elseif (isset($_POST['add_img_room'])) {
        $quantity_img = $_POST['quantity_img'];

        if ($quantity_img <= 0 || $quantity_img >= 4) {
            $loi_img = "Số lượng ảnh chỉ là 3";
        }

        if (isset($_POST['room'])) {
            $_SESSION['room_add_img'] = $_POST['room'];
        }

        if (!isset($loi_img)) {
            $_SESSION['add_img_room'] = $quantity_img;
            header('location:c_room.php?add_img_room');
        }

        // if (isset($_POST['room'])) {
        //     $_SESSION['room_edit'] = $_POST['room'];
        //     header('location:c_room.php?edit_room');
        // } else {
        //     header('location:c_room.php');
        // }
    } elseif (isset($_POST['add_service_room'])) {
        $quantity_service = $_POST['quantity_service'];

        if ($quantity_service <= 0 || $quantity_service >= 6) {
            $loi_service = "Số lượng dịch vụ chỉ là 5";
        }

        if (isset($_POST['room'])) {
            $_SESSION['room_add_service'] = $_POST['room'];
        }

        if (!isset($loi_service)) {
            $_SESSION['add_service_room'] = $quantity_service;
            header('location:c_room.php?add_service_room');
        }
    }

    $VIEW_TITLE = "Danh sách phòng";
    $VIEW_CSS = 'admin_room.css';
    $VIEW_ADMIN_NAME = '../room/danh-sach.php';
}

include_once '../templates/layout/layout.php';
