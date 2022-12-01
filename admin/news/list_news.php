<div class="content">
    <div class="danh_sach">
        <h3>
            DANH SÁCH TIN TỨC
        </h3>

        <form action="" method="post">

            <div class="py-5">
                <button name="btn_delete_new" class="border border-2 rounded-md my-3 px-6 py-3 border-blue-500 text-blue-800 hover:bg-blue-500 hover:text-white" type="submit">Xóa</button>
                <button name="" class="border border-2 rounded-md my-3 px-6 py-3 border-blue-500 text-blue-800 hover:bg-blue-500 hover:text-white" type="submit">Sửa</button>
                <button name="btn_approve_new" class="border border-2 rounded-md my-3 px-6 py-3 border-blue-500 text-blue-800 hover:bg-blue-500 hover:text-white" type="submit">Duyệt bài viết</button>
                <button name="btn_prive_new" class="border border-2 rounded-md my-3 px-6 py-3 border-blue-500 text-blue-800 hover:bg-blue-500 hover:text-white" type="submit">Ẩn bài viết</button>
                <a href="../../admin/news/c_news.php?add_new">Thêm tin tức</a>
            </div>

            <table>
                <tr>
                    <th>#</th>
                    <th style="width: 65px;">ID</th>
                    <th>Tiêu đề</th>
                    <th>Ảnh</th>
                    <th>Nội dung</th>
                    <th>Trạng thái</th>
                    <th>Người đăng</th>
                    <th>Ngày viết</th>
                    <th>Ngày cập nhập</th>
                </tr>
                <?php foreach ($news as $value) { ?>
                    <tr>
                        <td>
                            <input type="checkbox" name="news[]" value="<?= $value->news_id ?>" id="">
                        </td>
                        <td><?= $value->news_id ?></td>
                        <td><?= $value->name ?></td>
                        <td><img src="../../layout/assets/img/<?= $value->images ?>" alt="" /></td>
                        <td>
                            <p>
                                <?= $value->content ?>
                            </p>
                        </td>
                        <td><?php 
                            if ($value->status == 0) {
                                echo "Chờ duyệt";
                            } else if ($value->status == 1) {
                                echo "Duyệt";
                            } else {
                                echo "Ẩn";
                            }
                        ?></td>
                        <td><?= $value->admin_name ?></td>
                        <td><?= $value->created_at ?></td>
                        <td><?= $value->updated_at ?></td>
                    </tr>
                <?php } ?>
            </table>
        </form>
    </div>
    <div class="bieu_do">
        <h3>
            THỐNG KÊ TIN TỨC
        </h3>
    </div>
</div>