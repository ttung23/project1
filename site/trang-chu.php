<div class="search">
            <div class="search-time">
                <a class="a" href=""><i class="fa-solid fa-clock"></i><br> Theo giờ</a>
                <a class="a" href=""><i class="fa-regular fa-moon"></i><br> Qua đêm</a>
                <a class="a" href=""><i class="fa-solid fa-calendar-days"></i><br> Theo ngày</a>
            </div>
            <div class="search-check">
                <div class="check">
                    <div class="i">
                        <i class="fa-sharp fa-solid fa-location-dot"></i> <br>
                    </div>
                    <p>Địa điểm</p>
                    <input type="text" placeholder="Bạn muốn thuê phòng nào ?">
                </div>
                <div class="book">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <p>Nhận phòng</p>
                    <input type="datetime-local" name="bdaytime">
                </div>
                <div class="book1">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <p>Trả phòng </p>
                    <input type="datetime-local" name="bdaytime">
                </div>
                <div class="book2">
                    <select name="tp" id="tp" class="tp">
                        <option value="hn">Khách hàng</option>
                        <option value="hn">1 người</option>
                        <option value="hn">Nhiều người</option>
                        <option value="hn">Gia đình</option>
                    </select>

                </div>
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i> Tìm kiếm</button>
            </div>
        </div>
