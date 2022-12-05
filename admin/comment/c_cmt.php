<?php
session_start();

// MODEL
require_once '../global.php';
require_once '../../dao/pdo.php';
require_once '../../dao/comment_dao.php';

// CONTROLLER
$comments = load_comment_database();

if (isset($_POST['btn_delete_cmt'])) {
    if (isset($_POST['comment'])) {
        $choose_cmt = $_POST['comment'];

        for ($i = 0; $i < count($choose_cmt); $i++) {
            $delete_cmt = Remove_comment($choose_cmt[$i]);
        }

        header('location:c_cmt.php');
    }
}

$VIEW_TITLE = "Danh sách bình luận";
$VIEW_CSS = 'admin_cmt.css';
$VIEW_ADMIN_NAME = '../comment/list_cmt.php';


include_once '../templates/layout/layout.php';
