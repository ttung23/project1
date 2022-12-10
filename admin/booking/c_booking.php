<?php
session_start();

require_once '../global.php';
require_once '../../dao/pdo.php';
require_once '../../dao/category_dao.php';
require_once '../../dao/room_dao.php';
require_once '../../dao/service_dao.php';
require_once '../../dao/booking_dao.php';
require_once '../../dao/user_dao.php';

if(isset($_GET['status'])){
    $booking = load_by_status($_GET['status']);
}else{
    $booking = loadAll_booking();
}

if (isset($_POST['delete_booking'])) {
    if (isset($_POST['booking'])) {
        $choose_booking = $_POST['booking'];
        for ($i = 0; $i < count($choose_booking); $i++) {
            $delete_booking = booking_remove_by_id($choose_booking[$i]);
        }

        header('location:c_booking.php');
    }
} elseif (isset($_POST['approve_booking'])) {
    if (isset($_POST['booking'])) {
        $choose_booking = $_POST['booking'];
        for ($i = 0; $i < count($choose_booking); $i++) {
            $approve_booking = set_status_booking(1, $choose_booking[$i]);
        }

        header('location:c_booking.php?status=1');
    }
} elseif (isset($_POST['unapproved_booking'])) {
    if (isset($_POST['booking'])) {
        $choose_booking = $_POST['booking'];
        for ($i = 0; $i < count($choose_booking); $i++) {
            $unapproved_booking = set_status_booking(2, $choose_booking[$i]);
        }

        header('location:c_booking.php?status=2');
    }
}
$VIEW_TITLE = "Danh sách đơn hàng";
$VIEW_CSS = 'admin_booking1.css';
$VIEW_ADMIN_NAME = '../booking/danh-sach.php';

include_once '../templates/layout/layout.php';

?>