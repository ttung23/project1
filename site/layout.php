<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../layout/assets/css/index.css" />
    <link rel="stylesheet" href="../layout/assets/css/hover-index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
<div class="container-index">

<div class="nav-index containerr">
            <div class="nav-left">
                <i class="fa-solid fa-bars"></i>
                <img src="../layout/assets/img/logo/30bf6c528078ba28d34bc3e37d124bdb.svg" alt="">
            </div>
            <div class="nav-right">
                <ul>
                    <li><a href=""><i class="fa-solid fa-download"></i></i> Tải ứng dụng <i><i class="fa-solid fa-chevron-down"></i></i></a></li>
                    <li><a href=""><i class="fa-solid fa-handshake"></i> Hợp tác với chúng tôi</a></li>
                    <li><a href=""><i class="fa-solid fa-clipboard-check"></i> Đã lưu</a></li>
                    <li><a href=""><i class="fa-solid fa-list-check"></i> Đặt chỗ của tôi </a>

                    </li>
                    <li>
                        <div class="dropdown">
                            <button type="submit" onclick="hamDropdown()" class="nut_dropdown">
                                <img src="../layout/assets/img/logo/co.png" alt=""> VND <i style="color:black; font-size: 11px; padding-left: 4px;padding-top: 5px;" class="fa-solid fa-chevron-down"></i>
                            </button>
                            <div class="noidung_dropdown">
                                <div class="nation">
                                    <h2>Tên quốc gia & ngôn ngữ</h2>
                                    <span>Indonesia (Bahasha indonesia) </span>
                                    <img src="assets/img/co/indo.png" alt="" />
                                    <span>Indonesia (English) </span>
                                    <img src="../layout/assets/img/co/indo.png" alt="" /> <span>Thailan </span>
                                    <img src="../layout/assets/img/co/thai.png" alt="" /> <span>Indonesia </span>
                                    <img src="../layout/assets/img/co/indo.png" alt="" /> <span>Indonesia </span>
                                    <img src="../layout/assets/img/co/indo.png" alt="" /> <span>Indonesia </span>
                                    <img src="../layout/assets/img/co/indo.png" alt="" /> <span>Indonesia </span>
                                    <img src="../layout/assets/img/co/indo.png" alt="" /> <span>Indonesia </span>
                                    <img src="../layout/assets/img/co/my.png" alt="" /> <span>Indonesia </span>
                                    <img src="../layout/assets/img/co/my.png" alt="" />
                                </div>
                                <div class="mony">
                                    <h2>Tiền tệ</h2>
                                    <span style="font-size: 15px; color: black; font-weight: 500">AUD</span>
                                    <span>Dola Úc</span> <br />
                                    <span style="font-size: 15px; color: black; font-weight: 500">SGD</span>
                                    <span>Dola Singapo</span> <br />
                                    <span style="font-size: 15px; color: black; font-weight: 500">USD</span>
                                    <span>Dola Mỹ</span> <br />
                                    <span style="font-size: 15px; color: black; font-weight: 500">VND</span>
                                    <span>Việt Nam Đồng</span> <br />
                                    <span style="font-size: 15px; color: black; font-weight: 500">THB</span>
                                    <span>Baht Thái</span> <br />
                                    <span style="font-size: 15px; color: black; font-weight: 500">IDR</span>
                                    <span>Rupiah Indonesia</span> <br />
                                </div>
                            </div>
                        </div>

                    </li>
                    <li>
                        <div class="dropdown-2">
                            <button type="submit"><a class="dangnhap" href=""><i>
                                        <i class="fa-solid fa-user"></i></i> Đăng nhập
                                    <i style="color:black; font-size: 12px;" class="fa-solid fa-chevron-down"></i></a>
                            </button>
                            <div class="noidung-index">
                                <h2>Đăng nhập tài khoản</h2>
                                <span>Email hoặc số di động</span>
                                <input type="text">
                                <div class="flex-nd">
                                    <span>Mật khẩu</span> <a href="">Quên mật khẩu</a>

                                </div>
                                <input type="text"><i><i class="fa-solid fa-eye"></i></i>

                                <div class="nd-dn">
                                    <button>Đăng nhập</button><span>Bạn đã có tài khản chưa? <a href="">Đăng
                                            kí</a></span>
                                </div>
                                <div class="fb-gg">
                                    <p>Hoặc đăng nhập bằng</p><br>
                                    <a style="margin-left: 40px;" href=""><i class="fa-brands fa-facebook"></i>
                                        Facebook</a>
                                    <a href=""><i class="fa-brands fa-google"></i> Google</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="padding: unset;"><a class="dangki" href="">Đăng kí</a></li>
                </ul>
            </div>
        </div>

        <!-- nav-2 -->
        <div class="nav-2-index">
            <ul class="containerr">
                <li>
                    <div class="menu-con1">
                        <button><a href="">Vận chuyển</a><i class="fa-solid fa-caret-down"></i></button>
                        <div class="nd-mn1">
                            <i class="fa-solid fa-car-side"></i> Cho thuê ô tô <br>
                            <i class="fa-solid fa-bus"></i> Xe đưa đón <br>
                            <i class="fa-solid fa-business-time"></i> Chuyển đồ
                        </div>
                    </div>
                </li>
                <li>
                    <div class="menu-con2">
                        <button><a href="">Chỗ ở</a><i class="fa-solid fa-caret-down"></i></button>
                        <div class="nd-mn2">
                            <i style="color: #0770cd;" class="fa-sharp fa-solid fa-gopuram"></i> Ở Hà Nội <br>
                            <i style="color: #0770cd;" class="fa-solid fa-bridge"></i> Ở TP.HCM
                        </div>
                    </div>
                </li>
                <li>
                    <div class="menu-con3">
                        <button><a href="">Hoạt động giải trí</a><i class="fa-solid fa-caret-down"></i></button>
                        <div class="nd-mn3">
                            <i style="color: #ff6d70;" class="fa-solid fa-people-group"></i> Hoạt động nhóm <br>
                            <i style="color: #0770cd;" class="fa-solid fa-water-ladder"></i> Bể bơi <br>
                            <i class="fa-solid fa-hippo"></i> Chăm sóc thú cưng
                        </div>
                    </div>
                </li>
                <li>
                    <div class="menu-con4">
                        <button> <a href="<?= SITE_URL . "?chi-tiet" ?>">sản Phẩm Bổ Sung</a><i class="fa-solid fa-caret-down"></i></button>
                        <button> <a href="<?= SITE_URL . "?cart" ?>">sản Phẩm Bổ Sung</a><i class="fa-solid fa-caret-down"></i></button>
                        <button> <a href="<?= SITE_URL . "?tin-tuc" ?>">sản Phẩm Bổ Sung</a><i class="fa-solid fa-caret-down"></i></button>
                        <div class="nd-mn4">
                            <i style="color: rgb(208, 148, 70);" class="fa-solid fa-coins"></i> Điểm thưởng của tôi <br>
                            <i style="color: red;" class="fa-solid fa-gift"></i> Đổi quà tặng
                        </div>
                    </div>
                </li>
            </ul>

        </div>
        <!-- banenr -->
        <div class="banner">
            <div class="image containerr">
                <img src="../layout/assets/img/banner/b1.webp" alt="">

                <img src="../layout/assets/img/banner/b2.webp" alt="">

                <img src="../layout/assets/img/banner/b3.webp" alt="">

                <img src="../layout/assets/img/banner/b4.webp" alt="">

                <img src="../layout/assets/img/banner/b5.webp" alt="">

            </div>

            <div class="circle-banner-idx containerr">
                <a href=""><i style="color: #ff6d70;" class="fa-solid fa-circle"></i></a>
                <a href=""><i class="fa-solid fa-circle"></i></a>
                <a href=""><i class="fa-solid fa-circle"></i></a>

            </div>
        </div>
        
