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
    require_once '../../dao/bookingdt_dao.php';
    require_once '../../dao/user_dao.php';

    // CONTROLLER
    // if (isset($_SESSION['admin'])) {
        $VIEW_TITLE = "Bảng điều khiển";
        $VIEW_CSS = 'index-admin.css';
        $VIEW_ADMIN_NAME = '../dashboard/admin_index.php';

        for ($i = 1; $i <= 12; $i++) {
            $thongke[$i] = load_statistic_by_month($i);

            $tong_tien[$i] = load_sales_by_month($i);

            $user_by_month[$i] = load_thongke_user_by_month($i);
        }

        $tong_like = load_sum_like();
        $tong_cmt = load_sum_cmt();
        $tong_user = load_sum_users();
        

        // var_dump($tong_like);
        // exit;

        include_once '../templates/layout/layout.php';
    // } else {
    //     header("location: ../index.php");
    // }

    


?>