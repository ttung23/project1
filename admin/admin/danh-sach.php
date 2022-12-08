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

                        <div class="">
                            <a class="capitalize bg-green-500 text-center px-3 py-[12px] shadow-lg w-[200px]" href="c_admin.php?add-admin" class="mx-3">Thêm nhân viên</a>                    
                        </div>

                        <div class="">
                            <button type="submit" name="edit_admin" class="capitalize bg-yellow-500 text-center px-3 py-[12px] shadow-lg w-[200px]">
                                Sửa thông tin
                            </button>
                        </div>

                        <div class="">
                            <button type="submit" name="delete_admin" class="capitalize bg-rose-700 text-center px-3 py-[12px] shadow-lg w-[200px]" onclick="return confirm('Bạn muốn xóa nhân viên đã chọn không?')">
                                Xóa
                            </button>
                        </div>
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