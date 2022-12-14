<section class="dash-content">
    <div class="content">
        <div class="danh_sach">
            <h3>
                DANH SÁCH QTV
            </h3>
            <form action="" method="post">
                <!-- <div class="action flex items-center">
                    <a class="bg-green-500" href="c_admin.php?add-admin" class="mx-3">Thêm nhân viên</a>
                    <button class="bg-yellow-500" type="submit" name="edit_admin">Sửa thông tin nhân viên</button>
                    <button class="bg-red-500" type="submit" name="delete_admin" onclick="return confirm('Bạn muốn xóa danh mục ko?')">Xóa Nhân Viên</button>
                </div> -->

                <div class="action">
                    <div class="grid grid-cols-4 gap-[20px] my-3">
                        <div class="">
                            <a href="c_admin.php" class="bg-[#0194f3] capitalize text-center btn-outline- px-3 py-[12px] shadow-lg w-[200px]">
                                Tất Cả
                            </a>
                        </div>

                        <div class="">
                            <a href="c_admin.php?id_permission=2" class="bg-green-500 capitalize text-center btn-outline- px-3 py-[12px] shadow-lg w-[200px]">
                                Quản lý
                            </a>
                        </div>

                        <div class="">
                            <a href="c_admin.php?id_permission=1" class="bg-red-500 capitalize text-center btn-outline- px-3 py-[12px] shadow-lg w-[200px]">
                                Quản trị viên
                            </a>
                        </div>

                        <div>
                            <a href="c_admin.php?id_permission=3" class="bg-red-500 capitalize text-center btn-outline- px-3 py-[12px] shadow-lg w-[200px]">
                                Lễ tân
                            </a>
                        </div>

                        <div class="add cursor-pointer capitalize bg-green-500 text-center px-3 py-[12px] shadow-lg w-[200px]"  data-modal-toggle="aa">
                            <!-- <a class="capitalize bg-green-500 text-center px-3 py-[12px] shadow-lg w-[200px]" href="c_admin.php?add-admin" class="mx-3">Thêm nhân viên</a> -->
                            thêm
                        </div>

                        <div class="">
                            <button type="submit" name="edit_admin" class="capitalize bg-yellow-500 text-center px-3 py-[12px] shadow-lg w-[200px]">
                                Sửa
                            </button>
                        </div>

                        <div class="">
                            <button type="submit" name="delete_admin" class="capitalize bg-rose-700 text-center px-3 py-[12px] shadow-lg w-[200px]" onclick="return confirm('Bạn muốn xóa nhân viên đã chọn không?')">
                                Xóa
                            </button>
                        </div>

                        <div></div>

                        <div>
                            <button type="submit" name="unlock_admin" class="capitalize bg-green-500 text-center px-3 py-[12px] shadow-lg w-[200px]">
                                Mở khóa / Xác nhận
                            </button>
                        </div>

                        <div>
                            <button type="submit" name="block_admin" class="capitalize bg-red-500 text-center px-3 py-[12px] shadow-lg w-[200px]">
                                Khóa
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
                        <button name="add_admin" class="block text-white rounded-[8px] mt-2 bg-[#0194f3] p-2 mx-auto" type="submit">Xác nhận</button>

                    </div>
                </div>

                <table>
                    <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>Tên</th>
                        <!-- <th>PassWord</th> -->
                        <th>Giới tính</th>
                        <th>Email</th>
                        <th>Ảnh đại diện</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Chức vụ</th>
                        <th>Trạng thái</th>
                        <th>Ngày tạo</th>
                        <th>Ngày cập nhập</th>
                    </tr>
                    <?php foreach ($admin as $key => $value) : ?>
                        <tr>
                            <td>
                                <input type="checkbox" name="admin[]" value="<?php echo $value->admin_id ?>">
                            </td>
                            <td><?php echo $value->admin_id ?></td>
                            <td><?php echo $value->name ?></td>
                            <td><?php echo $value->gender ?></td>
                            <td><?php echo $value->email ?></td>
                            <td><img src="../../layout/assets/img/admins/<?php echo $value->thumbnail ?>" alt="" width="50px"></td>
                            <td><?php echo $value->address ?></td>
                            <td><?php echo $value->phone ?></td>
                            <td><?= $value->name_permission ?></td>
                            <td><?php 
                                if ($value->status == 0) {
                                    echo "Chờ xác nhận";
                                } elseif ($value->status == 1) {
                                    echo "Xác nhận";
                                } elseif ($value->status == 2) {
                                    echo "Tạm khóa";
                                }
                            ?></td>
                            <td><?= $value->created_at ?></td>
                            <td><?= $value->updated_at ?></td>
                        </tr>
                    <?php endforeach ?>
                </table>
            </form>
        </div>
    </div>
</section>


</main>