<div class="content">

    <div class="top">
        <i class="uil uil-bars sidebar-toggle"></i>

        <div class="search-box">
            <i class="uil uil-search"></i>
            <input type="text" placeholder="Search here...">
        </div>

        <img src="assets/img/anh1.jpg" alt="">
    </div>

    <div class="het-user">
        <div class="u">
            <a href="">User mới</a>
            <h2>32.44 %</h2>
            <div style="color: #4267b2; align-items: center; margin-left: 3px">
                <i class="fa-solid fa-caret-up"></i> -15 %
            </div>
        </div>
        <div class="u">
            <a href="">User cũ</a>
            <h2>2.44 % <span></span></h2>
            <div style="color: red; align-items: center; margin-left: 3px">
                <i class="fa-solid fa-caret-down"></i> -7 %
            </div>
        </div>
        <div class="u">
            <a href="">Tổng lượng user</a>
            <h2>12.44 %</h2>
            <div style="color: #4267b2; align-items: center; margin-left: 3px">
                <i class="fa-solid fa-caret-up"></i> -17 %
            </div>
        </div>
        <div class="u">
            <a href="">Số User biến động trong tháng</a>
            <h2>126</h2>
            <div style="color: red; align-items: center; margin-left: 3px">
                <i class="fa-solid fa-caret-down"></i> -2 %
            </div>
        </div>
    </div>

    <div class="table">
        <form action="" method="post">
            <div class="action">
                <a href="../../admin/danh-muc/c_danh_muc.php?add_cate">Thêm danh mục</a>
                <a href="../../admin/danh-muc/c_danh_muc.php?edit_cate">Sửa danh mục</a>
                <button type="submit" name="delete_cate" onclick="return confirm('Bạn muốn xóa danh mục ko?')">Xóa danh
                    mục</button>
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
                    <td><?= $value->status ?></td>
                    <td><?= $value->description ?></td>
                    <td><img src="../../layout/assets/img/<?= $value->images ?>" alt="" /></td>
                    <td><?= $value->created_at ?></td>

                </tr>
                <?php } ?>
            </table>
        </form>
    </div>

    <div class="bieu_do">
        <h3>
            CÁC THỐNG KÊ VỀ DANH MỤC
        </h3>

        <div id="myfirstchart" style="height: 250px;"></div>

    </div>
</div>