<main class="containerr">
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
                                <span class="block font-bold text-[14px]"><input type="date" name="check_in"></span>
                                <span class="text-[#6b6b6b] text-[12px]">12h - 00h</span>
                            </div>
                        </div>
                        <div class="border-l-[1px] bl-[#ccc] "></div>
                        <div class="checkout pl-4">
                            <div class="font-medium mb-1 text-[14px]">Trả phòng</div>

                            <div class="checkout-date">
                                <span class="block font-bold text-[14px]"><input type="date" name="check_out"></span>
                                <span class="text-[#6b6b6b] text-[12px]">00h - 12h</span>
                            </div>
                        </div>
                    </div>
                    <div>
                    <div class="checkin pr-4">
                            <div class="font-medium mb-1 text-[14px]">số lượng người</div>

                            <div class="checkin-date">
                                <span class="block font-bold text-[14px]"><input type="number" name="quantity" min="1" max="" value=""></span>
                            </div>
                        </div>
</div>

                    <div class="mt-4 time">
                        <div class="checkin pr-4">
                            <div class="font-medium text-[14px]">Tổng thời gian lưu trú:</div>

                            <div class="checkin-date inline-block">
                                <span class="block font-bold text-[14px]">1 ngày</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tomtat">
                    <p class="chi-tiet-dat-phong text-[16px] font-bold">
                        Tóm tắt giá
                    </p>
                    <?php foreach ($_SESSION['addcart'] as $key => $value) : ?>
                        <div class="tomtat-detail">
                            <div>Phòng <?php echo $value['ten'] ?></div>
                            <div>VND <?php echo number_format($value['price']) ?></div>
                        </div>
                    <?php endforeach ?>
                    <div class="font-bold text-[14px] mb-2">
                        <div>Không bao gồm phụ phí:</div>
                    </div>
                    <?php foreach ($_SESSION['addcart'] as $key => $value) : ?>
                        <div class="tomtat-detail">
                            <div>
                                Phí <?php echo $value['namedichvu'] ?>
                            </div>
                            <div>
                                VND <?php echo $value['pricedichvu'] ?>
                            </div>
                        </div>
                    <?php endforeach ?>
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
                            VND <?php echo $total_amount ?>
                        </div>
                    </div>
                    <div class="tomtat-detail">
                    </div>
                </div>
            </div>
            <div class="content">
                <?php foreach ($_SESSION['addcart'] as $key => $value) : ?>
                    <form action="index.php?cart" method="post">
                        <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                        <div class="room-choosed">
                            <div class="h-[160px] w-[160px]">
                                <img class="max-w-[100%] max-h-[100%]" src="../layout/assets/img/product/<?php echo $value['thumbnail'] ?>" alt="">
                            </div>
                            <div>
                                <div class="text-[12px] text-[#6b6b6b]">Khách sạn StayyInn</div>
                                <div class="room-name text-[20px] font-bold"><?php echo $value['ten'] ?></div>
                                <div class="descrip">
                                    <div class="max-w-[180px]">
                                        <i class="fa-solid fa-bed"></i>
                                        <?php echo $value['des'] ?>
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
                                        <?php echo $value['star'] ?> đánh giá
                                    </div>
                                </div>
                            </div>
                            <div class="price-pay ml-[144px]">
                                <div class="text-[18px] font-bold text-[#3ba6e3]">
                                    <?php echo number_format($value['price']) ?>
                                </div>
                                <div class="text-[12px] text-[rgba(104,113,118,1.00)] text-right">
                                    / phòng / đêm
                                </div>
                                <div class="text-[12px] text-[#3ba6e3] font-semibold text-right">
                                    Giá cuối cùng
                                </div>
                                <div class="delete-room">
                                    <button class="rounded-md my-3 px-16 py-3 border-blue-500 text-light" type="submit" name="delete">Xóa</button>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php endforeach ?>
                <div class="information bg-[#ebf3ff]">
                    <div class="head">
                        <h2 class="text-[20px] font-bold">
                            Nhập thông tin chi tiết của bạn
                        </h2>

                        <div class="flex gap-1 bg-white p-1 rounded">
                            <!-- <img src="../layout/assets/img/logo/<?php echo $_SESSION['thumbnail'] ?>" alt="">
                            <span><?php echo $_SESSION['name'] ?></span> -->
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
                            <input class="w-[100%] border-input p-[5px]" type="text" placeholder="Họ của bạn..." name="" id="surname">
                        </div>
                        <div class="w-[10%]"></div>
                        <div class="w-[25%] pt-[16px]">
                            <label for="name" class="font-bold text-[14px]">Tên</label>
                            <input class="w-[100%] border-input p-[5px]" name="name" type="text" placeholder="Tên của bạn..." name="" id="name">
                        </div>

                        <div class="w-[60%] pt-[16px]">
                            <label for="email" class="font-bold text-[14px]">Email</label>
                            <input name="email" class="w-[100%] border-input p-[5px]" type="text" placeholder="Email của bạn..." name="" id="email">
                        </div>

                        <div class="w-[60%] pt-[16px]">
                            <label for="address" class="font-bold text-[14px]">Điện Thoại Của Bạn</label>
                            <input class="w-[100%] border-input p-[5px]" type="text" placeholder="" name="phone" id="address">
                        </div>
                        <div class="w-[60%] pt-[16px]">
                            <label for="address" class="font-bold text-[14px]">Tin Nhắn Của Bạn</label>
                            <input class="w-[100%] border-input p-[5px]" type="text" placeholder="" name="message" id="address">
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
                                        <img class="inline-block max-w-[16px] max-h-[16px]" src="assets/img/icon/svg_diachi.svg" alt="">
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
                                        <img class="inline-block max-w-[16px] max-h-[16px]" src="assets/img/icon/svg_diachi.svg" alt="">
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
                    <button type="submit" onclick="confirm('bạn có chắc chắn đặt hàng không')" name="addbooking">Thanh toán ngay</button>
                </div>
            </div>
    </form>

    </div>
</main>