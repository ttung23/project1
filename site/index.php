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


    if (isset($_GET['cart'])) {
        if(!isset($_SESSION['addcart'])){
            session_start();
            ob_start();
            if (isset($_POST['addcart'])) {
                $id = $_POST['id'];
                $ten = $_POST['ten'];
                $quantity = $_POST['quantity'];
                if (!isset($_SESSION['addcart'][$id])) {
                    $_SESSION['addcart'][$id] = array('id' => $id, 'ten' => $ten);
                            } else {
                    $_SESSION['addcart'][$id];
                }
            }
            if (isset($_POST['delete'])) {
                $id = $_POST['id'];
                unset($_SESSION['addcart'][$id]);
            }
            ob_end_flush();
        }
        $VIEW_NAME = 'cart.php';
    } elseif (isset($_GET['tin-tuc'])) {
        $news = loadAll_news();
        $VIEW_NAME = 'tin-tuc.php';
    }elseif (isset($_GET['list-room'])) {
        if(isset($_POST['find'])){
            $checkin = $_POST['checkin'];
            $checkout = $_POST['checkout'];
            $selectfind = find_room($checkin,$checkout);
        }else{
            $selectfind = [];
        }
        $iddm = 0;
        if(isset($_GET['iddm'])){
            $iddm = $_GET['iddm'];
        }
        if($iddm == 0){
            $roomcategori = loadAll_room();
        }else{
            $roomcategori = load_room_categories($iddm);
        }
        $VIEW_NAME = 'list-room.php';
    } elseif (isset($_GET['addcart'])) {
     
        $VIEW_NAME = 'cart.php';
        ob_end_flush();
    } elseif (isset($_GET['product-detail'])) {
        if (isset($_GET['id']) && ($_GET['id'])) {
            $id = $_GET['id'];
            $iddm = $_GET['iddm'];
            $link="product-detail&id=$id&iddm=$iddm";
            $oneroom = loadOne_room($id);
            $onecomment = loadOne_comment($id);
            $room_categories = load_room_categories($iddm);
            extract($oneroom);
            extract($onecomment);
            if(isset($_GET['addcomment']) && isset($_POST['addcomment'])) {
                $content = $_POST['content'];
                // $star = $_POST['star'];
                $idroom = $_GET['id'];
                // $iduser = $_GET['iduser'];
                $addcomment = Insert_conmment($content,$idroom);
                header("location:index.php?$link");
        }
        }
        $VIEW_NAME = 'chi-tiet.php';
    } else {
        // $limit = $_GET['perpage'] ?? 9;
        // $current_page = $_GET['page'] ?? 1;
        // $offset = ($current_page - 1) * $limit;
        // $total_products = loadAll_room();
        // $total_pages = ceil(count($total_products) / $limit);
        // $room = read_room($limit,$offset);
        $VIEW_NAME = 'trang-chu.php';
    }
    include_once './layout.php';
    ?>