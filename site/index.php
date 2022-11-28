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
require_once '../dao/bookingdt_dao.php';
session_start();
$roomAll = loadAll_room();
$categoriesAll = loadAll_categories();
$service = loadAll_service();
if (isset($_GET['cart'])) {
    // add cart
    if (isset($_SESSION['username'])) {

        $tt = 0;
        $service_room = [];
        $total_amount = 0;
        $idnguoidung = $_SESSION['user_id'];
        if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
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
            $pricedichvu = $_POST['pricedichvu'];
            $service_room = loadAll_service_room($id);
            $room = [$id, $ten, $thumbnail, $des, $id_cate, $price, $star, $quantity, $location, $acreage, $status, $view, $likes, $id_service, $created_at, $id_admin, $namedichvu, $pricedichvu, $idnguoidung];
            $_SESSION['cart'][] = $room;
            // var_dump($_SESSION['cart']);
        }
        if (isset($_SESSION['cart']) && (is_array($_SESSION['cart']))) {
            for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                if ($_SESSION['cart'][$i][18] == $_SESSION['user_id']) {
                    $tt += $_SESSION['cart'][$i][17] + $_SESSION['cart'][$i][5];
                }
            }
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
            $insert_booking = Insert_booking($check_in, $check_out, $status, $quantity, $total_amount, $message, $phone, $email, $name, $_SESSION['user_id']);
            $selectbooking = loadAll_bookingdt1();
            foreach ($selectbooking as $key => $value) {
                $idbooking = $value->booking_id;
            }
            if (isset($idbooking)) {
                if (isset($_SESSION['cart']) && (is_array($_SESSION['cart']))) {
                    for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                        if ($_SESSION['cart'][$i][18] == $_SESSION['user_id']) {
                            $insert_bookingdt = Insert_bookingdt($_SESSION['cart'][$i][0], $idbooking);
                        }
                    }
                }
            }
            // $insert_bookdetail = Insert_bookingdt($id,);
            unset($_SESSION['addcart']);
            $_SESSION['addcart'] = [];
        }
        if (isset($_GET['delid'])) {
            array_splice($_SESSION['cart'], $_GET['delid'], 1);
        }
        $VIEW_NAME = 'cart.php';
    } else {
        $VIEW_NAME = 'trang-chu.php';
    }
} elseif (isset($_GET['tin-tuc'])) {
    $news = loadAll_news();
    $VIEW_NAME = 'tin-tuc.php';
} elseif (isset($_GET['list-room'])) {
    if (isset($_POST['find'])) {
        $_SESSION['checkin'] = $_POST['checkin'];
        $_SESSION['checkout'] = $_POST['checkout'];
        $selectfind = find_room($_SESSION['checkin'], $_SESSION['checkout']);
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
} elseif (isset($_GET['info-user'])) {
    if (isset($_GET['id']) && ($_GET['id'])) {
        $id = $_GET['id'];
        $bookinguser = loadAll_booking_user($id);
        $oneusrer = loadOne_user($id);
        if (isset($_POST['edit_user'])) {
            $id = $_SESSION['id'];
            $name = $_POST['name'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $date = $_POST['date'];
            $image = $_FILES['image'];
            $image_name = $image['name'];
            //    $per = $_POST['permission'];
            $err = [];
            if (!$err) {

                $update = Update_users($name,$username,$password, $email, $image_name, $address, $phone,$date,$id);
                if ($image['size'] > 0) {
                    move_uploaded_file($image['tmp_name'], '../layout/assets/img/product' . $image_name);
                }

                header('location:index.php');
            }
        }
    }
    $VIEW_NAME = 'info_user.php';
} else {
    // s
    // $limit = $_GET['perpage'] ?? 9;
    // $current_page = $_GET['page'] ?? 1;
    // $offset = ($current_page - 1) * $limit;
    // $total_products = loadAll_room();
    // $total_pages = ceil(count($total_products) / $limit);
    // $room = read_room($limit,$offset);

    if (isset($_POST['login'])) {
        session_start();
        $user = $_POST['user'];
        $password = $_POST['password'];
        $login = login($user, $password);
    }
    if (isset($_GET['action']) && $_GET['action'] == 'logout') {
        session_unset();
        header('Location:index.php');
    }
    if (isset($_GET['action']) && $_GET['action'] == 'logout') {
        unset($_SESSION['addcart']);
        header('Location:index.php');
    }
    $VIEW_NAME = 'trang-chu.php';
}
include_once './layout.php';
