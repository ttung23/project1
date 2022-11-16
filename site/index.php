    <?php
        require_once '../global.php';
        require_once '../dao/pdo.php';
        require_once '../dao/room_dao.php';
        require_once '../dao/category_dao.php';
        require_once '../dao/service_dao.php';
        require_once '../dao/comment_dao.php';
        require_once '../dao/news_dao.php';

        $roomAll = loadAll_room();
        $categoriesAll = loadAll_categories();
        $service = loadAll_service();


        if(isset($_GET['chi-tiet'])){
            $VIEW_NAME = 'chi-tiet.php';
        }elseif(isset($_GET['tin-tuc'])){
            $news = loadAll_news();
            $VIEW_NAME = 'tin-tuc.php';
        }elseif(isset($_GET['listproduct'])){
            $VIEW_NAME = 'cart.php';
        }elseif(isset($_GET['product-detail'])){
            if(isset($_GET['id'])&&($_GET['id'])) {
                $id=$_GET['id'];
                $iddm = $_GET['iddm'];
                $oneroom=loadOne_room($id);
                $onecomment=loadOne_comment($id);
                $room_categories = load_room_categories($iddm);
                extract($oneroom);
                extract($onecomment);
            $VIEW_NAME = 'chi-tiet.php';
        }
    }
        else{
            $VIEW_NAME = 'trang-chu.php';
        }
        include_once './layout.php';
    ?>