<section class="dashboard">
    <div class="w-full flex justify-between p-3 items-center">
        <i class="uil uil-bars sidebar-toggle text-3xl"></i>

        <div class="search-box">
            <i class="uil uil-search"></i>
            <input type="text" placeholder="Search here..." class="border-sky-400 px-3">
        </div>

        <img src="./assets/img/anh3.jpg" alt="" width="50px" class="rounded-full">
    </div>

    <div class="content">
        <div class="danh_sach">
            <h3>
                DANH SÁCH QTV
            </h3>
            <form action="" method="post">
                <div class="action flex items-center">
                    <a href="c_admin.php?add-admin" class="mx-3">Thêm</a>
                    <button type="submit" name="delete_admin" onclick="return confirm('Bạn muốn xóa danh mục ko?')">Xóa Nhân Viên</button>
                    <button type="submit" name="edit_admin">Sửa thông tin nhân viên</button>
                </div>

                <table>
                    <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>Name</th>
                        <!-- <th>PassWord</th> -->
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Images</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Date</th>
                        <th>Status</th>
                        <!-- <th>Created_at</th>
                            <th>Updated_at</th> -->
                        <th></th>
                    </tr>
                    <?php foreach ($admin as $key => $value) : ?>
                        <tr>
                            <td>
                                <input type="checkbox" name="admin[]" value="<?php echo $value->admin_id ?>">
                            </td>
                            <td><?php echo $value->admin_id ?></td>
                            <td><?php echo $value->name ?></td>
                            <!-- <td>123</td> -->
                            <td><?php echo $value->gender ?></td>
                            <td><?php echo $value->email ?></td>
                            <td><img src="../layout/assets/img/<?php echo $value->thumbnail ?>" alt="" width="50px"></td>
                            <td><?php echo $value->address ?></td>
                            <td><?php echo $value->phone ?></td>
                            <td>11/11/2022</td>
                            <td>
                                <div class="action flex items-center">
                                    <a href="c_admin.php?edit_admin&id=<?php echo $value->admin_id ?>" class="mx-3">Sửa</a>
                                </div>
                            </td>
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