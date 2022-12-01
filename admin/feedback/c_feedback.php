<?php
// MODEL
require_once '../global.php';
require_once '../../dao/pdo.php';
require_once '../../dao/feedbacks_dao.php';

// CONTROLLER
if (isset($_GET['add_new'])) {
    if (isset($_POST['btn_add_new'])) {
        $name_new = $_POST['name_new'];
        $content = $_POST['content'];
        $status = 1;
        $id_admin = $_POST['id_admin'];

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
} else if (isset($_GET['edit_cate'])) {

    $VIEW_TITLE = "Sửa dịch vụ";
    $VIEW_CSS = 'admin_add_danhmuc.css'; // edit dùng chung css
    $VIEW_ADMIN_NAME = '../danh-muc/edit_cate.php';
} else {
    $feedbacks = loadAll_feedbacks();
    if (isset($_POST['btn_delete_new'])) {
        if (isset($_POST['news'])) {
            $choose_news = $_POST['news'];

            for ($i = 0; $i < count($choose_news); $i++) {
                $delete_news = news_remove_by_id($choose_news[$i]);
            }

            header('location:c_news.php');
        }
    }
    $VIEW_TITLE = "Danh sách Feedback";
    $VIEW_CSS = 'admin-booking.css';
    $VIEW_ADMIN_NAME = '../feedback/list_feedback.php';
}

// SET STATUS OF NEW
if (isset($_POST['btn_approve_new'])) {
    if (isset($_POST['news'])) {
        $choose_new_id = $_POST['news'];

        for ($i = 0; $i < count($choose_new_id); $i++) {
            Approve_news($choose_new_id[$i]);
        }
    }
    header("location:c_feedback.php");
} else if (isset($_POST['btn_prive_new'])) {
    if (isset($_POST['news'])) {
        $choose_new_id = $_POST['news'];

        for ($i = 0; $i < count($choose_new_id); $i++) {
            Prive_news($choose_new_id[$i]);
        }
    }
    header("location:c_feedback.php");
}

include_once '../templates/layout/layout.php';
