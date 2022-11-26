<?php
<<<<<<< HEAD
        require_once '../global.php';

        if(isset($_GET['chi-tiet'])){
            
        }elseif(isset($_GET['service'])){
            $VIEW_NAME = '../service/danh-sach.php';
        }else{
            $VIEW_NAME = '../room/danh-sach.php';
        }
        include_once '../dashboard/layout.php';
    ?>
=======
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
    $VIEW_TITLE = "Bảng điều khiển";
    $VIEW_CSS = 'index-admin.css';
    $VIEW_ADMIN_NAME = '../dashboard/admin_index.php';

    include_once '../templates/layout/layout.php';


?>
>>>>>>> c8d86ca (add file)
