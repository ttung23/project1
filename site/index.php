    <?php
        require_once '../global.php';
        require_once '../dao/pdo.php';
        require_once '../dao/room_dao.php';
        require_once '../dao/category_dao.php';
        require_once '../dao/service_dao.php';

        $roomAll = loadAll_room();
        $categoriesAll = loadAll_categories();
        $service = loadAll_service();

        if(isset($_GET['chi-tiet'])){
            $VIEW_NAME = 'chi-tiet.php';
        }elseif(isset($_GET['tin-tuc'])){
            $VIEW_NAME = 'tin-tuc.php';
        }elseif(isset($_GET['listproduct'])){
            $VIEW_NAME = 'cart.php';
        }
        else{
            $VIEW_NAME = 'trang-chu.php';
        }
        include_once './layout.php';
    ?>