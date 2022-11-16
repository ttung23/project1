<section class="mx-auto max-w-[1200px] p-2">
<?php foreach ($oneroom as $key => $value) : ?>
    <h1 class="text-2xl font-bold text-[#0194f3] pb-2"><?php echo $value->name?></h1>
    <div class="text-xl items-center pb-3 flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg>
            <h3 class="px-2"> Tâng : <?php echo $value->location?> Số 40, ngõ 80, phố Trung Kính, Phường Yên Hòa, Quận Cầu Giấy, Thành phố Hà Nội</h3>
        </div>
        <div class="grid grid-cols-3 gap-4">
        <div class="col-span-2">
                <img src="../layout/assets/img/product/<?php echo $value->thumbnail?>" alt="" class="max-width rounded">
                <div class="grid grid-cols-4 gap-4">
                    <div class="column py-3">
                    <img src="../layout/assets/img/product/<?php echo $value->thumbnail?>" alt="" class="max-width rounded">
                    </div>
                    <div class="column py-3">
                    <img src="../layout/assets/img/product/<?php echo $value->thumbnail?>" alt="" class="max-width rounded">
                    </div>
                    <div class="column py-3">
                    <img src="../layout/assets/img/product/<?php echo $value->thumbnail?>" alt="" class="max-width rounded">
                    </div>
                    <div class="column py-3">
                    <img src="../layout/assets/img/product/<?php echo $value->thumbnail?>" alt="" class="max-width rounded">
                    </div>
                </div>
            </div>
            <div>
                <h3 class="font-bold pb-3">Thông tin phòng</h3>
                <div class="flex pb-3 gap-4">
                    <p><?php echo $value->description?></p>
                    <p>Cửa sổ</p>
                    <p>20m2</p>
                </div>
                <hr>
                <h3 class="font-bold py-3"><?php echo $value->description?></h3>
                <hr>
                <h3 class="font-bold py-3">Tiện nghi phòng</h3>
                <div class="grid grid-cols-2 gap-4 pb-3">
                    <div class="column ">
                        <ul class="list-disc pl-5">
                            <li>Máy lạnh</li>
                            <li>TV</li>
                            <li>Két an toàn tại phòng</li>
                        </ul>
                    </div>
                    <div class="column">
                        <ul class="list-disc pl-5">
                            <li>Quầy bar mini</li>
                            <li>Bàn làm việc</li>
                            <li>Rèm cửa / màn che</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <h3 class="font-bold py-3">Tiện nghi phòng tắm</h3>
                <div class="grid grid-cols-2 gap-4 pb-3">
                    <div class="column ">
                        <ul class="list-disc pl-5">
                            <li>Nước nóng</li>
                            <li>Vòi tắm đứng</li>
                            <li>Máy sấy tóc</li>
                        </ul>
                    </div>
                    <div class="column">
                        <ul class="list-disc pl-5">
                            <li>Phòng tắm riêng</li>
                            <li>Bộ vệ sinh cá nhân</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div>
                    <p class="py-3">Khởi điểm từ:</p>
                    <h3> <span class="text-3xl font-bold text-[#0194f3]"><?php echo $value->price?>D</span> <span class="text-xl">/ phòng / đêm</span> </h3>
                </div>
                <div class="flex justify-center">
                    <button class="border border-2 rounded-md my-3 px-16 py-3 border-blue-500 text-[#0194f3] hover:bg-blue-500 hover:text-white">Đặt phòng</button>
                </div>
            </div>
        </div>
    </section>
   <?php endforeach ?>
    <section class="mx-auto max-w-[1200px]">
        <h1 class="text-2xl font-bold text-[#0194f3] p-3">PHÒNG LIÊN QUAN</h1>
        <?php foreach ($room_categories as $key => $value) : ?>
            <div class="grid grid-cols-4 gap-8 px-1 py-3 border-b border-black">
            <div class="column">
                <a href=""><img src="../layout/assets/img/product/<?php echo $value->thumbnail?>" alt="" width="400"></a>
            </div>
            <div class="column">
                <h1 class="font-bold text-xl">Thông tin phòng</h1>
                <h1 class="font-bold text-xl py-5"><?php echo $value->description?></h1>
                <h3 class="text-xl pb-10">Không có</h3>
                <a href="" class="underline font-bold text-xl hover:text-blue-600">Xem chi tiết ></a>
            </div>
            <div class="column">
                <h1 class="font-bold text-xl">Đặc điểm nổi bật</h1>
                <div class="flex">
                    <h1 class="border border-2 rounded-md my-2 border-red-500 text-red-500 font-bold"><?php echo $value->price?></h1>
                    <h1 class="border border-2 rounded-md mx-1 my-2 border-red-500 text-red-500 font-bold">Tặng giờ</h1>
                </div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                        <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                    </svg>
                    <h1 class="py-7 px-3 font-bold">Đặt 2 giờ tặng 1 giờ</h1>
                </div>
            </div>
            <div class="column">
                <h1 class="font-bold text-xl">Giá phòng</h1>
                <h1 class="font-bold text-xl py-5 text-red-600">2 Giờ</h1>
                <h1><span class="font-bold pr-2 text-3xl"><?php echo $value->price?>đ</span> <span class="text-xl line-through">200.000đ</span></h1>
                <button class="border border-2 rounded-md my-3 px-8 py-3 border-blue-500 text-[#0194f3] hover:bg-blue-500 hover:text-white">Đặt phòng</button>
            </div>
        </div>
                <?php endforeach ?>
    </section>
    <section class="mx-auto max-w-[1200px]">
        <h1 class="text-2xl font-bold text-[#0194f3] p-3">ĐÁNH GIÁ</h1>
        <div class="flex items-center py-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="#e4ab55" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
            </svg>
            <h1 class="text-5xl font-bold px-3">5/5</h1>
        </div>
        <div class="grid grid-cols-2 gap-8">
        <?php foreach ($onecomment as $key => $value) : ?>
            <div class="column">
                <div class="grid grid-cols-2 gap-4">
                    <div class="small-column py-2 flex items-center">
                        <div class="border rounded-full bg-blue-300 w-16 h-16 flex justify-center items-center" data-v-ec67da27=""><span class="text-xl">Q</span></div>
                        <h1 class="text-xl px-3"><?php echo $value->created_at?>
                            <br>
                            Khách Hàng : <span class="font-bold "><?php echo $value->tennguoidung?></span>
                        </h1>
                    </div>
                    <div class="small-column py-2">
                        <h1 class="text-xl px-3">Phòng: <span class="font-bold"><?php echo $value->id_room?></span></h1>
                        <div class="flex items-center">
                            <h1 class="text-xl px-3">Đánh giá: </h1>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#e4ab55" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#e4ab55" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#e4ab55" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#e4ab55" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#e4ab55" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div>
                    <h1 class="text-xl"><?php echo $value->comment?>
                    </h1>
                </div>
            </div>
                <?php endforeach ?>
            <a href="" class="underline font-bold text-xl hover:text-blue-600">Xem thêm đánh giá ></a>
        </div>
        <h1 class="max-w-[1200px] flex items-center justify-center pt-3">Bạn đã sử dụng phòng chưa ?</h1>
        <div class="max-w-[1200px] flex items-center justify-center">
            <button class="border border-2 rounded-md my-3 ml-2 px-8 py-4 border-blue-500 text-[#0194f3] hover:bg-blue-500 hover:text-white">Gửi đánh giá</button>
        </div>
    </section>