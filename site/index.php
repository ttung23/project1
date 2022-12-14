<?php
require_once '../global.php';
require_once '../dao/pdo.php';
require_once '../dao/room_dao.php';
require_once '../dao/category_dao.php';
require_once '../dao/service_dao.php';
require_once '../dao/comment_dao.php';
require_once '../dao/news_dao.php';
require_once '../dao/booking_dao.php';
require_once '../dao/bookingdt_dao.php';
require_once '../dao/user_dao.php';
require_once '../dao/admin_dao.php';
require_once '../dao/list_image_dao.php';

session_start();
$roomAll = loadAll_room();
$categoriesAll = loadAll_categories();
$service = loadAll_service();
$loadAll_room5 = loadAll_room5();
if (isset($_GET['iddm'])) {
    $loadroomcate =  load_room_categories($_GET['iddm']);
    $loadroom = $loadroomcate;
} else {
    $loadroom = $roomAll;
}
$ngay = date("Y-m-d");
$day = strtotime(date("Y-m-d", strtotime($ngay)) . " +1 day");
$day = strftime("%Y-%m-%d", $day);
if (!isset($_SESSION['checkin'])) {
    $_SESSION['checkin'] = $ngay;
    $_SESSION['checkout'] = $day;
}
$first_date = strtotime($_SESSION['checkin']);
$second_date = strtotime($_SESSION['checkout']);
$datediff = abs($first_date - $second_date);
$tongnd = floor($datediff / (60 * 60 * 24));
$_SESSION['$tongnd'] = $tongnd;
if (isset($_GET['cart'])) {
    // add cart

    if (isset($_SESSION['user'])) {
        $tt = 0;
        $tt1 = 0;
        $service_room = [];
        $total_amount = 0;
        $idnguoidung = $_SESSION['user']->user_id;
        $oneusrer = loadOne_user($idnguoidung);
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
            $created_at = $_POST['created_at'];
            $err = [];
            $room = [$id, $ten, $thumbnail, $des, $id_cate, $price, $star, $quantity, $location, $acreage, $status, $view, $likes, $created_at, $idnguoidung];
            $_SESSION['cart'][] = $room;
        }
        if (isset($_SESSION['cart']) && (is_array($_SESSION['cart']))) {
            for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                if ($_SESSION['cart'][$i][14] == $_SESSION['user']->user_id) {
                    $service_room = loadAll_service_room($_SESSION['cart'][$i][0]);
                }
            }
        }
        if (!isset($_SESSION['service'])) $_SESSION['service'] = [];
        $iduser = $_SESSION['user']->user_id;
        if (isset($_POST['addserive'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $servicesa = [$id, $name, $price, $iduser];
            $_SESSION['service'][] = $servicesa;
        }
        if (isset($_SESSION['cart']) && (is_array($_SESSION['cart']))) {
            for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                if ($_SESSION['cart'][$i][14] == $_SESSION['user']->user_id) {
                    $tien = $_SESSION['cart'][$i][5];
                    $tt += $tien;
                }
            }
        }
        if (isset($_SESSION['service']) && (is_array($_SESSION['service']))) {
            for ($i = 0; $i < sizeof($_SESSION['service']); $i++) {

                $tien1 = $_SESSION['service'][$i][2];
                $tt1 += $tien1;
            }
        }
        $tongtien = $tt + $tt1;
        if (isset($_POST['addbooking'])) {
            $check_in = $_POST['check_in'];
            $check_out = $_POST['check_out'];
            $status = 0;
            $quantity = $_POST['quantity'];
            $total_amount = $_POST['total_amount'];
            $message = $_POST['message'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $name = $_POST['name'];
            if ($name == "") {
                $err['name'] = "T??n Kh??ng ???????c ????? Tr???ng";
            }
            if ($message == "") {
                $err['message'] = "Tin Nh???n Kh??ng ???????c ????? Tr???ng";
            }
            if ($quantity == "") {
                $err['quantity'] = "S??? L?????ng Kh??ng ????? Tr???ng";
            }
            if (!preg_match ("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/",$email)) 
            {
                $err['email'] = "Sai ?????nh D???ng";           
            }
            if (!preg_match ("/^[0][0-9]{9}$/",$phone)) 
            {
                $err['phone'] = "B???n Ph???i Nh???p S??? V?? ????ng ?????nh D???ng";           
            }
            if(!$err){
                $insert_booking = Insert_booking($check_in, $check_out, $status, $quantity, $total_amount, $message, $phone, $email, $name, $_SESSION['user']->user_id);
                $selectbooking = loadAll_bookingdt1();
                foreach ($selectbooking as $key => $value) {
                    $idbooking = $value->booking_id;
                }
                if (isset($idbooking)) {
                    if (isset($_SESSION['cart']) && (is_array($_SESSION['cart']))) {
                        for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                            if ($_SESSION['cart'][$i][14] == $_SESSION['user']->user_id) {
                                $insert_bookingdt = Insert_bookingdt($_SESSION['cart'][$i][0], $idbooking);
                            }
                        }
                    }
                }
                $tongnd = 0;
                for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                    if ($_SESSION['cart'][$i][14] == $_SESSION['user']->user_id) {
                        $tongnd++;
                    }
                }
                for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                    if ($_SESSION['cart'][$i][14] == $_SESSION['user']->user_id) {
                        array_splice($_SESSION['cart'], $i, $tongnd);
                    }
                }
                $tt = 0;
                $tt1 = 0;
                header("location:index.php?info-user&id=" . $_SESSION['user']->user_id);
            }
        }
        if (isset($_GET['delid'])) {
            array_splice($_SESSION['cart'], $_GET['delid'], 1);
        }
        if (isset($_GET['delidsv'])) {
            array_splice($_SESSION['service'], $_GET['delidsv'], 1);
            header("location:index.php?cart");
        }
        $_TITLE = "Gi??? h??ng";
        $VIEW_NAME = 'cart.php';
    } else {
        header('Location:index.php?login-user');
    }
} elseif (isset($_GET['tin-tuc'])) {
    $news = loadAll_news();
    $_TITLE = "Tin t???c StayyInn";
    $VIEW_NAME = 'tin-tuc.php';
} elseif (isset($_GET['list-room'])) {

    if (isset($_POST['find'])) {
        $checkin = $_POST['checkin'];
        $checkout = $_POST['checkout'];
        if ($checkin < $checkout) {
            $_SESSION['checkin'] = $_POST['checkin'];
            $_SESSION['checkout'] = $_POST['checkout'];
            $selectfind = find_room($_SESSION['checkin'], $_SESSION['checkout']);
        } else {
            header("location:index.php?alert");
        }
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
    if (isset($_POST['loc'])) {
        $gia = $_POST['gender'];
        $cate = $_POST['cate'];

        $logroom = loadAll_room_price_list($gia, $cate);
    } else {
        $logroom = [];
    }
    $loadroomprice =  loadAll_room_price();
    $_TITLE = "Th??ng Tin Ph??ng";

    $VIEW_NAME = 'list-room.php';
} elseif (isset($_GET['info-user'])) {
    if (isset($_GET['id']) && ($_GET['id'])) {
        if (isset($_POST['block_bk'])) {
            if (isset($_POST['bk'])) {
                $choose_user_id = $_POST['bk'];
                for ($i = 0; $i < count($choose_user_id); $i++) {
                    $loadbooking = Load_one($choose_user_id[$i]);
                    foreach ($loadbooking as $key => $value) {
                        $statusbooking = $value->status;
                        if ($statusbooking == 1) {
                        
                        } else {
                            $block_user = block_bk($choose_user_id[$i]);
                        }
                    }
                }
            }
            // unlock user
        }
        $id = $_GET['id'];
        $bookinguser = loadAll_booking_user($id);
        $oneusrer = loadOne_user($id);
        if (isset($_POST['edit_user'])) {
            $id =  $_SESSION['user']->user_id;
            $name = $_POST['name'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $date = $_POST['date'];
            $image = $_FILES['image'];
            $image_name = $image['name'];
            $err = [];
            if ($name == "") {
                $err['name'] = "T??n Kh??ng ???????c ????? Tr???ng";
            }
            if ($username == "") {
                $err['user'] = "T??n ????ng Nh???p Kh??ng ???????c ????? Tr???ng";
            }
            if ($password == "") {
                $err['password'] = "M???t Kh???u Kh??ng ????? Tr???ng";
            }
            if ($address == "") {
                $err['address'] = "?????a Ch??? Kh??ng ????? Tr???ng";
            }
            if (!preg_match ("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/",$email)) 
            {
                $err['email'] = "Sai ?????nh D???ng";           
            }
            if (!preg_match ("/^[0][0-9]{9}$/",$phone)) 
            {
                $err['phone'] = "B???n Ph???i Nh???p S??? V?? ????ng ?????nh D???ng";           
            }
            //    $per = $_POST['permission'];
            if (!$err) {
                $update = Update_users($name, $username, $password, $email, $image_name, $address, $phone, $date, $id);
                if ($image['size'] > 0) {
                    move_uploaded_file($image['tmp_name'], '../layout/assets/img/users' . $image_name);
                }

                header('location:index.php?info-user&id='.$_SESSION['user']->user_id);
            }
        }
    }

    $_TITLE = 'Th??ng tin ng?????i d??ng';
    $VIEW_NAME = 'info_user.php';
} elseif (isset($_GET['product-detail'])) {
    if (isset($_GET['id']) && ($_GET['id'])) {
        $id = $_GET['id'];
        $iddm = $_GET['iddm'];
        $link = "product-detail&id=$id&iddm=$iddm";
        $oneroom = loadOne_room($id);
        $loadanh = loadAll_image($id);
        $addview = room_tang_so_luot_xem($id);
        $onecomment = loadOne_comment($id);
        $servicedt =  loadAll_service_room($id);
        $room_categories = load_room_categories($iddm);
        extract($oneroom);
        extract($onecomment);
        if (isset($_SESSION['user']->user_id)) {
            $iduser = $_SESSION['user']->user_id;
            $selectbookingcomment = loadAll_bookingdt_user($iduser);
            foreach ($selectbookingcomment as $key => $value) {
                $idbookingcomment = $value->booking_id;
                if (isset($idbookingcomment)) {
                    $insertcommet = true;
                }
            }
        } else {
        }

        if (isset($_GET['addcomment']) && isset($_POST['addcomment'])) {
            if (isset($insertcommet)) {
                if (isset($_SESSION['user'])) {
                    $content = $_POST['content'];
                    $err = [];
                    $idroom = $_GET['id'];
                    $iduser = $_SESSION['user']->user_id;
                    if($content == ""){
                        $err['comment'] = "B???n Kh??ng N??n B??? Tr???ng";
                    }
                    if(!$err){
                        $addcomment = Insert_conmment($content, $idroom, $iduser);
                        header("location:index.php?$link");
                        
                    }
                  
            
                }
            }else{
                header("location:index.php");
            }
        }
    }
    $_TITLE = "Th??ng tin ph??ng";
    $VIEW_NAME = 'chi-tiet.php';
} elseif (isset($_GET['sign_up'])) {
    if (isset($_POST['btn_sign_up'])) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $re_password = $_POST['re_password'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $date = $_POST['date'];
        $diachi = $_POST['diachi'];
        $sdt = $_POST['sdt'];

        $image = $_FILES['image'];
        $image_name = 'user.jpg';

        if ($name == "") {
            $err['name'] = "B???n ch??a nh???p h??? t??n";
        }

        if ($username == "") {
            $err['username'] = "B???n ch??a nh???p username";
        }

        if ($password == "") {
            $err['password'] = "B???n ch??a nh???p m???t kh???u";
        }

        if ($re_password != $password) {
            $err['re_password'] = "M???t kh???u kh??ng ch??nh x??c";
        }

        if ($email == "") {
            $err['email'] = "B???n ch??a ch???n nh???p email";
        }

        if ($date == "") {
            $err['date'] = "B???n ch??a ch???n ng??y sinh";
        }

        if ($diachi == "") {
            $err['diachi'] = "B???n ch??a nh???p ?????a ch???";
        }

        if ($sdt == "") {
            $err['sdt'] = "B???n ch??a nh???p s??? ??i???n tho???i";
        }

        if ($image['size'] > 0) {
            $image_name = $image['name'];

            $ext = pathinfo($image_name, PATHINFO_EXTENSION);

            if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                $err['img'] = "???nh kh??ng ????ng ?????nh d???ng";
            } else if ($image['size'] >= 2 * 1024 * 1024) {
                $err['img'] = "???nh kh??ng ???????c qu?? 2MB";
            }
        }

        if (!$err) {
            $sign_up = signUp($name, $username, $password, $gender, $email, $image_name, $diachi, $sdt, $date);

            if ($image['size'] > 0) {
                move_uploaded_file($image['tmp_name'], '../../layout/assets/img/users/' . $image_name);
            }

            header("location:index.php");
        }
    }
    $VIEW_CSS = '';
    $_TITLE = "????ng k??";
    $VIEW_NAME = 'sign_up.php';
} elseif (isset($_GET['booking_dt'])) {
    if (isset($_GET['idbk']) && ($_GET['idbk'])) {
        $id = $_GET['idbk'];
        $bookinguserde = loadAll_bookingdt_booking($id);
    }

    $VIEW_CSS = 'booking_detail.css';
    $_TITLE = 'L???ch s??? ?????t h??ng';
    $VIEW_NAME = 'booking_detail.php';
} elseif (isset($_GET['forgot'])) {
    if (isset($_POST['btn_forgot_pass'])) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $date = $_POST['date'];
        $sdt = $_POST['sdt'];

        $_SESSION['user_forgot'] = forgot_user($name, $username, $email, $date, $sdt);

        if (empty($_SESSION['user_forgot'])) {
            $err['sdt'] = "Th??ng tin ch??a ch??nh x??c";
        } else {
            header("location:index.php?update_password");
        }
    }
    $VIEW_CSS = '';
    $_TITLE = "Qu??n m???t kh???u";
    $VIEW_NAME = 'forgot_password.php';
} elseif (isset($_GET['update_password'])) {
    if (isset($_POST['btn_update_password'])) {
        $password = $_POST['password'];
        $re_password = $_POST['re_password'];

        if ($password == "") {
            $err['password'] = "B???n ch??a nh???p m???t kh???u";
        }

        if ($password != $re_password) {
            $err['re_password'] = "M???t kh???u kh??ng ch??nh x??c";
        }

        if (!isset($err)) {
            $update_pass = update_pass($password, $_SESSION['user_forgot'][0]->user_id);

            header("location:index.php");
        }
    }
    $VIEW_CSS = '';
    $_TITLE = "Qu??n m???t kh???u";
    $VIEW_NAME = 'update_password.php';
} elseif (isset($_GET['login_admin'])) {
    if (isset($_POST['login_admin'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $admin = loginadmin($username, $password);

        if ($admin != []) {
            $_SESSION['admin'] = $admin;
            header("location: ../admin/index.php");
        } else {
            echo "sai";
        }
    }
    $_TITLE = '????ng nh???p ph???n admin';
    $VIEW_NAME = 'login.php';
} elseif (isset($_GET['login-user'])) {
    if (isset($_POST['login_user'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = login($username, $password);

        if ($user != []) {
            $_SESSION['user'] = $user;
            header("location: index.php");
        } else {
            echo "sai";
        }
    }
    $_TITLE = '????ng nh???p ph???n ????ng Nh???p User';
    $VIEW_NAME = 'login_user.php';
}  else {
    // s
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
    if (isset($_GET['action']) && $_GET['action'] == 'logout') {
        unset($_SESSION['user']);
        unset($_SESSION['admin']);
        header('Location:index.php');
    }
    if (isset($_GET['alert'])) {
        $err['find'] = "Sai Checkout Vui L??ng T??m L???i";
    }
    $_TITLE = 'Trang ch???';
    $VIEW_NAME = 'trang-chu.php';
}
include_once './layout.php';
