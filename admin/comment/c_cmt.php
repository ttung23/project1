<?php
session_start();

// MODEL
require_once '../global.php';
require_once '../../dao/pdo.php';
require_once '../../dao/comment_dao.php';

// CONTROLLER
if (isset($_GET['status'])) {
    $comments = load_cmt_by_status($_GET['status']);
} else {
    $comments = load_comment_database();
}

if (isset($_POST['btn_delete_cmt'])) {
    if (isset($_POST['comment'])) {
        $choose_cmt = $_POST['comment'];

        for ($i = 0; $i < count($choose_cmt); $i++) {
            $delete_cmt = Remove_comment($choose_cmt[$i]);
        }

        header('location:c_cmt.php');
    }
} elseif (isset($_POST['btn_duyet'])) {
    if (isset($_POST['comment'])) {
        $choose_comment_id = $_POST['comment'];

        for ($i = 0; $i < count($choose_comment_id); $i++) {
            $duyet_cmt = set_status_cmt(1, $choose_comment_id[$i]);
        }
    }
    header("location:c_cmt.php?status=1");
} elseif (isset($_POST['btn_huy'])) {
    if (isset($_POST['comment'])) {
        $choose_comment_id = $_POST['comment'];

        for ($i = 0; $i < count($choose_comment_id); $i++) {
            $chan_cmt = set_status_cmt(2, $choose_comment_id[$i]);
        }
    }
    header("location:c_cmt.php?status=2");
}

// var_dump($comments);
// exit;

$VIEW_TITLE = "Danh sách bình luận";
$VIEW_CSS = 'admin_cmt.css';
$VIEW_ADMIN_NAME = '../comment/list_cmt.php';


include_once '../templates/layout/layout.php';