<!--  -->
<main>
 <?php include_once $VIEW_NAME ?>
<main>
<!-- foodted -->
<div class="footer">
            <div class="ft-0">
                <div class="ft-1">
                    <img src="../layout/assets/img/logo/logo2.svg" alt="">
                    <div class="grid-1-ft">
                        <img src="../layout/assets/img/ft/1.webp" alt="">
                        <img src="../layout/assets/img/ft/4.webp" alt="">
                        <img src="../layout/assets/img/ft/5.webp" alt="">
                        <img src="../layout/assets/img/ft/4.webp" alt="">
                        <img src="../layout/assets/img/ft/5.webp" alt="">
                        <img src="../layout/assets/img/ft/6.webp" alt="">
                    </div>
                    <div class="doitac">
                        <i class="fa-solid fa-handshake"></i>Hợp tác với StayyInn
                    </div>
                    <h2 class="h2">Đối tác thanh toán</h2>
                    <div class="grid-2-ft">
                        <img src="../layout/assets/img/ft/10.webp" alt="">
                        <img src="../layout/assets/img/ft/11.webp" alt="">
                        <img src="../layout/assets/img/ft/12.webp" alt="">
                        <img src="../layout/assets/img/ft/13.webp" alt="">
                        <img src="../layout/assets/img/ft/14.webp" alt="">
                        <img src="../layout/assets/img/ft/15.webp" alt="">
                        <img src="../layout/assets/img/ft/16.webp" alt="">
                        <img src="../layout/assets/img/ft/17.webp" alt="">
                        <img src="../layout/assets/img/ft/18.webp" alt="">
                        <img src="../layout/assets/img/ft/19.webp" alt="">
                        <img src="../layout/assets/img/ft/20.webp" alt="">
                        <img src="../layout/assets/img/ft/21.webp" alt="">
                        <img src="../layout/assets/img/ft/10.webp" alt="">
                        <img src="../layout/assets/img/ft/11.webp" alt="">
                        <img src="../layout/assets/img/ft/12.webp" alt="">
                        <img src="../layout/assets/img/ft/13.webp" alt="">
                    </div>
                </div>
                <div class="ft-2">
                    <h2>Về StayyInn</h2>
                    Cách đặt chỗ <br>
                    Liên hệ chúng tôi <br>
                    Trợ giúp <br>
                    Tuyển dụng <br>
                    Về chúng tôi <br>
                    <h2>Theo dõi chúng tôi </h2>
                    Twitter <br>
                    Facebook <br>
                    Instagram <br>
                    Youtube <br>
                </div>
                <div class="ft-3">
                    <h2>Sản phẩm</h2>
                    Vé máy bay <br>
                    Khách sạn <br>
                    Combo tiết kiệm <br>
                    Xperience <br>
                    Car Rental <br>
                    Biệt thự <br>
                    Căn hộ <br>
                    Đưa đón sân bay <br>
                </div>
                <div class="ft-4">
                    <h2>Khác</h2>
                    Traveloka Affiliate <br>
                    Traveloka Blog <br>
                    Chính sách quyền riêng tư <br>
                    Điều khoản & Điều kiện <br>
                    Quy chế hoạt động <br>
                    Đăng ký nơi nghỉ của bạn <br>
                    Đăng ký doanh nghiệp hoạt động du lịch của bạn <br>
                    Khu vực báo chí <br><br>
                    <h2>Tải ứng dụng trên</h2>
                    <img src="../layout/assets/img/logo/gg.svg" alt="">
                    <img src="../layout/assets/img/logo/ap.svg" alt="">
                </div>
            </div>
        </div>

</div>
    <script src="../layout/assets/js/main.js"></script>
</body>

</html>