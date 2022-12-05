<?php
// MODEL
require_once '../global.php';
require_once '../../dao/pdo.php';
require_once '../../dao/service_dao.php';

// CONTROLLER
if (isset($_GET['add_service'])) {
    if (isset($_POST['btn_add_service'])) {
        $name_service = $_POST['name_service'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $status = $_POST['status'];
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
    $VIEW_CSS = 'admin_add_service.css';
    $VIEW_ADMIN_NAME = '../service/add_service.php';
} else if (isset($_GET['edit_cate'])) {

    $VIEW_TITLE = "Sửa dịch vụ";
    $VIEW_CSS = 'admin_add_danhmuc.css'; // edit dùng chung css
    $VIEW_ADMIN_NAME = '../danh-muc/edit_cate.php';
} else {
    $service = loadAll_service();
    if (isset($_POST['btn_delete_service'])) {
        if (isset($_POST['service'])) {
            $choose_service = $_POST['service'];

            for ($i = 0; $i < count($choose_service); $i++) {
                $delete_service = service_remove_by_id($choose_service[$i]);
            }

            header('location:c_service.php');
        }
    }
    $VIEW_TITLE = "Danh sách dịch vụ";
    $VIEW_CSS_BOOSTRAP = '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">';
    $VIEW_ADMIN_NAME = '../service/danh_sach_service.php';
}

include_once '../templates/layout/layout.php';
