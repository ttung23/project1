<section class="dash-content">
    

    <div class="content">
        <div class="danh_sach">
            <h3>
                DANH SÁCH QTV
            </h3>
            <form action="" method="post">
                <div class="action flex items-center">
                    <a class="bg-green-500" href="c_admin.php?add-admin" class="mx-3">Thêm nhân viên</a>
                    <button class="bg-yellow-500" type="submit" name="edit_admin">Sửa thông tin nhân viên</button>
                    <button class="bg-red-500" type="submit" name="delete_admin" onclick="return confirm('Bạn muốn xóa danh mục ko?')">Xóa Nhân Viên</button>
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
        </div>
        </form>
        <div class="bieu_do">
            <h3>
                CÁC THỐNG KÊ VỀ ADMIN
            </h3>

            <div id="myfirstchart" style="height: 250px;"></div>

        </div>
    </div>
</section>


</main>