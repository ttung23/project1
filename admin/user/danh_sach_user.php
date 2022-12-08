<div class="dash-content">
    <div class="content">
        <div class="danh_sach">
            <h3>
                DANH SÁCH USERS
            </h3>

            <form action="" method="post">
                <!-- <div class="action">
                    <button class="bg-green-500" type="submit" name="unlock_user">Unlock</button>
                    <button class="bg-yellow-500" type="submit" name="edit_user">Sửa thông tin người dùng</button>
                    <button class="bg-red-500" type="submit" name="block_user">Block</button>
                </div> -->

                <div class="action">
                    <div class="grid grid-cols-4 gap-[20px] my-3">
                        <div class="">
                            <a href="c_user.php" class="bg-[#0194f3] capitalize text-center btn-outline- px-3 py-[12px] shadow-lg w-[200px]">
                                Tất Cả
                            </a>
                        </div>

                        <div class="">
                            <a href="c_user.php?status=1" class="bg-green-500 capitalize text-center btn-outline- px-3 py-[12px] shadow-lg w-[200px]">
                                tài khoản kích hoạt
                            </a>
                        </div>

                        <div class="">
                            <a href="c_user.php?status=0" class="bg-yellow-500 capitalize text-center btn-outline- px-3 py-[12px] shadow-lg w-[200px]">
                                tài khóa bị khóa
                            </a>
                        </div>

                        <div class="">
                            
                        </div>

                        <div class="">
                            <button type="submit" name="unlock_user" class="capitalize bg-green-500 text-center text-white px-3 py-[12px] shadow-lg w-[200px]">
                                kích hoạt
                            </button>
                        </div>

                        <div class="">
                            <button type="submit" name="block_user" class="capitalize bg-red-500 text-center px-3 py-[12px] shadow-lg w-[200px]">
                                Khóa
                            </button>
                        </div>

                        <div></div>
                        <div></div>

                        <div class="">
                            <button type="submit" name="edit_user" class="capitalize bg-yellow-500 text-center px-3 py-[12px] shadow-lg w-[200px]">
                                Sửa thông tin
                            </button>
                        </div>

                        <div class="">
                            <button type="submit" name="delete_user" class="capitalize bg-rose-700 text-center px-3 py-[12px] shadow-lg w-[200px]" onclick="return confirm('Bạn muốn xóa người dùng đã chọn không?')">
                                Xóa
                            </button>
                        </div>
                    </div>
                </div>

                <table>
                    <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>Họ tên</th>
                        <th>UserName</th>
                        <th>Giới tính</th>
                        <th>Email</th>
                        <th>Ảnh đại diện</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Ngày sinh</th>
                        <th>Kích hoạt</th>
                        <th>Ngày tạo</th>
                        <th>Ngày cập nhập</th>
                    </tr>

                    <?php foreach ($users as $value) { ?>
                        <tr>
                            <td>
                                <input type="checkbox" name="users[]" value="<?= $value->user_id ?>" id="">
                            </td>
                            <td><?= $value->user_id ?></td>
                            <td><?= $value->name ?></td>
                            <td><?= $value->username ?></td>
                            <td><?= $value->gender ?></td>
                            <td><?= $value->email ?></td>
                            <td><img src="../../layout/assets/img/users/<?= $value->images ?>" alt="" width="50px"></td>
                            <td><?= $value->address ?></td>
                            <td><?= $value->phone ?></td>
                            <td><?= $value->date ?></td>
                            <td>
                                <?php if ($value->status == 1) {
                                    echo "Kích hoạt";
                                } elseif ($value->status == 0) {
                                    echo "Khóa";
                                } ?>
                            </td>
                            <td><?= $value->created_at ?></td>
                            <td><?= $value->updated_at ?></td>
                        </tr>
                    <?php } ?>

                </table>
            </form>
        </div>
    </div>
</div>