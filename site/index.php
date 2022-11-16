    <?php
        require_once '../global.php';
        require_once '../dao/pdo.php';

        if(isset($_GET['chi-tiet'])){
            $VIEW_NAME = 'chi-tiet.php';
        }elseif(isset($_GET['tin-tuc'])){
            $VIEW_NAME = 'tin-tuc.php';
        }elseif(isset($_GET['cart'])){
            $VIEW_NAME = 'cart.php';
        }
        else{
            $VIEW_NAME = 'trang-chu.php';
        }

        include_once './layout.php';

    ?>