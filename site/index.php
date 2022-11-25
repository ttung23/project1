    <?php
    require_once '../global.php';
    require_once '../dao/pdo.php';
    require_once '../dao/room_dao.php';
    require_once '../dao/category_dao.php';
    require_once '../dao/service_dao.php';
    require_once '../dao/comment_dao.php';
    require_once '../dao/news_dao.php';
    require_once '../dao/booking_dao.php';
    require_once '../dao/user_dao.php';

    $roomAll = loadAll_room();
    $categoriesAll = loadAll_categories();
    $service = loadAll_service();
    session_start();

    if (isset($_GET['cart'])) {
        $service_room = [];
        if (!isset($_SESSION['addcart'])) {
            session_start();
            ob_start();
            if (isset($_POST['addcart'])) {
                $id = $_POST['id'];
                $ten = $_POST['ten'];
                $thumbnail = $_POST['thumbnail'];
                $des = $_POST['des'];
                $id_cate = $_POST['id_cate'];
                $price = $_POST['price'];
                $star = $_POST['star'];
                $quantity = $_POST['quantity'];
                $location = $_POST['location'];
                $acreage = $_POST['acreage'];
                $status = $_POST['status'];
                $view = $_POST['view'];
                $likes = $_POST['likes'];
                $id_service = $_POST['id_service'];
                $created_at = $_POST['created_at'];
                $id_admin = $_POST['id_admin'];
                $namedichvu = $_POST['namedichvu'];
                $service_room = loadAll_service_room($id);
                $pricedichvu = $_POST['pricedichvu'];
                if (!isset($_SESSION['addcart'][$id])) {
                    $_SESSION['addcart'][$id] = array('id' => $id, 'ten' => $ten, 'thumbnail' => $thumbnail, 'des' => $des, 'id_cate' => $id_cate, 'price' => $price, 'star' => $star, 'quantity' => $quantity, 'location' => $location, 'acreage' => $acreage, 'status' => $status, 'view' => $view, 'likes' => $likes, 'id_service' => $id_service, 'created_at' => $created_at, 'id_admin' => $id_admin, 'namedichvu' => $namedichvu, 'pricedichvu' => $pricedichvu);
                } else {
                }
                // tính tổng tiền
            }
            if (isset($_POST['delete'])) {
                $id = $_POST['id'];
                unset($_SESSION['addcart'][$id]);
            }
            $total_amount = 0;
            foreach ($_SESSION['addcart'] as $key => $value) {
                $total_amount += $value['price'] + $value['pricedichvu'];
            }
            if (isset($_POST['addbooking'])) {
                $check_in = $_POST['check_in'];
                $check_out = $_POST['check_out'];
                $status = 0;
                $quantity = $_POST['quantity'];
                $total_amount = $total_amount;
                $message = $_POST['message'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $name = $_POST['name'];
                //    $id_user = $_SESSION['name'];
                $insert_booking = Insert_booking($check_in, $check_out, $status, $quantity, $total_amount, $message, $phone, $email, $name);
                unset($_SESSION['addcart']);
                $_SESSION['addcart'] = [];
            }

            ob_end_flush();
        }
        $VIEW_NAME = 'cart.php';
    } elseif (isset($_GET['tin-tuc'])) {
        $news = loadAll_news();
        $VIEW_NAME = 'tin-tuc.php';
    } elseif (isset($_GET['list-room'])) {
        if (isset($_POST['find'])) {
            $checkin = $_POST['checkin'];
            $checkout = $_POST['checkout'];
            $selectfind = find_room($checkin, $checkout);
        } else {
            $selectfind = [];
        }
        $iddm = 0;
        if (isset($_GET['iddm'])) {
            $iddm = $_GET['iddm'];
        }
        if ($iddm == 0) {
            $roomcategori = loadAll_room();
        } else {
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
            $link = "product-detail&id=$id&iddm=$iddm";
            $oneroom = loadOne_room($id);
            $addview = room_tang_so_luot_xem($id);
            $onecomment = loadOne_comment($id);
            $room_categories = load_room_categories($iddm);
            extract($oneroom);
            extract($onecomment);
            if (isset($_GET['addcomment']) && isset($_POST['addcomment'])) {
                $content = $_POST['content'];
                // $star = $_POST['star'];
                $idroom = $_GET['id'];
                $iduser = $_SESSION['user_id'];
                $addcomment = Insert_conmment($content, $idroom, $iduser);
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

        if (isset($_POST['login'])) {
            $user = $_POST['user'];
            $password = $_POST['password'];
            $login = login($user, $password);
        }
        $VIEW_NAME = 'trang-chu.php';
    }
    include_once './layout.php';
    ?>