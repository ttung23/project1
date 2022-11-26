<?php
// MODEL
require_once '../global.php';
require_once '../../dao/pdo.php';
require_once '../../dao/category_dao.php';

// CONTROLLER
if (isset($_GET['add_cate'])) {
    if (isset($_POST['add_cate'])) {
        $name_cate = $_POST['name_cate'];
        $status = $_POST['status'];
        $description = $_POST['description'];

        $image = $_FILES['image'];
        $image_name = $image['name'];

        if ($name_cate == "") {
            $err['name_cate'] = "Bạn chưa nhập tên danh mục";
        }

        if ($status == "") {
            $err['status'] = "Bạn chưa nhập trạng thái của danh mục";
        }

        if ($description == "") {
            $err['description'] = "Bạn chưa nhập mô tả của danh mục";
        }

        $ext = pathinfo($image_name, PATHINFO_EXTENSION);

        if ($image['size'] <= 0) {
            $err['img'] = "Bạn chưa chọn ảnh cho danh mục";
        } else if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
            $err['img'] = "Ảnh không đúng định dạng";
        } else if ($image['size'] >= 2 * 1024 * 1024) {
            $err['img'] = "Ảnh không được quá 2MB";
        }

        if (!$err) {
            $add_cate = Insert_category($name_cate, $status, $description, $image_name);

            if ($image['size'] > 0) {
                move_uploaded_file($image['tmp_name'], '../../layout/assets/img/' . $image_name);
            }

            header('location:c_danh_muc.php');
        }
    }

    $VIEW_TITLE = "Thêm danh mục";
    $VIEW_CSS = 'admin_add_danhmuc.css';
    $VIEW_ADMIN_NAME = '../danh-muc/add_cate.php';
} else if (isset($_GET['edit_cate'])) {

    $VIEW_TITLE = "Sửa danh mục";
    $VIEW_CSS = 'admin_add_danhmuc.css'; // edit dùng chung css
    $VIEW_ADMIN_NAME = '../danh-muc/edit_cate.php';
} else {
    $category = loadAll_categories();
    if (isset($_POST['delete_cate'])) {
        if (isset($_POST['danh_muc'])) {
            $choose_cate = $_POST['danh_muc'];

            for ($i = 0; $i < count($choose_cate); $i++) {
                $delete_cate = category_remove_by_id($choose_cate[$i]);
            }

            header('location:c_danh_muc.php');
        }
    }
    $VIEW_TITLE = "Danh sách danh mục";
    $VIEW_CSS = 'admin_dm.css';
    $VIEW_ADMIN_NAME = '../danh-muc/danh-sach.php';
}

include_once '../templates/layout/layout.php';
