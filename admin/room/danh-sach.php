<div class="dash-content">
    <div class="content">
        <div class="danh_sach">
            <h3>DANH SÁCH PHÒNG</h3>
            <form action="" method="post">
                <div class="action">
                    <div class="grid grid-cols-4 gap-[20px] my-3">
                        <div class="">
                            <a href="c_room.php" class="bg-[#0194f3] text-center btn-outline- px-3 py-[12px] shadow-lg w-[200px]">
                                Tất Cả
                            </a>
                        </div>

                        <div class="">
                            <a href="c_room.php?id=1" class="bg-green-500 text-center btn-outline- px-3 py-[12px] shadow-lg w-[200px]">
                                Phòng Kích Hoạt
                            </a>
                        </div>

                        <div class="">
                            <a href="c_room.php?id=0" class="bg-yellow-500 text-center btn-outline- px-3 py-[12px] shadow-lg w-[200px]">
                                Phòng Đang Sửa
                            </a>
                        </div>

                        <div class="">
                            <a href="c_room.php?id=2" class="bg-red-500 text-center btn-outline- px-3 py-[12px] shadow-lg w-[200px]">
                                Phòng Tạm Khóa
                            </a>
                        </div>

                        <!-- <div class="">
                            <a href="c_room.php?add-room" class="bg-green-500 text-center px-3 py-[12px] shadow-lg w-[200px]">
                                Thêm
                            </a>
                        </div> -->

                        <div class="add cursor-pointer capitalize bg-green-500 text-center px-3 py-[12px] shadow-lg w-[200px]"  data-modal-toggle="aa">
                            Thêm
                        </div>

                        <div class="add cursor-pointer capitalize bg-[#0194f3] text-center px-3 py-[12px] shadow-lg w-[200px]"  data-modal-toggle="bb">
                            Thêm ảnh
                        </div>

                        <div class="">
                            <button type="submit" name="edit_room" class="bg-yellow-500 text-center px-3 py-[12px] shadow-lg w-[200px]">
                                Sửa
                            </button>
                        </div>

                        <div class="">
                            <button type="submit" name="delete_room" onclick="return confirm('Bạn muốn xóa phòng ko?')" class="bg-red-500 text-center px-3 py-[12px] shadow-lg w-[200px]">
                                Xóa
                            </button>
                        </div>

                        <div class="">
                            <button type="submit" name="unlock_room" class="bg-green-500 text-center text-white px-3 py-[12px] shadow-lg w-[200px]">
                                Mở Khóa
                            </button>
                        </div>

                        <div class="">
                            <button type="submit" name="lock_room" class="bg-red-500 text-center px-3 py-[12px] shadow-lg w-[200px]">
                                Khóa
                            </button>
                        </div>

                        <div class="add cursor-pointer capitalize bg-[#0194f3] text-center px-3 py-[12px] shadow-lg w-[200px]"  data-modal-toggle="cc">
                            Thêm dịch vụ
                        </div>
                    </div>
                </div>

                <div id="aa" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden h-modal">
                    <div class="bg-white" id="popup">
                        <div class="flex_tt text-center py-3">
                            <img class="inline-block" src="../../layout/assets/img/logo/logo_chuong.png" width="50px" alt="ảnh logo">
                            <span class="font-semibold text-[20px]">StayyInn</span>
                        </div>

                        <h4>NHẬP SỐ BẢN GHI MUỐN THÊM</h4>
                        <input class="p-3 border border-[#0194f3] text-center outline-none rounded-[8px] w-full" type="number" name="quantity_rows" min="1" step="1" id="">
                        <?php if (isset($loi)) { ?>
                            <span class="text-red-700"><?= $loi ?></span>
                        <?php } ?>
                        <button name="add_room" class="block text-white rounded-[8px] mt-2 bg-[#0194f3] p-2 mx-auto" type="submit">Xác nhận</button>
                    </div>
                </div>

                <div id="bb" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden h-modal">
                    <div class="bg-white" id="popup">
                        <div class="flex_tt text-center py-3">
                            <img class="inline-block" src="../../layout/assets/img/logo/logo_chuong.png" width="50px" alt="ảnh logo">
                            <span class="font-semibold text-[20px]">StayyInn</span>
                        </div>

                        <h4>NHẬP SỐ ẢNH MUỐN THÊM</h4>
                        <input class="p-3 border border-[#0194f3] text-center outline-none rounded-[8px] w-full" type="number" name="quantity_img" min="1" max="3" step="1" id="">
                        <?php if (isset($loi_img)) { ?>
                            <span class="text-red-700"><?= $loi_img ?></span>
                        <?php } ?>
                        <button name="add_img_room" class="block text-white rounded-[8px] mt-2 bg-[#0194f3] p-2 mx-auto" type="submit">Xác nhận</button>
                    </div>
                </div>

                <div id="cc" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden h-modal">
                    <div class="bg-white" id="popup">
                        <div class="flex_tt text-center py-3">
                            <img class="inline-block" src="../../layout/assets/img/logo/logo_chuong.png" width="50px" alt="ảnh logo">
                            <span class="font-semibold text-[20px]">StayyInn</span>
                        </div>

                        <h4>NHẬP SỐ DỊCH VỤ MUỐN THÊM</h4>
                        <input class="p-3 border border-[#0194f3] text-center outline-none rounded-[8px] w-full" type="number" name="quantity_service" min="1" max="5" step="1" id="">
                        <?php if (isset($loi_service)) { ?>
                            <span class="text-red-700"><?= $loi_service ?></span>
                        <?php } ?>
                        <button name="add_service_room" class="block text-white rounded-[8px] mt-2 bg-[#0194f3] p-2 mx-auto" type="submit">Xác nhận</button>
                    </div>
                </div>

                <div class="row room">
                    <?php foreach ($loadone as $key => $value) : ?>
                        <div class="col-sm-1 mr-3 mb-3 py-3 text-center h-25 w-[220px] <?php if ($value->status == 1) {
                                                                                        echo "bg-success";
                                                                                    }
                                                                                    if ($value->status == 0) {
                                                                                        echo "bg-warning";
                                                                                    } else {
                                                                                        echo "bg-danger";
                                                                                    }

                                                                                    ?> bg-success shadow-lg rounded">
                            <td><input type="checkbox" name="room[]" class="rounded" value="<?= $value->room_id ?>" />
                            </td>
                            <div class="cursor-pointer text-white" data-modal-toggle="popup-modal<?= $value->room_id ?>">
                                <h1 class="fs-4"><?php echo $value->name ?></h1>
                                <h2 class="fs-5"><?php if ($value->status == 1) {
                                                        echo "Kích Hoạt";
                                                    } else if ($value->status == 0) {
                                                        echo "Đang Sửa";
                                                    } else {
                                                        echo "Tạm Khóa";
                                                    }

                                                    ?></h2>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h1 class="fs-4"><?php echo $value->quantity ?></h1>
                                        <i class="fa-solid fa-user"></i><i class="fa-solid fa-user"></i><i class="fa-solid fa-user"></i><i class="fa-solid fa-user"></i>
                                    </div>

                                    <div class="col-sm-6 bg-light rounded-circle w-25 text-center  ms-5">
                                        <h3 class="fs-5 "><i class="fa-solid fa-check text-success"></i></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
            </form>

            <?php foreach ($loadone as $key => $value) : ?>
                <div id="popup-modal<?= $value->room_id ?>" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 md:inset-0 h-modal">
                    <!-- thanh toán bằng qr-code -->
                    <div class="thanhtoan_tc max-w-[800px] max-h-[500px] px-3" style="background-color:white">
                        <div class="flex_tt text-center py-3">
                            <img class="inline-block" src="../../layout/assets/img/logo/logo_chuong.png" width="50px" alt="ảnh logo">
                            <span class="font-semibold text-[20px]">StayyInn</span>
                        </div>
                        <div class="tt_qr">
                            <div class="flex py-3 gap-3">
                                <div class="min-w-[350px] max-w-[350px]">
                                    <div>
                                        <span class="">Tên phòng: </span>
                                        <span class="text-[18px] text-[#0194f3]"><?= $value->name ?></span>
                                    </div>

                                    <div>
                                        <span class="">Thông tin phòng: </span>
                                        <span class="text-[18px] text-[#0194f3]"><?= $value->description ?></span>
                                    </div>

                                    <div>
                                        <span>Giá mỗi đêm: </span>
                                        <span class="text-[18px] text-[#0194f3]"><?= $value->price ?></span>
                                    </div>

                                    <div>
                                        <span>Vị trí: </span>
                                        <span class="text-[18px] text-[#0194f3]"><?= $value->location ?></span>
                                    </div>

                                    <div>
                                        <span>Diện tích: </span>
                                        <span class="text-[18px] text-[#0194f3]"><?= $value->acreage ?></span>
                                    </div>

                                    <div>
                                        <span>Trạng thái: </span>
                                        <span class="text-[18px] text-[#0194f3]">
                                            <?php if ($value->status == 1) {
                                                echo "Kích Hoạt";
                                            } else if ($value->status == 0) {
                                                echo "Đang Sửa";
                                            } else {
                                                echo "Tạm Khóa";
                                            }
                                            ?>
                                        </span>
                                    </div>

                                    <div>
                                        <span>Lượt xem: </span>
                                        <span class="text-[18px] text-[#0194f3]"><?= $value->view ?></span>
                                    </div>

                                    <div>
                                        <span>Lượt thích: </span>
                                        <span class="text-[18px] text-[#0194f3]"><?= $value->likes ?></span>
                                    </div>
                                </div>

                                <div>
                                    <img class="max-h-[325px]" src="../../layout/assets/img/product/<?= $value->thumbnail ?>" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--End popup-->
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>