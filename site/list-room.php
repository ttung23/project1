<div class="bgc">
    <div class="contai-list-product containerr">
        <div class="left-l-pro">
            <div class="mony-l-pro">
                <div class="booking-detail">
                    <p class="chi-tiet-dat-phong text-[16px] tieu-de font-bold">
                        Chi tiết đặt phòng của bạn
                    </p>
                    <div class="date">
                        <div class="checkin pr-4">
                            <div class="font-medium mb-1 text-[14px]">Nhận phòng</div>
                            <div class="checkin-date">
                                <span class="block font-bold text-[14px]"><input value="<?= $_SESSION['checkin']  ?? $ngay  ?>" type="date" name="check_in" disabled></span>
                                <span class="text-[#6b6b6b] text-[12px]">12h - 00h</span>
                            </div>
                        </div>
                        <div class="border-l-[1px] bl-[#ccc] "></div>
                        <div class="checkout pl-4">
                            <div class="font-medium mb-1 text-[14px]">Trả phòng</div>
                            <div class="checkout-date">
                                <span class="block font-bold text-[14px]"><input type="date" value="<?= $_SESSION['checkout'] ?? $day ?>" name="check_out" disabled></span>
                                <span class="text-[#6b6b6b] text-[12px]">00h - 12h</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="checkin pr-4">
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
            </div>
            <div class="mony-l-pro">
                <div class="text-l-pro">
                    <h2>Sắp xếp theo kết quả</h2>
                    <a href="">Sắp xếp theo kết quả lựa chọn</a>
                </div>
                <form method="post" action="index.php?list-room">
                    <?php foreach ($loadroomprice as $key => $value) : ?>

                        <input type="radio" name="gender" value="<?= $value->max ?>" checked />
                        <span>Giá cao nhất</span>
                        <br />
                        <input type="radio" name="gender" value="<?= $value->min ?>" />
                        <span>Giá thấp nhất</span><br />
                        <input type="radio" name="gender" value="other" />
                        <span>Điểm đánh giá</span>
                        <br />
                        <input type="radio" name="gender" value="other" />
                        <span>Tất cả</span>
                    <?php endforeach ?>
            </div>

            <div class="convenient-l-pro">
                <div class="text-c">
                    <div class="ks-l-pro">
                        <h2>Loại phòng khách sạn</h2>
                        <?php foreach ($categoriesAll  as $key => $value) : ?>
                            <input type="radio" name="cate" value="<?= $value->categories_id ?>" checked />
                            <span><?= $value->name ?></span><br />
                        <?php endforeach ?>
                    </div>
                    <h2>Lọc theo kết quả</h2>
                    <button type="submit" name="loc">Hiển thị theo kết quả lọc :</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="right-l-pro">
            <div class="giamgia-r" style="margin:20px 0px 20px 0px">
                <span>StayInn/</span> <span style="">Nhận Phòng : <?php echo $_SESSION['checkin'] ?? $ngay ?></span> /
                <span> Trả Phòng : <?= $_SESSION['checkout'] ?? $day ?></span><br />
            </div>
            <div class="giamgia-r">
                <span>Giảm giá 11.11 độc quyền!</span><br />
                <span>Khách sạn giảm giá lên tới 50%! Đặt ngay!</span>
            </div>
            <div class="tim-r-pro">
                <input type="text" placeholder="Nhập phòng bạn muốn tìm kiếm" />
                <select name="tp" id="sampleSelect" class="tp" onchange="location = this.value;">
                    <option class="hidden" value="index.php?list-room&id=0&iddm=0">Tất Cả</option></a>
                    <option value="index.php?list-room&id=0&iddm=0">Tất Cả</option></a>
                    <?php foreach ($categoriesAll as $key => $value) : ?>
                        <option value="index.php?list-room&id=<?php echo $value->categories_id; ?>&iddm=<?php echo $value->categories_id; ?>">
                            <?php echo $value->name; ?></option></a>
                    <?php endforeach ?>
                </select>
            </div>
            <?php foreach ($logroom as $key => $value) : ?>
                <div class="room-l-pro">
                    <div class="img-l-pro">
                        <div class="nd-img-room">
                            <img src="../layout/assets/img/product/<?php echo $value->thumbnail ?>" alt="" />
                            <div class="nd-flex-room">
                                <h2> ( Phòng <?php echo $value->name ?> )<span>Stayyin - <?php echo $value->tendt ?> </span>
                                </h2>
                                <a href="">Khách sạn</a><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> <br />
                                <i style="padding-top: 13px; padding-right: 7px; color: #959ca1" class="fa-solid fa-location-dot"></i><span style="color: #959ca1">Hà nội</span><br />
                                <i style="color: #1ba0e2; padding-top: 9px" class="fa-solid fa-heart"></i>
                                <span style="color: #1ba0e2">ấn tượng - 8.9</span> (257)
                                <br /><br />
                                <a style="background-color: #eac2b0; color: #616669" href=""><i style="color: #f3545c" class="fa-solid fa-gift"></i> Quà
                                    tặng cho thành viên mới</a>
                            </div>
                        </div>
                        <div class="gia-room">
                            <i style="color: #7ed2a8" class="fa-sharp fa-solid fa-building-user"></i>
                            <span style="color: #7ed2a8">Đặt phòng đển nhận ưu đãi khủng
                                11.11</span><br /><br /><br /><br />
                            <span style="
                    color: #ff5e1f;
                    font-weight: bold;
                    font-size: 18px;
                    margin-top: 50px;
                  ">
                                <?php echo number_format($value->price,0,",",".") ?> đ
                            </span>
                            <br />
                            <br />

                            <a href="<?= SITE_URL . "?product-detail&id=$value->room_id&iddm=$value->id_category_room" ?>">Xem Chi Tiết</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
            <!--  -->
            <?php foreach ($selectfind as $key => $value) : ?>
                <div class="room-l-pro">
                    <div class="img-l-pro">
                        <div class="nd-img-room">
                            <img src="../layout/assets/img/product/<?php echo $value->thumbnail ?>" alt="" />
                            <div class="nd-flex-room">
                                <h2> ( Phòng <?php echo $value->name ?> )<span>Stayyin - <?php echo $value->tendt ?> </span>
                                </h2>
                                <a href="">Khách sạn</a><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> <br />
                                <i style="padding-top: 13px; padding-right: 7px; color: #959ca1" class="fa-solid fa-location-dot"></i><span style="color: #959ca1">Hà nội</span><br />
                                <i style="color: #1ba0e2; padding-top: 9px" class="fa-solid fa-heart"></i>
                                <span style="color: #1ba0e2">ấn tượng - 8.9</span> (257)
                                <br /><br />
                                <a style="background-color: #eac2b0; color: #616669" href=""><i style="color: #f3545c" class="fa-solid fa-gift"></i> Quà
                                    tặng cho thành viên mới</a>
                            </div>
                        </div>
                        <div class="gia-room">
                            <i style="color: #7ed2a8" class="fa-sharp fa-solid fa-building-user"></i>
                            <span style="color: #7ed2a8">Đặt phòng đển nhận ưu đãi khủng
                                11.11</span><br /><br /><br /><br />
                            <span style="
                    color: #ff5e1f;
                    font-weight: bold;
                    font-size: 18px;
                    margin-top: 50px;
                  ">
                                <?php echo number_format($value->price,0,",",".") ?> đ
                            </span>
                            <br />
                            <br />
                            <a href="<?= SITE_URL . "?product-detail&id=$value->room_id&iddm=$value->id_category_room" ?>">Xem Chi Tiết</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
            <div class="banner-l-pro">
                <img src="assets/img/lis-pro/sp0.webp" alt="" />
                <div class="text-bn">
                    <span style="">Muốn nhận mã ưu đãi và giá phòng thấp nhất?</span><br />
                    <span style="color: #be90c8">Đặt ngay trên ứng dụng Traveloka, giá trung thực không phí
                        ẩn</span><br />
                    <a style="color: #1ba0e2" href="">Tải ngay ứng dụng </a>
                </div>
            </div>
            <!--  -->
            <?php foreach ($roomcategori as $key => $value) : ?>
                <div class="room-l-pro">
                    <div class="img-l-pro">
                        <div class="nd-img-room">
                            <img src="../layout/assets/img/product/<?php echo $value->thumbnail ?>" alt="" />
                            <div class="nd-flex-room">
                                <h2> ( Phòng <?php echo $value->name ?> )<span></span></h2>
                                <a href="">Khách sạn</a><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> <br />
                                <i style="padding-top: 13px; padding-right: 7px; color: #959ca1" class="fa-solid fa-location-dot"></i><span style="color: #959ca1">Hà nội</span><br />
                                <i style="color: #1ba0e2; padding-top: 9px" class="fa-solid fa-heart"></i>
                                <span style="color: #1ba0e2">ấn tượng - 8.9</span> (257)
                                <br /><br />
                                <a style="background-color: #eac2b0; color: #616669" href=""><i style="color: #f3545c" class="fa-solid fa-gift"></i> Quà
                                    tặng cho thành viên mới</a>
                            </div>
                        </div>
                        <div class="gia-room">
                            <i style="color: #7ed2a8" class="fa-sharp fa-solid fa-building-user"></i>
                            <span style="color: #7ed2a8">Đặt phòng đển nhận ưu đãi khủng
                                11.11</span><br /><br /><br /><br />
                            <span style="
                    color: #ff5e1f;
                    font-weight: bold;
                    font-size: 18px;
                    margin-top: 50px;
                  ">
                                <?php echo number_format($value->price,0,",",".") ?> đ
                            </span>
                            <br />
                            <br />

                            <a href="<?= SITE_URL . "?product-detail&id=$value->room_id&iddm=$value->id_category_room" ?>">Xem Chi Tiết</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

        </div>
    </div>
</div>