
        <div class="nav-index containerr">
            <div class="nav-left">
                <i class="fa-solid fa-bars"></i>
                <a href=" <?= SITE_URL  ?>"><img src="../layout/assets/img/logo/30bf6c528078ba28d34bc3e37d124bdb.svg" alt=""></a>
                
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
                            <form action="index.php?" method="post">
                            <button type="submit" name="login">
                                     <i class="fa-solid fa-user"></i></i> Đăng nhập
                                    <i style="color:black; font-size: 12px;" class="fa-solid fa-chevron-down"></i></a>
                            </button>
                            <div class="noidung-index">
                                <h2>Đăng nhập tài khoản</h2>
                                <span>Email hoặc số di động</span>
                                <input type="text" name="user">
                                <div class="flex-nd">
                                    <span>Mật khẩu</span> <a href="index.php?forgot">Quên mật khẩu</a>

                                </div>
                                <input type="text" name="password"><i><i class="fa-solid fa-eye"></i></i>

                                <div class="nd-dn">
                                    <button type="submit" name="login">Đăng nhập</button><span>Bạn đã có tài khản chưa? <a href="index.php?register">Đăng
                                            kí</a></span>
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
                            <a href="?action=logout">Đăng Xuất</a>
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
                        <button> <a href="<?= SITE_URL . "?product-detail" ?>">Chi Tiết Sản Phẩm</a><i class="fa-solid fa-caret-down"></i></button>
                        <button> <a href="<?= SITE_URL . "?cart" ?>">Giỏ Hàng</a><i class="fa-solid fa-caret-down"></i></button>
                        <button> <a href="<?= SITE_URL . "?tin-tuc" ?>">Tin Tức</a><i class="fa-solid fa-caret-down"></i></button>
                        <button> <a href="<?= SITE_URL . "?list-room" ?>">List-product</a><i class="fa-solid fa-caret-down"></i></button>
                        
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
