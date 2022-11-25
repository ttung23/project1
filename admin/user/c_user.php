<?php
// MODEL
require_once '../global.php';
require_once '../../dao/pdo.php';
require_once '../../dao/user_dao.php';

// CONTROLLER
$users = loadAll_users();

// block user
if (isset($_POST['block_user'])) {
    if (isset($_POST['user'])) {
        $choose_user_id = $_POST['user'];

        for ($i = 0; $i < count($choose_user_id); $i++) {
            echo $choose_user_id[$i];
            $block_user = block_user($choose_user_id[$i]);
        }
    }
    header("location:c_user.php");

    // unlock user
} else if (isset($_POST['unlock_user'])) {
    if (isset($_POST['user'])) {
        $choose_user_id = $_POST['user'];

        for ($i = 0; $i < count($choose_user_id); $i++) {
            echo $choose_user_id[$i];
            $unlock_user = unlock_user($choose_user_id[$i]);
        }
    }
    header("location:c_user.php");
}


$VIEW_TITLE = "Danh sách User";
$VIEW_CSS = 'danh_sach_user.css';
$VIEW_ADMIN_NAME = '../user/danh_sach_user.php';

include_once '../templates/layout/layout.php';
