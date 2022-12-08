<div class="dash-content">
    <div class="content">
        <div class="danh_sach">
            <h3>
                DANH SÁCH TIN TỨC
            </h3>

            <form action="" method="post">

                <!-- <div class="action">
                    <a class="bg-green-500" href="../../admin/news/c_news.php?add_new">Thêm bài viết</a>
                    <button class="bg-yellow-500" name="edit_new" type="submit">Sửa bài viết</button>
                    <button name="btn_delete_new" class="bg-red-500" type="submit">Xóa bài viết</button>
                    <button name="btn_approve_new" class="bg-lime-500" type="submit">Duyệt bài viết</button>
                    <button name="btn_prive_new" class="bg-rose-700" type="submit">Ẩn bài viết</button>
                </div> -->

                <div class="action">
                    <div class="grid grid-cols-4 gap-[20px] my-3">
                        <div class="">
                            <a href="c_news.php" class="bg-[#0194f3] capitalize text-center btn-outline- px-3 py-[12px] shadow-lg w-[200px]">
                                Tất Cả
                            </a>
                        </div>

                        <div class="">
                            <a href="c_news.php?status=1" class="bg-green-500 capitalize text-center btn-outline- px-3 py-[12px] shadow-lg w-[200px]">
                                bài viết công khai
                            </a>
                        </div>

                        <div class="">
                            <a href="c_news.php?status=0" class="bg-red-500 capitalize text-center btn-outline- px-3 py-[12px] shadow-lg w-[200px]">
                                bài viết chờ duyệt
                            </a>
                        </div>

                        <div class="">
                            <a href="c_news.php?status=2" class="bg-red-500 capitalize text-center btn-outline- px-3 py-[12px] shadow-lg w-[200px]">
                                bài viết bị ẩn
                            </a>
                        </div>

                        <div class="">
                            <button type="submit" name="btn_approve_new" class="capitalize bg-green-500 text-center text-white px-3 py-[12px] shadow-lg w-[200px]">
                                duyệt
                            </button>
                        </div>

                        <div class="">
                            <button type="submit" name="btn_prive_new" class="capitalize bg-red-500 text-center px-3 py-[12px] shadow-lg w-[200px]">
                                ẩn
                            </button>
                        </div>

                        <div></div>
                        <div></div>

                        <div class="">
                            <a href="?add_new" class="capitalize bg-green-500 text-center px-3 py-[12px] shadow-lg w-[200px]" type="submit">Thêm bài viết</a>
                        </div>

                        <div class="">
                            <button type="submit" name="edit_new" class="capitalize bg-yellow-500 text-center px-3 py-[12px] shadow-lg w-[200px]">
                                Sửa thông tin
                            </button>
                        </div>

                        <div class="">
                            <button type="submit" name="btn_delete_new" class="capitalize bg-rose-700 text-center px-3 py-[12px] shadow-lg w-[200px]" onclick="return confirm('Bạn muốn xóa người dùng đã chọn không?')">
                                Xóa
                            </button>
                        </div>
                    </div>
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
                            <td><img src="../../layout/assets/img/news/<?= $value->images ?>" alt="" /></td>
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
                                } else if ($value->status == 2) {
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
    </div>
</div>