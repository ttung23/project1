<div class="dash-content">
    <div class="content">
        <div class="danh_sach border border-[#D0D7DE] fs-6">
            <h3>DANH SÁCH DỊCH VỤ</h3>
            <form action="" method="post">
                <!-- <div class="action">
                    <a href="?add_service" class="bg-green-500" type="submit" name="add_service">Thêm dịch vụ</a>
                    <button class="bg-yellow-500" type="submit" name="edit_service">Sửa thông tin dịch vụ</button>
                    <button class="bg-red-500" type="submit" name="delete_service">Xóa dịch vụ</button>
                </div> -->

                <div class="action">
                    <div class="grid grid-cols-4 gap-[20px] my-3">
                        <div class="">
                            <a href="c_service.php" class="bg-[#0194f3] capitalize text-center btn-outline- px-3 py-[12px] shadow-lg w-[200px]">
                                Tất Cả
                            </a>
                        </div>

                        <div class="">
                            <a href="c_service.php?status=1" class="bg-green-500 capitalize text-center btn-outline- px-3 py-[12px] shadow-lg w-[200px]">
                                dịch vụ kích hoạt
                            </a>
                        </div>

                        <div class="">
                            <a href="c_service.php?status=0" class="bg-red-500 capitalize text-center btn-outline- px-3 py-[12px] shadow-lg w-[200px]">
                                dịch vụ tạm khóa
                            </a>
                        </div>

                        <div></div>

                        <div class="">
                            <button type="submit" name="unlock_service" class="capitalize bg-green-500 text-center text-white px-3 py-[12px] shadow-lg w-[200px]">
                                kích hoạt
                            </button>
                        </div>

                        <div class="">
                            <button type="submit" name="block_service" class="capitalize bg-red-500 text-center px-3 py-[12px] shadow-lg w-[200px]">
                                Khóa
                            </button>
                        </div>

                        <div></div>
                        <div></div>

                        <div class="">
                            <a href="?add_service" class="capitalize bg-green-500 text-center px-3 py-[12px] shadow-lg w-[200px]" type="submit" name="add_service">Thêm dịch vụ</a>
                        </div>

                        <div class="">
                            <button type="submit" name="edit_service" class="capitalize bg-yellow-500 text-center px-3 py-[12px] shadow-lg w-[200px]">
                                Sửa thông tin
                            </button>
                        </div>

                        <div class="">
                            <button type="submit" name="delete_service" class="capitalize bg-rose-700 text-center px-3 py-[12px] shadow-lg w-[200px]" onclick="return confirm('Bạn muốn xóa người dùng đã chọn không?')">
                                Xóa
                            </button>
                        </div>
                    </div>
                </div>

                <section>
                    <div class="">
                        <table class="">
                            <tr class="">
                                <th>#</th>
                                <th>ID</th>
                                <th>Tên dịch vụ</th>
                                <th>Ảnh</th>
                                <th>Mô tả</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Trạng thái</th>
                                <th>Phòng</th>
                                <th>Ngày tạo</th>
                                <th>Ngày cập nhập</th>
                            </tr>
                            <?php foreach ($service as $value) { ?>
                                <tr>
                                    <td><input type="checkbox" name="service[]" value="<?= $value->service_id ?>"></td>
                                    <td><?= $value->service_id ?></td>
                                    <td><?= $value->name ?></td>
                                    <td><img src="../../layout/assets/img/dichvu/<?= $value->images ?>" width="100px" alt="" /></td>
                                    <td><?= $value->description ?></td>
                                    <td><?= $value->price ?></td>
                                    <td><?= $value->quantity ?></td>
                                    <td><?php if ($value->status == 0) {
                                        echo "Tạm khóa";
                                    } elseif ($value->status == 1) {
                                        echo "Kích hoạt";
                                    } ?></td>
                                    <td><?= $value->room_name ?></td>
                                    <td><?= $value->created_at ?></td>
                                    <td><?= $value->updated_at ?></td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </section>
            </form>
        </div>
    </div>
</div>