<?php
session_start();
// MODEL
require_once '../global.php';
require_once '../../dao/pdo.php';
require_once '../../dao/room_dao.php';
require_once '../../dao/category_dao.php';
require_once '../../dao/service_dao.php';
require_once '../../dao/comment_dao.php';
require_once '../../dao/news_dao.php';
require_once '../../dao/booking_dao.php';
require_once '../../dao/user_dao.php';

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
    $len_cate_edit = count($_SESSION['cates_edit']);
    for ($i = 0; $i < $len_cate_edit; $i++) {
        $cates_edit[$i] = loadOne_category($_SESSION['cates_edit'][$i]);
    }

    if (isset($_POST['edit_cate'])) {
        $name_cate = $_POST['name_cate'];
        $status = $_POST['status'];
        $description = $_POST['description'];
        $image_name = $_POST['image']; // đang là mảng rồi

        $image = $_FILES['image'];

        // echo "<pre>";
        // var_dump($image_name);
        // exit;

        for ($i = 0; $i < $len_cate_edit; $i++) {
            if ($name_cate[$i] == "") {
                $err['name_cate'] = "Bạn chưa nhập tên danh mục";
            }

            if ($status[$i] == "") {
                $err['status'] = "Bạn chưa nhập trạng thái của danh mục";
            }

            if ($description[$i] == "") {
                $err['description'] = "Bạn chưa nhập mô tả của danh mục";
            }

            if ($image['size'][$i] > 0) {
                // echo "<pre>";
                // echo $i;
                // var_dump($image['size'][$i]);
                // exit;
                
                $image_name[$i] = $image['name'][$i];
                $ext = pathinfo($image_name[$i], PATHINFO_EXTENSION);

                if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                    $err['img'] = "Ảnh không đúng định dạng";
                } else if ($image['size'][$i] >= 2 * 1024 * 1024) {
                    $err['img'] = "Ảnh không được quá 2MB";
                }

                // echo "<pre>";
                // var_dump($image_name[$i]);
                // continue;
            }

            // var_dump($image_name[$i]);
            // exit;
        
            if (empty($err)) {
                $edit_cate = Update_category($name_cate[$i], $status[$i], $description[$i], $image_name[$i], $cates_edit[$i]->categories_id);
    
                move_uploaded_file($image['tmp_name'][$i], '../../layout/assets/img/categories/' . $image_name[$i]);
    
                header('location:c_danh_muc.php');
            }
        }
    }


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
    } elseif (isset($_POST['edit_cate'])) {
        $_SESSION['cates_edit'] = $_POST['danh_muc'];
        header('location:c_danh_muc.php?edit_cate');
    }
    $VIEW_TITLE = "Danh sách danh mục";
    $VIEW_CSS = 'admin_dm.css';
    $VIEW_ADMIN_NAME = '../danh-muc/danh-sach.php';
}

include_once '../templates/layout/layout.php';
