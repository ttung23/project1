<div class="dash-content">
    <div class="content">
        <div class="danh_sach">
            <h3>
                DANH SÁCH USERS
            </h3>

            <form action="" method="post">
                <div class="action">
                    <a class="bg-green-500" href="../../admin/danh-muc/c_danh_muc.php?add_cate">Thêm danh mục</a>
                    <button class="bg-yellow-500" type="submit" name="edit_cate">Sửa danh mục</button>
                    <button class="bg-red-500" type="submit" name="delete_cate" onclick="return confirm('Bạn muốn xóa danh mục ko?')">Xóa danh
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
                            <td><img src="../../layout/assets/img/categories/<?= $value->images ?>" alt="" /></td>
                            <td><?= $value->created_at ?></td>

                        </tr>
                    <?php } ?>
                </table>
            </form>
        </div>


    </div>

    <div class="bieu_do">
        <h3>
            CÁC THỐNG KÊ VỀ DANH MỤC
        </h3>

        <div id="myfirstchart" style="height: 250px;"></div>

    </div>
</div>