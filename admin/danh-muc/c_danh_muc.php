<?php
session_start();
// MODEL
require_once '../global.php';
require_once '../../dao/pdo.php';
require_once '../../dao/category_dao.php';

// CONTROLLER
if (isset($_GET["status"])) {
    $category = load_cate_by_status($_GET["status"]);
} else {
    $category = loadAll_categories();
}

if (isset($_GET['add_cate'])) {
    $len_rows = $_SESSION['add_cate'];

    if (isset($_POST['add_cate'])) {
        $name_cate = $_POST['name_cate'];
        $status = 1;
        $description = $_POST['description'];

        $image = $_FILES['image'];
        $image_name = $image['name'];        

        for ($i = 0; $i < $len_rows; $i++) {            
            if ($name_cate[$i] == "") {
                $err['name_cate'][$i] = "Bạn chưa nhập tên danh mục";
            }
    
            if ($description[$i] == "") {
                $err['description'][$i] = "Bạn chưa nhập mô tả của danh mục";
            }
    
            $ext = pathinfo($image_name[$i], PATHINFO_EXTENSION);
            if ($image['size'][$i] <= 0) {
                $err['img'][$i] = "Bạn chưa chọn ảnh cho danh mục";
            } else if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                $err['img'][$i] = "Ảnh không đúng định dạng";
            } else if ($image['size'][$i] >= 2 * 1024 * 1024) {
                $err['img'][$i] = "Ảnh không được quá 2MB";
            }
    
            if (empty($err)) {
                $add_cate = Insert_category($name_cate[$i], $status, $description[$i], $image_name[$i]);
    
                if ($image['size'][$i] > 0) {
                    move_uploaded_file($image['tmp_name'][$i], '../../layout/assets/img/categories/' . $image_name[$i]);
                }
    
                header('location:c_danh_muc.php');
            }
        }
    }

    $VIEW_TITLE = "Thêm danh mục";
    $VIEW_CSS = 'admin_add.css';
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

        for ($i = 0; $i < $len_cate_edit; $i++) {
            if ($name_cate[$i] == "") {
                $err['name_cate'][$i] = "Bạn chưa nhập tên danh mục";
            }

            if ($status[$i] == "") {
                $err['status'][$i] = "Bạn chưa nhập trạng thái của danh mục";
            }

            if ($description[$i] == "") {
                $err['description'][$i] = "Bạn chưa nhập mô tả của danh mục";
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
                $edit_cate = Update_category($name_cate[$i], $status[$i], $description[$i], $image_name[$i], $cates_edit[$i]->categories_id);
    
                if ($image['size'][$i] > 0) {
                    move_uploaded_file($image['tmp_name'][$i], '../../layout/assets/img/categories/' . $image_name[$i]);
                }
    
                header('location:c_danh_muc.php');
            }
        }
    }


    $VIEW_TITLE = "Sửa danh mục";
    $VIEW_CSS = 'admin_add.css'; // edit dùng chung css
    $VIEW_ADMIN_NAME = '../danh-muc/edit_cate.php';
} else {
    
    if (isset($_POST['delete_cate'])) {
        if (isset($_POST['danh_muc'])) {
            $choose_cate = $_POST['danh_muc'];

            for ($i = 0; $i < count($choose_cate); $i++) {
                $delete_cate = category_remove_by_id($choose_cate[$i]);
            }

            header('location:c_danh_muc.php');
        }
    } elseif (isset($_POST['edit_cate'])) {
        if (isset($_POST['danh_muc'])) {
            $_SESSION['cates_edit'] = $_POST['danh_muc'];
            header('location:c_danh_muc.php?edit_cate');
        } else {
            header('location:c_danh_muc.php');
        }
    } elseif (isset($_POST['add_cate'])) {
        $quantity_rows = $_POST['quantity_rows'];

        if ($quantity_rows <= 0) {
            $loi = "Số lượng phải lớn hơn 1";
        }

        if (!isset($loi)) {
            $_SESSION['add_cate'] = $quantity_rows;
            header('location:c_danh_muc.php?add_cate');
        }
    }
    $VIEW_TITLE = "Danh sách danh mục";
    $VIEW_CSS = 'admin_dm.css';
    $VIEW_ADMIN_NAME = '../danh-muc/danh-sach.php';
}

//SET TRẠNG THÁI CHO DANH MỤC
if (isset($_POST['unlock_cate'])) {
    if (isset($_POST['danh_muc'])) {
        $choose_danh_muc_id = $_POST['danh_muc'];

        for ($i = 0; $i < count($choose_danh_muc_id); $i++) {
            $block_cate = set_status_cate(1, $choose_danh_muc_id[$i]);
        }
    }
    header("location:c_danh_muc.php?status=1");
} elseif (isset($_POST['block_cate'])) {
    if (isset($_POST['danh_muc'])) {
        $choose_danh_muc_id = $_POST['danh_muc'];

        for ($i = 0; $i < count($choose_danh_muc_id); $i++) {
            $block_cate = set_status_cate(0, $choose_danh_muc_id[$i]);
        }
    }
    header("location:c_danh_muc.php?status=0");
}

include_once '../templates/layout/layout.php';