<div class="sale-index">
            <div class="sale-flex">
                <img src="../layout/assets/img/icon/p2.jpg" alt="" />
                <h2>Khuyến Mại Khủng 11.11</h2>
            </div>
            <a href="">Khám phá deal qua từng ô sản phẩm</a>
            <img src="../layout/assets/img/banner/km1.webp" alt="" />
        </div>
        <!--  -->
        <div class="discount-index">
            <img src="../layout/assets/img/banner/km2.webp" alt="" />
            <img src="../layout/assets/img/banner/km3.webp" alt="" />
            <img src="../layout/assets/img/banner/km4.webp" alt="" />
        </div>
        <!--  -->
        <div class="sale-11-index">
            <h2>Săn thêm khuyến mại 11.11</h2>
            <img src="../layout/assets/img/banner/sale11.11.webp" alt="" />
        </div>
        <!-- sale phòng khách sạn -->
        <div class="sale-ks-index">
            <div class="text-ks">
                <i class="fa-solid fa-gift"></i>
                <h2>Đặt phòng khách sạn giá ưu đãi</h2>
            </div>
            <p>Áp dụng với những khách hàng mới muốn trải nghiệm khách sạn</p>
            <div class="ks-flex">
                <img src="../layout/assets/img/product/p0.webp" alt="">
                <img src="../layout/assets/img/product/p1.webp" alt="">
                <img src="../layout/assets/img/product/p2.webp" alt="">
                <img src="../layout/assets/img/product/p3.webp" alt="">
                <img src="../layout/assets/img/product/p4.webp" alt="">
            </div>
        </div>
        <!--chọn phòng khách sạn  -->
        <div class="choose-index">
            <div class="text-choose">
                <i class="fa-solid fa-gift"></i>
                <h2>Lựa chọn phòng khách sạn của bạn</h2>
            </div>
            <p>Dịch vụ 24/24 </p>
            <div class="room">
                <a style="background-color: #0770cd; color: white;" href="">Tất cả các phòng</a>
                <?php foreach ($categoriesAll as $key => $value) : ?>
                    <a href="">Phòng <?php echo $value->name ?></a>
                <?php endforeach ?>
            </div>
            <div class="flex-choose">
            <?php foreach ($roomAll as $key => $value) : ?>
                <div class="chitiet">
                    <figure class="snip0016">
                        <img src="../layout/assets/img/product/<?php echo $value->thumbnail ?>" alt="sample41" />
                        <figcaption>
                            <p class="p"><?php echo $value->acreage ?></p>
                            <p class="p">Tầng: <?php echo $value->location ?></p>
                            <p class="p"> <?php echo $value->sv ?> dịch vụ đi kèm</p>
                            <p>
                            <p class="p1"><i class="fa-solid fa-thumbs-up"></i><?php echo $value->likes ?></p>
                            <p class="p1"><i class="fa-sharp fa-solid fa-comments"></i> <?php echo $value->tbl ?> Lượt Comment</p>
                            <p class="p1"><i class="fa-solid fa-eye"></i> <?php echo $value->view ?> lượt xem</p>
                            </p>
                            <a href="#"></a>
                        </figcaption>
                    </figure>
                    <div class="sao">
                        <a class="a0" href=""><?php echo $value->name ?></a>
                        <p class="diachi">
                            <i><i class="fa-sharp fa-solid fa-location-dot"></i></i> Stayyin(Hà Nội)
                        </p>
                        <div class="text-dg">
                            <a class="a" href=""><?php echo $value->star ?> tuyệt vời</a><br>
                            <a class="a1" href="">Qua 1257 đánh giá</a>
                        </div>
                    </div>
                    <div class="i">
                        <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <span><?php echo $value->price ?></span>
                    </div>
                </div>
                        <?php endforeach ?>
            </div>

        </div>
        <!-- dịch vụ khách sạn -->
        <div class="dv-ks-index">
            <div class="text-dv">
                <i class="fa-solid fa-gift"></i>
                <h2>Lựa chọn dịch vụ khách sạn của bạn</h2>
            </div>
            <p>Dịch vụ 24/24 </p>
            <div class="room-dv">
                <a style="background-color: #ff6d70; color: white;" href="">Tất cả các dịch vụ</a>
                <?php foreach ($service as $key => $value) : ?>
                    <a href="">Phòng <?php echo $value->name ?></a>
                <?php endforeach ?>

            </div>
            <div class="flex-dv">
            <?php foreach ($service as $key => $value) : ?>
                <div class="chitiet-dv">
                <figure class="snip0016">
                        <img src="../layout/assets/img/product/<?php echo $value->images ?>" alt="sample41" />
                        <figcaption>
                            <p class="p"><?php echo $value->status ?></p>
                            <p class="p">Số Lượng: <?php echo $value->quantity ?></p>
                            <p class="p">Giá: <?php echo $value->price ?></p>
                            <a href="#"></a>
                        </figcaption>
                    </figure>
                    <div class="sao-dv">
                        <a class="a0" href=""> <?php echo $value->name ?></a>
                        <p class="diachi-dv">
                            <i><i class="fa-sharp fa-solid fa-location-dot"></i></i> Stayyin(Hà Nội)
                        </p>
                        <div class="text-dg">
                            <a class="a" href="">8.9 tuyệt vời</a><br>
                            <a class="a1" href="">Qua 144 phản hổi</a>
                        </div>
                    </div>
                    <div class="i">

                        <span> <?php echo $value->price ?></span>
                    </div>
                </div>
                        <?php endforeach ?>
            </div>
        </div>
        <!-- trai nghiệm -->
        <div class="trainghiem">
            <h2>Trải nghiệm cùng StayyInn</h2>
            <div class="flex-tn">
                <div class="img1">
                    <img src="../layout/assets/img/banner/tn0.jpg" alt="">
                    <a href="<?= SITE_URL . "?listproduct" ?>">Xem thêm</a>
                </div>
                <div class="img2">
                    <img src="../layout/assets/img/banner/tn1.jpg" alt="">
                    <a href="<?= SITE_URL . "?listservice" ?>">Xem thêm</a>
                </div>
            </div>
        </div>
        <!-- phòng đặt nhiều trong tháng 11 -->
        <div class="choose-index">
            <div class="text-choose">
                <i class="fa-solid fa-gift"></i>
                <h2>Số phòng đặt nhiều trong tháng 11</h2>
            </div>
            <p>Dịch vụ 24/24 </p>
            <div class="room">
                <a style="background-color: #0770cd; color: white;" href="">Tất cả các phòng</a>
                <?php foreach ($categoriesAll as $key => $value) : ?>
                    <a href="">Phòng <?php echo $value->name ?></a>
                <?php endforeach ?>
            </div>
            <div class="flex-choose">
            <?php foreach ($roomAll as $key => $value) : ?>
                <div class="chitiet">
                    <figure class="snip0016">
                        <img src="../layout/assets/img/product/<?php echo $value->thumbnail ?>" alt="sample41" />
                        <figcaption>
                            <p class="p"><?php echo $value->acreage ?></p>
                            <p class="p">Tầng: <?php echo $value->location ?></p>
                            <p class="p"> <?php echo $value->sv ?> dịch vụ đi kèm</p>
                            <p>
                            <p class="p1"><i class="fa-solid fa-thumbs-up"></i><?php echo $value->likes ?></p>
                            <p class="p1"><i class="fa-sharp fa-solid fa-comments"></i> <?php echo $value->tbl ?> Lượt Comment</p>
                            <p class="p1"><i class="fa-solid fa-eye"></i> <?php echo $value->view ?> lượt xem</p>
                            </p>
                            <a href="#"></a>
                        </figcaption>
                    </figure>
                    <div class="sao">
                        <a class="a0" href=""><?php echo $value->name ?></a>
                        <p class="diachi">
                            <i><i class="fa-sharp fa-solid fa-location-dot"></i></i> Stayyin(Hà Nội)
                        </p>
                        <div class="text-dg">
                            <a class="a" href=""><?php echo $value->star ?> tuyệt vời</a><br>
                            <a class="a1" href="">Qua 1257 đánh giá</a>
                        </div>
                    </div>
                    <div class="i">
                        <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <span><?php echo $value->price ?></span>
                    </div>
                </div>
                        <?php endforeach ?>
            </div>
        </div>
        <!-- thanh toán -->
        <div class="thanhtoan">
            <div class="text-tt">
                <h2>Đối tác thanh toán</h2>
                <p>
                    Những đối tác thanh toán đáng tin cậy của chúng tôi sẽ giúp
                    cho bạn luôn an tâm thực hiện mọi giao dịch một cách thuận lợi nhất!
                </p>
            </div>
            <div class="grid">
                <img src="../layout/assets/img/thanhtoan/t1.webp" alt="">
                <img src="../layout/assets/img/thanhtoan/t2.webp" alt="">
                <img src="../layout/assets/img/thanhtoan/t3.webp" alt="">
                <img src="../layout/assets/img/thanhtoan/t4.webp" alt="">
                <img src="../layout/assets/img/thanhtoan/t5.webp" alt="">
                <img src="../layout/assets/img/thanhtoan/t6.webp" alt="">
                <img src="../layout/assets/img/thanhtoan/t7.webp" alt="">
                <img src="../layout/assets/img/thanhtoan/t8.webp" alt="">
                <img src="../layout/assets/img/thanhtoan/t9.webp" alt="">
                <img src="../layout/assets/img/thanhtoan/t10.webp" alt="">
                <img src="../layout/assets/img/thanhtoan/t11.webp" alt="">
                <img src="../layout/assets/img/thanhtoan/t12.webp" alt="">

            </div>
        </div>
        <!-- vận chuyển -->
        <div class="vanchuyen">
            <div class="text-vc">
                <h2>Đối tác vận chuyển</h2>
                <p>
                    Những đối tác thanh toán đáng tin cậy của chúng tôi sẽ giúp
                    cho bạn luôn an tâm thực hiện mọi giao dịch một cách thuận lợi nhất!
                </p>
            </div>
            <div class="grid-vc">
                <img src="../layout/assets/img/vanchuyen/v1.webp" alt="">
                <img src="../layout/assets/img/vanchuyen/v2.webp" alt="">
                <img src="../layout/assets/img/vanchuyen/v3.webp" alt="">
                <img src="../layout/assets/img/vanchuyen/v4.webp" alt="">
                <img src="../layout/assets/img/vanchuyen/v5.webp" alt="">
                <img src="../layout/assets/img/vanchuyen/v6.webp" alt="">
                <img src="../layout/assets/img/vanchuyen/v7.webp" alt="">
                <img src="../layout/assets/img/vanchuyen/v8.webp" alt="">
                <img src="../layout/assets/img/vanchuyen/v9.webp" alt="">
                <img src="../layout/assets/img/vanchuyen/v10.webp" alt="">
                <img src="../layout/assets/img/vanchuyen/v11.webp" alt="">
                <img src="../layout/assets/img/vanchuyen/v12.webp" alt="">
            </div>
        </div>
        <!-- Đối tác khách sạn -->
        <div class="nhahang">
            <div class="text-nh">
                <h2>Đối tác nhà hàng</h2>
                <p>
                    Những đối tác thanh toán đáng tin cậy của chúng tôi sẽ giúp
                    cho bạn luôn an tâm thực hiện mọi giao dịch một cách thuận lợi nhất!
                </p>
            </div>
            <div class="grid-nh">
            <img src="../layout/assets/img/vanchuyen/v1.webp" alt="">
                <img src="../layout/assets/img/vanchuyen/v2.webp" alt="">
                <img src="../layout/assets/img/vanchuyen/v3.webp" alt="">
                <img src="../layout/assets/img/vanchuyen/v4.webp" alt="">
                <img src="../layout/assets/img/vanchuyen/v5.webp" alt="">
                <img src="../layout/assets/img/vanchuyen/v6.webp" alt="">
                <img src="../layout/assets/img/vanchuyen/v7.webp" alt="">
                <img src="../layout/assets/img/vanchuyen/v8.webp" alt="">
                <img src="../layout/assets/img/vanchuyen/v9.webp" alt="">
                <img src="../layout/assets/img/vanchuyen/v10.webp" alt="">
                <img src="../layout/assets/img/vanchuyen/v11.webp" alt="">
                <img src="../layout/assets/img/vanchuyen/v12.webp" alt="">
            </div>
        </div>
        <!-- tại sao nên đặt phòng ở đây -->
        <div class="why">
            <h2 class="h2">Tại sao nên đặt phòng ở StayyInn</h2>
            <div class="grid-w">
                <div class="img-w">
                    <img src="../layout/assets/img/icon/ic1.webp" alt="">
                    <h2>Giải pháp du lịch hoàn thiện</h2>
                    <p>
                        Giải pháp toàn diện - giúp bạn tìm chuyến bay
                        và khách sạn khắp Việt Nam và Đông Nam Á một cách tiết kiệm.
                    </p>
                </div>
                <div class="img-w">
                    <img src="../layout/assets/img/icon/ic2.webp" alt="">
                    <h2>Giải pháp du lịch hoàn thiện</h2>
                    <p>
                        Giải pháp toàn diện - giúp bạn tìm chuyến bay
                        và khách sạn khắp Việt Nam và Đông Nam Á một cách tiết kiệm.
                    </p>
                </div>
                <div class="img-w">
                    <img src="../layout/assets/img/icon/ic3.webp" alt="">
                    <h2>Giải pháp du lịch hoàn thiện</h2>
                    <p>
                        Giải pháp toàn diện - giúp bạn tìm chuyến bay
                        và khách sạn khắp Việt Nam và Đông Nam Á một cách tiết kiệm.
                    </p>
                </div>
                <div class="img-w">
                    <img src="../layout/assets/img/icon/ic4.webp" alt="">
                    <h2>Giải pháp du lịch hoàn thiện</h2>
                    <p>
                        Giải pháp toàn diện - giúp bạn tìm chuyến bay
                        và khách sạn khắp Việt Nam và Đông Nam Á một cách tiết kiệm.
                    </p>
                </div>
            </div>
        </div>