<div class="dash-content">
    <div class="content">
        <div class="danh_sach">
            <h3>
                DANH SÁCH USERS
            </h3>

            <form action="" method="post">
                <div class="action">
                    <button class="bg-green-500" type="submit" name="unlock_user">Unlock</button>
                    <button class="bg-yellow-500" type="submit" name="unlock_user">Sửa thông tin user</button>
                    <button class="bg-red-500" type="submit" name="block_user">Block</button>
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
                    </tr>

                    <?php foreach ($users as $value) { ?>
                        <tr>
                            <td>
                                <input type="checkbox" name="user[]" value="<?= $value->user_id ?>" id="">
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
                            <td><?= $value->status ?></td>
                            <td><?= $value->created_at ?></td>
                        </tr>
                    <?php } ?>

                </table>
            </form>
        </div>
    </div>

    <div class="bieu_do">
        <h3>
            CÁC THỐNG KÊ VỀ USERS
        </h3>

        <div id="myfirstchart" style="height: 250px;"></div>
    </div>
</div>