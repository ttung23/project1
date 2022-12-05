<main class="containerr">
    <!-- chinhsuacarrt -->
    <form action="index.php?cart" method="post">
        <input type="hidden" name="total_amount" value="<?php echo $total_amount ?>">
        <div class="main">
            <div class="side">
                <div class="booking-detail">
                    <p class="chi-tiet-dat-phong text-[16px] tieu-de font-bold">
                        Chi tiết đặt phòng của bạn
                    </p>

                    <div class="date">
                        <div class="checkin pr-4">
                            <div class="font-medium mb-1 text-[14px]">Nhận phòng</div>
                            <div class="checkin-date">
                                <span class="block font-bold text-[14px]"><input
                                        value="<?= $_SESSION['checkin'] ?? ""  ?>" type="date" name="check_in"></span>
                                <span class="text-[#6b6b6b] text-[12px]">12h - 00h</span>
                            </div>
                        </div>
                        <div class="border-l-[1px] bl-[#ccc] "></div>
                        <div class="checkout pl-4">
                            <div class="font-medium mb-1 text-[14px]">Trả phòng</div>

                            <div class="checkout-date">
                                <span class="block font-bold text-[14px]"><input type="date"
                                        value="<?= $_SESSION['checkout'] ?? "" ?>" name="check_out"></span>
                                <span class="text-[#6b6b6b] text-[12px]">00h - 12h</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="checkin pr-4">
                            <div class="font-medium mb-1 text-[14px]">số lượng người</div>

                            <div class="checkin-date">
                                <span class="block font-bold text-[14px]"><input type="number" name="quantity" min="1"
                                        max="" value="1"></span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 time">
                        <div class="checkin pr-4">
                            <div class="font-medium text-[14px]">Tổng thời gian lưu trú:</div>

                            <div class="checkin-date inline-block">
                                <span class="block font-bold text-[14px]"><?= $_SESSION['$tongnd'] ?? 0 ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tomtat">
                    <p class="chi-tiet-dat-phong text-[16px] font-bold">
                        Tóm tắt giá
                    </p>
                    <?php
                    if (isset($_SESSION['cart']) && (is_array($_SESSION['cart']))) {
                        for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                            if ($_SESSION['cart'][$i][17] == $_SESSION['user']->user_id) {
                    ?>
                    <div class="tomtat-detail">
                        <div>
                            Phòng <?php echo $_SESSION['cart'][$i][1] ?>
                        </div>
                        <div>
                            VND <?php echo $_SESSION['cart'][$i][5] ?>
                        </div>
                    </div>
                    <?php
                            }
                        }
                    }
                    ?>
                    <div class="font-bold text-[14px] mb-2">
                        <div>Không bao gồm phụ phí:</div>
                    </div>
                    <?php
                    if (isset($_SESSION['cart']) && (is_array($_SESSION['cart']))) {
                        for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                            if ($_SESSION['cart'][$i][17] == $_SESSION['user']->user_id) {
                    ?>
                    <div class="tomtat-detail">
                        <div>
                            Phòng <?php echo $_SESSION['cart'][$i][15] ?>
                        </div>
                        <div>
                            VND <?php echo $_SESSION['cart'][$i][16] ?>
                        </div>
                    </div>
                    <?php
                            }
                        }
                    }
                    ?>
                    <div class="tomtat-detail">
                    </div>
                </div>
                <div class="tomtat">
                    <div class="font-bold text-[14px] mb-2">
                        <div>Tổng Tiền Phải Trả</div>
                    </div>
                    <div class="tomtat-detail">
                        <div>
                        </div>
                        <div>
                            VND <?php echo $tt ?>
                        </div>
                    </div>
                    <div class="tomtat-detail">
                    </div>
                </div>
            </div>
            <div class="content">
                <?php
                if (isset($_SESSION['cart']) && (is_array($_SESSION['cart']))) {
                    for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                        if ($_SESSION['cart'][$i][17] == $_SESSION['user']->user_id) {
                ?>
                <form action="index.php?cart" method="post">
                    <input type="hidden" name="id" value="<?php echo $_SESSION['cart'][$i][0] ?>">
                    <div class="room-choosed">
                        <div class="h-[160px] w-[160px]">
                            <img class="max-w-[90%] max-h-[90%]"
                                src="../layout/assets/img/product/<?php echo $_SESSION['cart'][$i][2] ?>" alt="">
                        </div>
                        <div>
                            <div class="font-bold text-[17px] text-[]">Khách sạn StayyInn</div>
                            <div class="room-name text-[#3ba6e3] text-[20px] font-bold">
                                <?php echo $_SESSION['cart'][$i][1] ?>
                            </div>
                            <div class="descrip">
                                <div class="max-w-[180px]">
                                    <i class="fa-solid fa-bed"></i>
                                    <?php echo $_SESSION['cart'][$i][3] ?>
                                </div>
                                <div>
                                    <i class="fa-regular fa-user-group"></i>
                                    Phòng 2 khách
                                </div>
                            </div>
                            <div class="rate">
                                <div class="w-[24px] h-[24px]">8.3</div>
                                <div>Tuyệt vời</div>
                                <div>
                                    <?php echo $_SESSION['cart'][$i][6] ?> đánh giá
                                </div>
                            </div>
                        </div>
                        <div class="price-pay ml-[144px]">
                            <div class="text-[18px] font-bold text-[#3ba6e3]">
                                <?php echo number_format($_SESSION['cart'][$i][5]) ?>
                            </div>
                            <div class="text-[12px] text-[rgba(104,113,118,1.00)] text-right">
                                / phòng / đêm
                            </div>
                            <div class="text-[12px] text-[#3ba6e3] font-semibold text-right">
                                Giá cuối cùng
                            </div>
                            <div class="delete-room">
                                <a class="rounded-md my-2 px-16 py-2 border-blue-500 text-light"
                                    href="index.php?cart&&delid=<?php echo $i ?>">Xóa</a>
                            </div>
                        </div>
                    </div>
                </form>
                <?php
                        }
                    }
                }
                ?>
                <div class="information bg-[#ebf3ff]">
                    <div class="head">
                        <h2 class="text-[20px] font-bold">
                            Nhập thông tin chi tiết của bạn
                        </h2>

                        <div class="flex gap-1 bg-white p-1 rounded">
                            <img src="../layout/assets/img/users/<?php echo $_SESSION['user']->images ?>" alt="">
                            <span><?php echo $_SESSION['user']->name ?></span>
                        </div>
                    </div>

                    <div class="di-cong-tac py-4">
                        <div class="text-[14px] font-bold">
                            Bạn sắp đi công tác ư?
                        </div>

                        <div class="true-false">
                            <div class="">
                                <input type="radio" name="congtac" id="">
                                <span class="">Đúng</span>
                            </div>

                            <div>
                                <input type="radio" name="congtac" id="">
                                <span>Sai</span>
                            </div>
                        </div>
                    </div>

                    <div class="input">
                        <div class="w-[25%] pt-[16px]">
                            <label for="surname" class="font-bold text-[14px]">Họ</label>
                            <input class="w-[100%] border-input p-[5px]" type="text" placeholder="Họ của bạn..." name=""
                                id="surname">
                        </div>
                        <div class="w-[10%]"></div>
                        <div class="w-[25%] pt-[16px]">
                            <label for="name" class="font-bold text-[14px]">Tên</label>
                            <input class="w-[100%] border-input p-[5px]" name="name" type="text"
                                placeholder="Tên của bạn..." name="" id="name">
                        </div>

                        <div class="w-[60%] pt-[16px]">
                            <label for="email" class="font-bold text-[14px]">Email</label>
                            <input name="email" class="w-[100%] border-input p-[5px]" type="text"
                                placeholder="Email của bạn..." name="" id="email">
                        </div>

                        <div class="w-[60%] pt-[16px]">
                            <label for="address" class="font-bold text-[14px]">Điện Thoại Của Bạn</label>
                            <input class="w-[100%] border-input p-[5px]" type="text" placeholder="" name="phone"
                                id="address">
                        </div>
                        <div class="w-[60%] pt-[16px]">
                            <label for="address" class="font-bold text-[14px]">Tin Nhắn Của Bạn</label>
                            <input class="w-[100%] border-input p-[5px]" type="text" placeholder="" name="message"
                                id="address">
                        </div>
                    </div>

                    <div class="mt-4">
                        <div class="text-[14px] font-bold mb-2">Bạn đặt phòng cho ai?</div>
                        <div class="mb-1">
                            <input type="radio" name="ai-dat-phong" id="">
                            <span>Tôi là khách lưu trú chính</span>
                        </div>

                        <div>
                            <input type="radio" name="ai-dat-phong" id="">
                            <span>Đặt phòng này là cho người khác</span>
                        </div>
                    </div>
                </div>

                <div class="service bg-[#ebf3ff]">
                    <h2 class="text-[20px] font-bold">
                        Dịch vụ
                    </h2>

                    <div class="my-4">
                        <div class="my-4">
                            <div class="font-medium mb-2 text-[14px]">Dịch vụ đang có</div>

                            <div class="dichvu-dangco">
                                <?php foreach ($service_room as $key => $value) : ?>
                                <a href="facebook.com" class="relative">
                                    <img class="inline-block max-w-[16px] max-h-[16px]"
                                        src="assets/img/icon/svg_diachi.svg" alt="">
                                    <span class="text-[12px]"><?php echo $value->name ?></span>
                                    <a href="">
                                        <i id="icon" class="fa-light fa-xmark"></i>
                                    </a>
                                </a>
                                <?php endforeach ?>

                            </div>
                        </div>

                        <div class="my-4">
                            <div class="font-medium mb-2 text-[14px]">Dịch vụ muốn có</div>

                            <div class="dichvu-muonco">
                                <?php foreach ($service as $key => $value) : ?>
                                <a href="facebook.com" class="relative">
                                    <img class="inline-block max-w-[16px] max-h-[16px]"
                                        src="assets/img/icon/svg_diachi.svg" alt="">
                                    <span class="text-[12px]"><?php echo $value->name ?></span>
                                    <a href="">
                                        <i id="icon" class="fa-light fa-xmark"></i>
                                    </a>
                                </a>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pay text-right">
                    <a style="color: #fff;" type="submit" name="addbookingonlien" data-modal-toggle="popup-modal1">Thanh
                        Toán Online</a>
                    <a style="color: #fff;" type="submit" name="addbooking" data-modal-toggle="popup-modal">Thanh toán
                        ngay</a>
                </div>
                <!--Popup xác nhận-->
                <div id="popup-modal" tabindex="-1"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 md:inset-0 h-modal md:h-full">
                    <div class="relative w-full max-w-md h-full md:h-auto">
                        <!--Nền-->
                        <div class="relative bg-white rounded-lg shadow dark:bg-white">
                            <!--Dấu X-->
                            <button type="button"
                                class="absolute top-3 right-2.5 text-white-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                data-modal-toggle="popup-modal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-6 text-center">
                                <!--Chấm than-->
                                <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-700 dark:text-gray-500"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <!--Nội dung-->
                                <div class="text-center text-2xl py-2 text-green-500 font-bold">THANH TOÁN THÀNH CÔNG
                                </div>
                                <div class="booking-detail">
                                    <p class="chi-tiet-dat-phong text-[16px] tieu-de font-bold">
                                        Chi tiết đặt phòng của bạn
                                    </p>

                                    <div class="date">
                                        <div class="checkin pr-4">
                                            <div class="font-medium mb-1 text-[14px]">Nhận phòng</div>

                                            <div class="checkin-date">
                                                <span class="block font-bold text-[14px]"><input
                                                        value="<?= $_SESSION['checkin'] ?? ""  ?>" type="date"
                                                        name="check_in"></span>
                                                <span class="text-[#6b6b6b] text-[12px]">12h - 00h</span>
                                            </div>
                                        </div>

                                        <div class="border-l-[1px] bl-[#ccc] "></div>

                                        <div class="checkout pl-4">
                                            <div class="font-medium mb-1 text-[14px]">Trả phòng</div>

                                            <div class="checkout-date">
                                                <span class="block font-bold text-[14px]"><input type="date"
                                                        value="<?= $_SESSION['checkout'] ?? "" ?>"
                                                        name="check_out"></span>
                                                <span class="text-[#6b6b6b] text-[12px]">00h - 12h</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 time">
                                        <div class="checkin pr-4">
                                            <div class="font-medium text-[14px]">Tổng thời gian lưu trú:</div>

                                            <div class="checkin-date inline-block">
                                                <span
                                                    class="block font-bold text-[14px]"><?= $_SESSION['$tongnd'] ?? 0 ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-[16px] text-gray-500 pt-2">
                                    Vui lòng chờ xác nhận
                                </p>
                                <button type="submit" onclick="confirm('bạn có chắc chắn đặt hàng không')"
                                    name="addbooking" data-modal-toggle="popup-modal">Xác Nhận</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End popup-->
                <div id="popup-modal1" tabindex="-1"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 md:inset-0 h-modal md:h-full">
                    <!-- thanh toán bằng qr-code -->
                    <div class="thanhtoan_tc" style="background-color:white">
                        <div class="flex_tt">
                            <img src="../layout/assets/img/icon/images.png" alt="">
                            <h2>Stayyin</h2>
                        </div>
                        <div class="tt_qr">
                            <div class="thanhtoan_qr_code">
                                <div class="qr_code">
                                    <span style="margin-left:120px;">Thanh toán phòng bằng Mobi backing</span>
                                    <img style="margin-left:140px;" src="../layout/assets/img/icon/maqrkalite.jpg"
                                        alt="">
                                    <span style="margin-left: 190px; color: #0770cd; font-size: 18px;">Hướng dẫn thanh
                                        toán ?</span>
                                </div>
                                <h4>Chọn ngân hàng</h4>
                                <div class="nganhang">

                                    <img src="../layout/assets/img/thanhtoan/t7.webp" alt="">
                                    <img src="../layout/assets/img/thanhtoan/t9.webp" alt="">
                                    <img src="../layout/assets/img/thanhtoan/t5.webp" alt="">
                                    <img src="../layout/assets/img/thanhtoan/t4.webp" alt="">
                                    <img src="../layout/assets/img/thanhtoan/t5.webp" alt="">
                                    <img src="../layout/assets/img/thanhtoan/t6.webp" alt="">
                                    <img src="../layout/assets/img/thanhtoan/t7.webp" alt="">
                                    <img src="../layout/assets/img/thanhtoan/t8.webp" alt="">
                                    <img src="../layout/assets/img/thanhtoan/t9.webp" alt="">
                                    <img src="../layout/assets/img/thanhtoan/t10.webp" alt="">
                                    <img src="../layout/assets/img/thanhtoan/t11.webp" alt="">
                                    <img src="../layout/assets/img/thanhtoan/t4.webp" alt="">
                                </div>
                            </div>
                            <div class="thongtin_phong">
                                <h3>Thông Tin Phòng </h3>
                                <span>Số phòng :</span><br>
                                <span>Loại phòng :</span><br>
                                <span>Số người :</span> <br>
                                <span>Ảnh phòng</span><br> <br><img style="width: 590px;"
                                    src="../layout/assets/img/product/tg2.jpg" alt=""><br>
                                <span>Số tiền phải thanh toán: </span><span style="color: red;"><?php echo $tt ?></span>
                            </div>
                        </div>

                    </div>

                    <!--End popup-->
                </div>
    </form>

    </div>
</main>