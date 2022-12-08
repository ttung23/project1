<section class="mx-auto max-w-[1200px] p-2">
<div class="giamgia-r" style="margin:20px 0px 20px 0px">
                <span>StayInn/</span> <span style="">Nhận Phòng  : <?php echo $_SESSION['checkin'] ?? $ngay ?></span> /
                <span> Trả Phòng : <?= $_SESSION['checkout']?? $day ?></span><br />
            </div>
    <?php foreach ($oneroom as $key => $value) : ?>
    <h1 class="text-2xl font-bold text-[#0194f3] pb-2"><?php echo $value->name?></h1>
    <div class="text-xl items-center pb-3 flex">
        <form action="index.php?cart" method="post">
            <input type="hidden" name="id" value="<?php echo $value->room_id?>">
            <input type="hidden" name="ten" value="<?php echo $value->name?>">
            <input type="hidden" name="des" value="<?php echo $value->description?>">
            <input type="hidden" name="thumbnail" value="<?php echo $value->thumbnail?>">
            <input type="hidden" name="id_cate" value="<?php echo $value->id_category_room?>">
            <input type="hidden" name="price" value="<?php echo $value->price?>">
            <input type="hidden" name="star" value="<?php echo $value->star?>">
            <input type="hidden" name="quantity" value="<?php echo $value->quantity?>">
            <input type="hidden" name="location" value="<?php echo $value->location?>">
            <input type="hidden" name="acreage" value="<?php echo $value->acreage?>">
            <input type="hidden" name="status" value="<?php echo $value->status?>">
            <input type="hidden" name="view" value="<?php echo $value->view?>">
            <input type="hidden" name="likes" value="<?php echo $value->likes?>">
            <input type="hidden" name="created_at" value="<?php echo $value->created_at?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg>
            <h3 class="px-2"> Tâng : <?php echo $value->location?> Số 40, ngõ 80, phố Trung Kính, Phường Yên Hòa, Quận
                Cầu Giấy, Thành phố Hà Nội</h3>
    </div>
    <div class="grid grid-cols-3 gap-4">
        <div class="col-span-2">
            <img src="../layout/assets/img/product/<?php echo $value->thumbnail?>" alt="" width="750"
                class="w-fulll mr-5 ml-4 rounded">
            <div class="flex mx-20 ">
   <?php foreach ($loadanh as $key => $values) : ?>
                <div class="column py-3 ">
                    <img width="300px" height="250px" src="../layout/assets/img/product/<?php echo $values->image?>" alt="" class=" rounded">
                </div>
<?php endforeach ?>
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
            <h2 class="font-weight-bold text-300 mt-3">Giới thiệu phòng</h2>
            <h3 class=" py-3"><?php echo $value->description?></h3>
            <hr>
            <h3 class="font-bold py-3">Dịch Vụ</h3>
            <div class="grid grid-cols-2 gap-4 pb-3">
                <div class="column ">
                    <ul class="list-disc pl-5">
                    <?php foreach ($servicedt as $key => $valuesa) : ?>
                        <li><?= $valuesa->name?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
            <hr>
            <hr>
            <div>
                <p class="py-3 font-weight-bold">Khởi điểm từ:</p>
                <h3> <span class="text-2xl font-bold text-[#0194f3]"><?php echo number_format($value->price,0,",",".")?> Đ</span> <span
                        class="text-xl">/ phòng / đêm</span> </h3>
            </div>
            <div class="flex justify-center">
                <button
                    class="border border-2 rounded-md my-3 px-16 py-3 border-blue-500 text-[#0194f3] hover:bg-blue-500 hover:text-white"
                    type="submit" name="addcart">Đặt phòng</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php endforeach ?>
<section class="mx-auto max-w-[1200px] mt-20">
    <h1 class="text-2xl font-bold text-[#0194f3] p-3">PHÒNG LIÊN QUAN</h1>
    <?php foreach ($room_categories as $key => $value) : ?>
    <div class="grid grid-cols-4 gap-8 px-1 py-3 border-b border-black">
        <div class="column">
            
            <a href=""><img src="../layout/assets/img/product/<?php echo $value->thumbnail?>" alt="" width="230"></a>
        </div>
        <div class="column">
            <h1 class="font-bold text-2xl">Thông tin phòng</h1>
            <h1>Phòng <?= $value->name?></h1>
            <h1 class=" py-5"><?php echo $value->description?></h1>
            <h1 class="font-bold text-2xl">Dịch vụ</h1>
            <?php $service_room = loadAll_service_room($value->room_id)
              ?>
            <?php foreach ($service_room as $key => $value) : ?>
            <h1 class="mt-2 pb-10"><?=$value->name?></h1>
            <?php endforeach ?>
        </div>
        <div class="column">
            <h1 class="font-bold text-xl">Đặc điểm nổi bật</h1>
            <div class="flex">
                <h1 class="border border-2 rounded-md my-2 border-red-500 text-red-500 font-bold">
                    <?php echo $value->price?></h1>
                <h1 class="border border-2 rounded-md mx-1 my-2 border-red-500 text-red-500 font-bold">Tặng giờ</h1>
            </div>
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green"
                    class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                    <path
                        d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                </svg>
                <h1 class="py-7 px-3 font-bold">Đặt 2 giờ tặng 1 giờ</h1>
            </div>
        </div>
        <div class="column">
            <h1 class="font-bold text-xl">Giá phòng</h1>
            <h1 class="font-bold text-xl py-5 text-red-600">2 Giờ</h1>
            <h1><span class="font-bold pr-2 m-4 text-xl"><?php echo number_format($value->price,0,",",".")?>đ</span> <span                    class="text-xl line-through">200.000đ</span></h1>
            <a style=" display: inline-block"
                class="border border-2 rounded-md my-3 px-8 py-3 mt-5 border-blue-500 text-[#0194f3] hover:bg-blue-500 hover:text-white"
             href="index.php?product-detail&id=<?= $value->room_id?>&iddm=<?php echo $_GET['iddm']?>">Đặt phòng</a>
        </div>
    </div>
    <?php endforeach ?>
