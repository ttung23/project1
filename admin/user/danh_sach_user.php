<section class="dashboard">
    <div class="w-full flex justify-between p-3 items-center">
        <i class="uil uil-bars sidebar-toggle text-3xl"></i>

        <div class="search-box">
            <i class="uil uil-search"></i>
            <input type="text" placeholder="Search here..." class="border-sky-400 px-3">
        </div>

        <img src="./assets/img/anh3.jpg" alt="" width="50px" class="rounded-full">
    </div>

    <div class="dash-content">
        <div class="overview">
            <div class="title">
                <i class="uil uil-estate"></i>
                <span class="text">USERS</span>
            </div>

            <div class="boxes">
                <div class="box box1">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="text">Total Likes</span>
                    <span class="number">50,120</span>
                </div>
                <div class="box box2">
                    <i class="uil uil-comments"></i>
                    <span class="text">Comments</span>
                    <span class="number">20,120</span>
                </div>
                <div class="box box3">
                    <i class="uil uil-share"></i>
                    <span class="text">Total Share</span>
                    <span class="number">10,120</span>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="danh_sach">
            <h3>
                DANH SÁCH USERS
            </h3>

            <form action="" method="post">
                <div class="action">
                    <button type="submit" name="block_user">Block</button>
                    <button type="submit" name="unlock_user">Unlock</button>
                </div>

                <table>
                    <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>Họ tên</th>
                        <th>UserName</th>
                        <th>GIới tính</th>
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
                            <td><img src="../../layout/assets/img/<?= $value->images ?>" alt="" width="50px"></td>
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
</section>