<div class="nav-index containerr">
    <div class="nav-left">
        <i class="fa-solid fa-bars"></i>
        <a href=" <?= SITE_URL  ?>"><img class="max-w-[200px] ml-[-30px]" src="../layout/assets/img/logo/logo_ngang.png" alt=""></a>

    </div>
    <div class="nav-right">
        <ul>
            <li><a href=""><i class="fa-solid fa-download"></i></i> Tải ứng dụng <i><i class="fa-solid fa-chevron-down"></i></i></a></li>
            <li><a href=""><i class="fa-solid fa-handshake"></i> Hợp tác với chúng tôi</a></li>
            <li><a href=""><i class="fa-solid fa-clipboard-check"></i> Đã lưu</a></li>
            <li><a href=""><i class="fa-solid fa-list-check"></i> Đặt chỗ của tôi </a></li>
            <li>
                <div class="dropdown">
                    <button type="submit" id="money" class="nut_dropdown">
                        <!-- onclick="hamDropdown()" -->
                        <img src="../layout/assets/img/logo/co.png" alt="">VND<i style="color:black; font-size: 11px; padding-left: 4px;padding-top: 5px;" class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="noidung_dropdown" id="content_money">
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
    <?php if (isset($_SESSION['user'])) { ?>
        <li class="flex items-center">
            <div class="anh-dangnhap" onclick="drop_info_user()">
                <div class="flex-anh-dn items-center">
                    <img class="anh-user" src="../layout/assets/img/users/<?= $_SESSION['user']->images ?>" width="50px" alt=""> <span><?= $_SESSION['user']->name ?></span><i style="color:black; font-size: 11px; padding-left: 4px" class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="noidung-anh-dangnhap" id="noi_dung_info">
                    <h3>Tài khoản</h3>
                    <div class="a"><i class="fa-regular fa-user"></i> <span><a href="<?= SITE_URL . "?info-user&id=" . $_SESSION['user']->user_id ?>">thông tin người dùng</a></span><br></div>
                    <div class="a"><i class="fa-solid fa-money-bill"></i> <span>Điểm thưởng của tôi</span><br></div>
                    <div class="a"><i class="fa-solid fa-person-booth"></i> <span>Dịch vụ khách sạn</span> <br></div>
                    <div class="a"><i class="fa-regular fa-bell"></i> <span>Thông báo của bạn</span> <br></div>
                    <div class="a"> <i class="fa-regular fa-credit-card"></i> <span>Thẻ của tôi</span> <br></div>
                    <div class="a"> <i class="fa-regular fa-envelope"></i> <span>Khuyến mãi</span> <br></div>
                    <div class="a"> <a href="index.php?action=logout"><i class="fa-solid fa-right-from-bracket"></i> <span>Đăng xuất</span></a><br></div>

                </div>
            </div>
        </li>
    <?php } elseif (isset($_SESSION['admin'])) { ?>
        <li>
            <div class="anh-dangnhap" onclick="drop_info_user()">
                <div class="flex-anh-dn">
                    <img class="anh-user" src="../layout/assets/img/admins/<?= $_SESSION['admin']->thumbnail ?>" width="50px" alt=""> <span><?= $_SESSION['admin']->name ?></span><i style="color:black; font-size: 11px; padding-left: 4px;padding-top: 5px;" class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="noidung-anh-dangnhap" id="noi_dung_info">
                    <h3>Tài khoản</h3>
                    <div class="a"><i class="fa-regular fa-user"></i> <span><a href="<?= SITE_URL . "?info-user&id=" . $_SESSION['admin']->admin_id ?>">thông tin người dùng</a></span><br></div>
                    <div class="a"><i class="fa-regular fa-user"></i> <span><a href="../admin/index.php">trang quản trị</a></span><br></div>

                    <div class="a"><i class="fa-solid fa-money-bill"></i> <span>Điểm thưởng của tôi</span><br></div>
                    <div class="a"><i class="fa-solid fa-person-booth"></i> <span>Dịch vụ khách sạn</span> <br>
                    </div>
                    <div class="a"><i class="fa-regular fa-bell"></i> <span>Thông báo của bạn</span> <br></div>
                    <div class="a"> <i class="fa-regular fa-credit-card"></i> <span>Thẻ của tôi</span> <br></div>
                    <div class="a"> <i class="fa-regular fa-envelope"></i> <span>Khuyến mãi</span> <br></div>
                    <div class="a"> <a href="index.php?action=logout"><i class="fa-solid fa-right-from-bracket"></i>
                            <span>Đăng xuất</span></a><br></div>
                </div>
            </div>
        </li>
    <?php } else { ?>
        <li>
            <div class="dropdown-2">
                <button type="" onclick="drop_menu()" name="login">
                    <i class="fa-solid fa-user"></i></i> Đăng nhập
                    <i style="color:black; font-size: 12px;" class="fa-solid fa-chevron-down"></i></a>
                </button>
                <form action="index.php?" method="post">
                    <div class="noidung-index" id="login">
                        <h2>Đăng nhập tài khoản</h2>
                        <span>Email hoặc số di động</span>
                        <input type="text" name="user">
                        <div class="flex-nd">
                            <span>Mật khẩu</span> <a href="index.php?forgot">Quên mật khẩu</a>

                            </div>
                            <input type="text" name="password" id="ipnPassword" autocomplete="off">
                            <i><i class="fa-regular fa-eye" onclick="changeTypePassword()"></i></i>
                            
                            
                            <div class="nd-dn">
                                <button type="submit" name="login">Đăng nhập</button><span>Bạn đã có tài khản chưa? <a
                                        href="index.php?register">Đăng
                                        kí</a> <a class="dn-tqt" href="<?= SITE_URL ?>?login_admin">Đăng nhập quản trị</a></span>
                            </div>

                        <div class="fb-gg">
                            <p>Hoặc đăng nhập bằng</p><br>
                            <a style="margin-left: 40px;" href=""><i class="fa-brands fa-facebook"></i>
                                Facebook</a>
                            <a href=""><i class="fa-brands fa-google"></i> Google</a>
                        </div>
                    </div>
                </form>
            </div>
        </li>
        <li style="padding: unset;"><a class="dangki" href="index.php?sign_up">Đăng kí</a></li>
    <?php } ?>
        </ul>
        </div>
</div>

<!-- nav-2 -->
<div class="nav-2-index">
    <ul class="containerr">
        <li>
            <div class="menu-con4">
                <button style="margin-right: 30px;"> <a href="<?= SITE_URL . "?cart" ?>">Giỏ Hàng</a><i class="fa-solid fa-caret-down"></i></button>
                <button style="margin-right: 30px;"> <a href="<?= SITE_URL . "?tin-tuc" ?>">Tin Tức</a><i class="fa-solid fa-caret-down"></i></button>
                <button style="margin-right: 30px;"> <a href="<?= SITE_URL . "?list-room" ?>">Danh sách phòng</a><i class="fa-solid fa-caret-down"></i></button>

            </div>
        </li>
    </ul>

</div>
<script>
        function changeTypePassword(){
            document.getElementById('ipnPassword').type = document.getElementById('ipnPassword').type == 'text' ? 'password' : 'text';
        }
</script>
