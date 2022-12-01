<section class="">
        <div class="max-w-7xl mx-auto p-2">
            <div class="banner grid grid-cols-2 gap-2 py-2">
            <?php foreach ($news as $key => $value) : ?>
                <div class="column">
                    <a href="">
                        <h3 class="absolute px-2 text-white">Khách sạn
                        <br> <b><?php echo $value->name?></b> </h3>
                        <img src="../layout/assets/img/news/<?php echo $value->images?>" alt="" class="">
                    </a>
                </div>                
                <?php endforeach ?>
            </div>
            <div class="content pt-10">
                <h1 class="font-bold text-2xl text-[#0194f3]">
                    KHÁCH SẠN
                </h1>
                <hr>
                <div class="grid grid-cols-2 gap-8 pt-5">
                    <div class="col">
                        <a href=""><img src="https://go2joy.s3.ap-southeast-1.amazonaws.com/blog/wp-content/uploads/2022/09/17110948/swan-hotel-thu-duc-768x512.jpg" alt="" ></a>
                        <a href=""><h1 class="font-bold text-xl pt-3 text-[#0194f3]">
                            Top 10 khách sạn Thủ Đức giá rẻ phòng chất thoải mái chill
                        </h1></a>
                        <p class="py-3">by <span class="font-bold pr-4 text-[#0194f3]">Hồ Linh</span>|<span class="px-4"> 10 Tháng Mười Một , 2022</span></p>
                        <p class="pb-4">Ở quận Thủ Đức thì nên chọn khách sạn nào để lưu trú khi đến tham quan và trải nghiệm? Sau đây là danh sách khách sạn Thủ Đức từ bình dân đến sang trọng…</p>
                        <a href="" class="font-bold hover:text-blue-600 pt-4 text-[#0194f3]">View All ></a>
                    </div>
                    <div class="">
                    <?php foreach ($news as $key => $value) : ?>
                        <div class="flex pt-3">
                            <a href=""><img src="../layout/assets/img/news/<?php echo $value->images?>" alt="" class="h-32"></a>
                            <p class="px-2"><a href=""><span class="font-bold text-[#0194f3]"> <?php echo $value->name?></span></a>
                                <br>
                                <span><?php echo $value->created_at?></span>
                            </p>
                        </div>          
                <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </section>