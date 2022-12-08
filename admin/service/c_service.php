<?php
session_start();

// MODEL
require_once '../global.php';
require_once '../../dao/pdo.php';
require_once '../../dao/service_dao.php';

// CONTROLLER
if (isset($_GET['status'])) {
    $service = load_service_by_status($_GET['status']);
} else {
    $service = loadAll_service();
}

if (isset($_GET['add_service'])) {
    if (isset($_POST['btn_add_service'])) {
        $name_service = $_POST['name_service'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $status = 1;
        $id_room = $_POST['id_room'];

        $image = $_FILES['image'];
        $image_name = $image['name'];

        if ($name_service == "") {
            $err['name_service'] = "Bạn chưa nhập tên dịch vụ";
        }

        if ($description == "") {
            $err['description'] = "Bạn chưa nhập mô tả của dịch vụ";
        }

        if ($price == "") {
            $err['price'] = "Bạn chưa nhập giá của dịch vụ";
        }

        if ($quantity == "") {
            $err['quantity'] = "Bạn chưa nhập số lượng của dịch vụ";
        }

        if ($status == "") {
            $err['status'] = "Bạn chưa nhập trạng thái của dịch vụ";
        }

        if ($id_room == "") {
            $err['id_room'] = "Bạn chưa chọn phòng của dịch vụ";
        }

        $ext = pathinfo($image_name, PATHINFO_EXTENSION);

        if ($image['size'] <= 0) {
            $err['img'] = "Bạn chưa chọn ảnh cho dịch vụ";
        } else if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
            $err['img'] = "Ảnh không đúng định dạng";
        } else if ($image['size'] >= 2 * 1024 * 1024) {
            $err['img'] = "Ảnh không được quá 2MB";
        }

        if (!$err) {
            $add_service = Insert_service($name_service, $image_name, $description, $price, $quantity, $status, $id_room);

            if ($image['size'] > 0) {
                move_uploaded_file($image['tmp_name'], '../../layout/assets/img/' . $image_name);
            }

            header('location:c_service.php');
        }
    }

    $VIEW_TITLE = "Thêm dịch vụ";
    $VIEW_CSS = 'admin_add.css';
    $VIEW_ADMIN_NAME = '../service/add_service.php';
} else if (isset($_GET['edit_service'])) {
    $len_service_edit = count($_SESSION['service_edit']);
    for ($i = 0; $i < $len_service_edit; $i++) {
        $service_edit[$i] = load_one_service($_SESSION['service_edit'][$i]);
    }

    // echo "<pre>";
    // var_dump($service_edit);
    // exit;

    if (isset($_POST['btn_edit_service'])) {
        $name_service = $_POST['name_service'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $id_room = $_POST['id_room'];
        $image_name = $_POST['image'];

        $image = $_FILES['image'];
        
        for ($i = 0; $i < $len_service_edit; $i++) {
            if ($name_service[$i] == "") {
                $err['name_service'][$i] = "Bạn chưa nhập tên dịch vụ";
            }
    
            if ($description[$i] == "") {
                $err['description'][$i] = "Bạn chưa nhập mô tả của dịch vụ";
            }
    
            if ($price[$i] == "") {
                $err['price'][$i] = "Bạn chưa nhập giá của dịch vụ";
            }
    
            if ($quantity[$i] == "") {
                $err['quantity'][$i] = "Bạn chưa nhập số lượng của dịch vụ";
            }
    
            if ($id_room[$i] == "") {
                $err['id_room'][$i] = "Bạn chưa chọn phòng của dịch vụ";
            }
    
            if ($image['size'][$i] > 0) {
                // echo "<pre>";
                // var_dump($image_name[$i]);
                // exit;
                $image_name[$i] = $image['name'][$i];
    
                // echo "<pre>";
                // var_dump($image_name[$i]);
                // exit;
                $ext = pathinfo($image_name[$i], PATHINFO_EXTENSION);
    
                if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                    $err['img'][$i] = 'Ảnh không đúng định dạng';
                } elseif ($image['size'][$i] >= 2 * 1024 * 1024) {
                    $err['img'][$i] = 'Ảnh không được quá 2MB';
                }
            }
    
            if (empty($err)) {
                $edit_service = Update_service($name_service[$i], $image_name[$i], $description[$i], $price[$i], $quantity[$i], $id_room[$i], $service_edit[$i]->service_id);
    
                if ($image['size'][$i] > 0) {
                    move_uploaded_file($image['tmp_name'][$i], '../../layout/assets/img/dichvu/' . $image_name[$i]);
                }
    
                header('location:c_service.php');
            }
        }
    }

    $VIEW_TITLE = "Sửa dịch vụ";
    $VIEW_CSS = 'admin_add.css'; // edit dùng chung css
    $VIEW_ADMIN_NAME = '../service/edit-service.php';
} else {
    if (isset($_POST['delete_service'])) {
        if (isset($_POST['service'])) {
            $choose_service = $_POST['service'];

            for ($i = 0; $i < count($choose_service); $i++) {
                $delete_service = service_remove_by_id($choose_service[$i]);
            }

            header('location:c_service.php');
        }
    } elseif (isset($_POST['edit_service'])) {
        if (isset($_POST['service'])) {
            $_SESSION['service_edit'] = $_POST['service'];
            header('location:c_service.php?edit_service');
        } else {
            header('location:c_service.php');
        }
    } elseif (isset($_POST['unlock_service'])) {
        if (isset($_POST['service'])) {
            $choose_service_id = $_POST['service'];
    
            for ($i = 0; $i < count($choose_service_id); $i++) {
                $block_user = set_status_service(1, $choose_service_id[$i]);
            }
        }
        header("location:c_service.php?status=1");
    } elseif (isset($_POST['block_service'])) {
        if (isset($_POST['service'])) {
            $choose_service_id = $_POST['service'];
    
            for ($i = 0; $i < count($choose_service_id); $i++) {
                $block_user = set_status_service(0, $choose_service_id[$i]);
            }
        }
        header("location:c_service.php?status=0");
    }
    $VIEW_TITLE = "Danh sách dịch vụ";
    $VIEW_CSS = "admin_service.css";
    $VIEW_ADMIN_NAME = '../service/danh_sach_service.php';
}

include_once '../templates/layout/layout.php';
