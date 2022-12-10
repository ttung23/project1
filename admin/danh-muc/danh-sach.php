<div class="dash-content">
    <div class="content">
        <div class="danh_sach">
            <h3>
                DANH SÁCH DANH MỤC
            </h3>

            <form action="" method="post">
                <!-- <div class="action">
                    <a class="bg-green-500" href="../../admin/danh-muc/c_danh_muc.php?add_cate">Thêm danh mục</a>
                    <button class="bg-yellow-500" type="submit" name="edit_cate">Sửa danh mục</button>
                    <button class="bg-red-500" type="submit" name="delete_cate" onclick="return confirm('Bạn muốn xóa danh mục ko?')">Xóa danh
                        mục</button>
                </div> -->

                <div class="action">
                    <div class="grid grid-cols-4 gap-[20px] my-3">
                        <div class="">
                            <a href="c_danh_muc.php" class="bg-[#0194f3] capitalize text-center btn-outline- px-3 py-[12px] shadow-lg w-[200px]">
                                Tất Cả
                            </a>
                        </div>

                        <div class="">
                            <a href="c_danh_muc.php?status=1" class="bg-green-500 capitalize text-center btn-outline- px-3 py-[12px] shadow-lg w-[200px]">
                                danh mục kích hoạt
                            </a>
                        </div>

                        <div class="">
                            <a href="c_danh_muc.php?status=0" class="bg-red-500 capitalize text-center btn-outline- px-3 py-[12px] shadow-lg w-[200px]">
                                danh mục tạm khóa
                            </a>
                        </div>

                        <div></div>

                        <div class="">
                            <button type="submit" name="unlock_cate" class="capitalize bg-green-500 text-center text-white px-3 py-[12px] shadow-lg w-[200px]">
                                kích hoạt
                            </button>
                        </div>

                        <div class="">
                            <button type="submit" name="block_cate" class="capitalize bg-red-500 text-center px-3 py-[12px] shadow-lg w-[200px]">
                                Khóa
                            </button>
                        </div>

                        <div></div>
                        <div></div>

                        <div class="add cursor-pointer capitalize bg-green-500 text-center px-3 py-[12px] shadow-lg w-[200px]"  data-modal-toggle="aa">
                            <!-- <a class="capitalize bg-green-500 text-center px-3 py-[12px] shadow-lg w-[200px]" href="">
                            ../../admin/danh-muc/c_danh_muc.php?add_cate
                                Thêm danh mục
                            </a> -->
                            Thêm danh mục
                        </div>

                        <div class="">
                            <button type="submit" name="edit_cate" class="capitalize bg-yellow-500 text-center px-3 py-[12px] shadow-lg w-[200px]">
                                Sửa thông tin
                            </button>
                        </div>

                        <div class="">
                            <button type="submit" name="delete_cate" class="capitalize bg-rose-700 text-center px-3 py-[12px] shadow-lg w-[200px]" onclick="return confirm('Bạn muốn xóa danh mục đã chọn không?')">
                                Xóa
                            </button>
                        </div>
                    </div>
                </div>

                <div id="aa" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 md:inset-0 h-modal">
                    <div class="bg-white p-5">
                        <div class="flex_tt text-center py-3">
                            <img class="inline-block" src="../../layout/assets/img/logo/logo_chuong.png" width="50px" alt="ảnh logo">
                            <span class="font-semibold text-[20px]">StayyInn</span>
                        </div>

                        <h4>NHẬP SỐ BẢN GHI MUỐN THÊM</h4>
                        <input class="p-3 border border-[#0194f3] text-center outline-none rounded-[8px] w-full" type="number" name="quantity_rows" min="1" step="1" id="">
                        <?php if (isset($loi)) { ?>
                            <span class="text-red-700"><?= $loi ?></span>
                        <?php } ?>
                        <button name="add_cate" class="block text-white rounded-[8px] mt-2 bg-[#0194f3] p-2 mx-auto" type="submit">Xác nhận</button>

                    </div>
                </div>

                <table>
                    <tr>
                        <td>#</td>
                        <th style="width: 30px">Id</th>
                        <th style="width: 200px">Tên danh mục</th>
                        <th style="width: 200px">Trạng thái</th>
                        <th style="width: 100px">Mô tả</th>
                        <th style="width: 100px">Ảnh đại diện</th>
                        <th style="width: 200px">Ngày khởi tạo</th>
                    </tr>
                    <?php foreach ($category as $value) { ?>
                        <tr>
                            <td><input type="checkbox" name="danh_muc[]" value="<?= $value->categories_id ?>" /></td>
                            <td><?= $value->categories_id ?></td>
                            <td><?= $value->name ?></td>
                            <td><?php if ($value->status == 1) {
                                echo "Kích hoạt";
                            } elseif ($value->status == 0) {
                                echo "Tạm khóa";
                            } ?></td>
                            <td><?= $value->description ?></td>
                            <td><img src="../../layout/assets/img/categories/<?= $value->images ?>" alt="" /></td>
                            <td><?= $value->created_at ?></td>

                        </tr>
                    <?php } ?>
                </table>
            </form>
        </div>


    </div>
</div>