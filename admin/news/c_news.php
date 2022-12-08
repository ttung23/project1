<?php
session_start();

// MODEL
require_once '../global.php';
require_once '../../dao/pdo.php';
require_once '../../dao/news_dao.php';

// CONTROLLER
if (isset($_GET['status'])) {
    $news = load_new_by_status($_GET['status']);
} else {
    $news = loadAll_news();
}

if (isset($_GET['add_new'])) { // THÊM
    if (isset($_POST['btn_add_new'])) {
        $name_new = $_POST['name_new'];
        $content = $_POST['content'];
        $status = 1;
        $id_admin = $_SESSION['admin']->admin_id;

        $image = $_FILES['image'];
        $image_name = $image['name'];

        if ($name_new == "") {
            $err['name_new'] = "Bạn chưa nhập tiêu đề của tin tức";
        }

        if ($content == "") {
            $err['content'] = "Bạn chưa nhập nội dung của tin tức";
        }

        if ($id_admin == "") {
            $err['id_admin'] = "Bạn chưa nhập id người đăng";
        }

        $ext = pathinfo($image_name, PATHINFO_EXTENSION);

        if ($image['size'] <= 0) {
            $err['img'] = "Bạn chưa chọn ảnh tin tức";
        } else if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
            $err['img'] = "Ảnh không đúng định dạng";
        } else if ($image['size'] >= 2 * 1024 * 1024) {
            $err['img'] = "Ảnh không được quá 2MB";
        }

        if (!$err) {
            $add_new = Insert_new($name_new, $image_name, $content, $status, $id_admin);

            if ($image['size'] > 0) {
                move_uploaded_file($image['tmp_name'], '../../layout/assets/img/news/' . $image_name);
            }

            header('location:c_news.php');
        }
    }

    $VIEW_TITLE = "Thêm tin tức";
    $VIEW_CSS = 'admin_add.css';
    $VIEW_ADMIN_NAME = '../news/add_news.php';
} else if (isset($_GET['edit_news'])) { // SỬA
    $len_new_edit = count($_SESSION['new_edit']);
    for ($i = 0; $i < $len_new_edit; $i++) {
        $news_edit[$i] = load_one_new($_SESSION['new_edit'][$i]);
    }

    if (isset($_POST['btn_edit_new'])) {
        $name_new = $_POST['name_new'];
        $content = $_POST['content'];
        $id_admin = $_SESSION['admin']->admin_id;
        $image_name = $_POST['image'];

        $image = $_FILES['image'];
        
        for ($i = 0; $i < $len_new_edit; $i++) {
            if ($name_new[$i] == "") {
                $err['name_new'][$i] = "Bạn chưa nhập tiêu đề của tin tức";
            }
    
            if ($content[$i] == "") {
                $err['content'][$i] = "Bạn chưa nhập nội dung của tin tức";
            }
    
            if ($image['size'][$i] > 0) {
                $image_name[$i] = $image['name'][$i];
                $ext = pathinfo($image_name[$i], PATHINFO_EXTENSION);
    
                if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                    $err['img'][$i] = 'Ảnh không đúng định dạng';
                } elseif ($image['size'][$i] >= 2 * 1024 * 1024) {
                    $err['img'][$i] = 'Ảnh không được quá 2MB';
                }
            }
    
            if (empty($err)) {
                $add_new = Update_news($name_new[$i], $image_name[$i], $content[$i], $id_admin, $news_edit[$i]->news_id);
    
                if ($image['size'][$i] > 0) {
                    move_uploaded_file($image['tmp_name'][$i], '../../layout/assets/img/news/' . $image_name[$i]);
                }
    
                header('location:c_news.php');
            }
        }
    }    

    $VIEW_TITLE = "Sửa thông tin bài viết";
    $VIEW_CSS = 'admin_add.css'; // edit dùng chung css
    $VIEW_ADMIN_NAME = '../news/edit_news.php';
} else {
    
    if (isset($_POST['btn_delete_new'])) { // XÓA
        if (isset($_POST['news'])) {
            $choose_news = $_POST['news'];

            for ($i = 0; $i < count($choose_news); $i++) {
                $delete_news = news_remove_by_id($choose_news[$i]);
            }

            header('location:c_news.php');
        }
    } elseif (isset($_POST['edit_new'])) { // SỬA
        if (isset($_POST['news'])) {
            $_SESSION['new_edit'] = $_POST['news'];
            header('location:c_news.php?edit_news');
        } else {
            header('location:c_news.php');
        }
    }
    $VIEW_TITLE = "Danh sách tin tức";
    $VIEW_CSS = 'admin-booking.css';
    $VIEW_ADMIN_NAME = '../news/list_news.php';
}

// SET STATUS OF NEW
if (isset($_POST['btn_approve_new'])) {
    if (isset($_POST['news'])) {
        $choose_new_id = $_POST['news'];

        for ($i = 0; $i < count($choose_new_id); $i++) {
            Approve_news($choose_new_id[$i]);
        }
    }
    header("location:c_news.php?status=1");
} else if (isset($_POST['btn_prive_new'])) {
    if (isset($_POST['news'])) {
        $choose_new_id = $_POST['news'];

        for ($i = 0; $i < count($choose_new_id); $i++) {
            Prive_news($choose_new_id[$i]);
        }
    }
    header("location:c_news.php?status=2");
}

include_once '../templates/layout/layout.php';