</section>
<section class="mx-auto max-w-[1200px] mb-20">
    <h1 class="text-2xl font-bold text-[#0194f3] p-3">ĐÁNH GIÁ</h1>
    <div class="flex items-center py-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="#e4ab55" class="bi bi-star-fill"
            viewBox="0 0 16 16">
            <path
                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
        </svg>
        <h1 class="text-5xl font-bold px-3">5/5</h1>
    </div>
    <div class="grid grid-cols-2 gap-8">
        <?php foreach ($onecomment as $key => $value) : ?>
        <div class="column">
            <div class="grid grid-cols-2 gap-4">
                <div class="small-column py-2 flex items-center">
                    <div class="border rounded-full bg-blue-300 w-16 h-16 flex justify-center items-center"
                        data-v-ec67da27=""><span class="text-xl">Q</span></div>
                    <h1 class="text-xl px-3"><?php echo $value->created_at?>
                        <br>
                        Khách Hàng : <span class="font-bold "><?php echo $value->tennguoidung?></span>
                    </h1>
                </div>
                <div class="small-column py-2">
                    <h1 class="text-xl px-3">Phòng: <span class="font-bold"><?php echo $value->id_room?></span></h1>
                    <div class="flex items-center">
                        <h1 class="text-xl px-3">Đánh giá: </h1>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#e4ab55"
                            class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#e4ab55"
                            class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#e4ab55"
                            class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#e4ab55"
                            class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#e4ab55"
                            class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
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
    <h1 class="max-w-[1200px] mb-2 flex items-center justify-center pt-3">Bạn đã sử dụng phòng chưa ?</h1>
    <div class="max-w-[1200px] flex items-center justify-center">
        <div class=" flex items-center justify-center">
            <button class="px-6 py-3 bg-[#0194f3] text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-modal-toggle="modalEl" type="button">Gửi đánh giá</button>
        </div>
        <div id="modalEl" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 w-full md:inset-0 h-modal md:h-full">
            <div class="relative w-full max-w-md h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow">
                    <!--Dấu X-->
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-500 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:text-white" data-modal-toggle="modalEl">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <!--Form -->
                    <div class="max-w-[1200px] mx-auto py-10">
                        <div class="p-5 block rounded-lg shadow-lg bg-white max-w-lg mx-auto">
                            <h1 class="text-center text-2xl font-bold text-[#0194f3] pt-2 pb-5">ĐÁNH GIÁ PHÒNG</h1>
                            <?php foreach ($oneroom as $key => $value) : ?>
                            <form
                                action="index.php?addcomment&product-detail&id=<?php echo $value->room_id?>&iddm=<?php echo $value->id_category_room?>"
                                method="post">
                                <div class="mb-6">
                                    <div class="flex justify-center items-center">
                                        <svg aria-hidden="true"
                                            class="w-5 h-5 text-gray-300 dark:text-gray-500 hover:text-yellow-400"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <title>First star</title>
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        <svg aria-hidden="true"
                                            class="w-5 h-5 text-gray-300 dark:text-gray-500 hover:text-yellow-400"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <title>Second star</title>
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        <svg aria-hidden="true"
                                            class="w-5 h-5 text-gray-300 dark:text-gray-500 hover:text-yellow-400"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <title>Third star</title>
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        <svg aria-hidden="true"
                                            class="w-5 h-5 text-gray-300 dark:text-gray-500 hover:text-yellow-400"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <title>Fourth star</title>
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        <svg aria-hidden="true"
                                            class="w-5 h-5 text-gray-300 dark:text-gray-500 hover:text-yellow-400"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <title>Fifth star</title>

                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                    </div>
                                    <textarea class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-[#0194f3] focus:outline-none
                            " id="" rows="3" placeholder="Nêu cảm nhận của bạn" name="content"></textarea>
                                </div>
                                <div class="mb-6">
                                    <input type="email"
                                        class=" block w-full px-3  py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300  rounded  transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-[#0194f3] focus:outline-none"
                                        id="" placeholder="Nhập email(để nhận thông báo phản hồi)">
                                </div>
                                <div class="mb-6">
                                    <input type="checkbox"
                                        class="appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-[#0194f3] checked:border-[#0194f3] focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
                                        id="" checked>
                                    <label class="inline-block text-gray-800" for="">Gửi tôi bản sao đánh giá</label>
                                </div>
                                <button type="submit"
                                    class="w-full  px-6 py-2.5 bg-[#0194f3] text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                                    data-modal-toggle="modalEl" name="addcomment">Gửi đánh giá</button>
                                <?php endforeach ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</section>