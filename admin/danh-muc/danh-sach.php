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

                        <div class="">
                            <a class="capitalize bg-green-500 text-center px-3 py-[12px] shadow-lg w-[200px]" href="../../admin/danh-muc/c_danh_muc.php?add_cate">
                                Thêm danh mục
                            </a>
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