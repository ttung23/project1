<div class="dash-content">
    <div class="content">
        <div class="danh_sach">
            <h3>
                DANH SÁCH BÌNH LUẬN CỦA NGƯỜI DÙNG
            </h3>

            <form action="" method="post">
                <!-- <div class="action">
                    <button class="bg-red-500" type="submit" name="btn_delete_cmt" onclick="return confirm('Bạn muốn xóa bình luận ko?')">Xóa bình luận</button>
                </div> -->

                <div class="action">
                    <div class="grid grid-cols-4 gap-[20px] my-3">
                        <div class="">
                            <a href="c_cmt.php" class="bg-[#0194f3] capitalize text-center btn-outline- px-3 py-[12px] shadow-lg w-[200px]">
                                Tất Cả
                            </a>
                        </div>

                        <div class="">
                            <a href="c_cmt.php?status=0" class="bg-green-500 capitalize text-center btn-outline- px-3 py-[12px] shadow-lg w-[200px]">
                                bình luận chờ duyệt
                            </a>
                        </div>

                        <div class="">
                            <a href="c_cmt.php?status=1" class="bg-red-500 capitalize text-center btn-outline- px-3 py-[12px] shadow-lg w-[200px]">
                                bình luận đã duyệt
                            </a>
                        </div>

                        <div>
                            <a href="c_cmt.php?status=0" class="bg-red-500 capitalize text-center btn-outline- px-3 py-[12px] shadow-lg w-[200px]">
                                bình luận đã chặn
                            </a>
                        </div>

                        <div class="">
                            <button type="submit" name="btn_duyet" class="capitalize bg-green-500 text-center text-white px-3 py-[12px] shadow-lg w-[200px]">
                                duyệt
                            </button>
                        </div>

                        <div class="">
                            <button type="submit" name="btn_huy" class="capitalize bg-red-500 text-center px-3 py-[12px] shadow-lg w-[200px]">
                                chặn
                            </button>
                        </div>

                        <div></div>
                        <div></div>

                        <div class="">
                            <button type="submit" name="btn_delete_cmt" class="capitalize bg-rose-700 text-center px-3 py-[12px] shadow-lg w-[200px]" onclick="return confirm('Bạn muốn xóa danh mục đã chọn không?')">
                                Xóa
                            </button>
                        </div>
                    </div>
                </div>

                <table>
                    <tr>
                        <th>#</th>
                        <th style="width: 65px;">ID</th>
                        <th>Người bình luận</th>
                        <th style="width: 420px;">Nội dung</th>
                        <th>Đánh giá sao</th>
                        <th>Phòng</th>
                        <th>Trạng thái</th>
                        <th>Ngày bình luận</th>
                    </tr>

                    <?php foreach ($comments as $value) { ?>
                        <tr>
                            <td>
                                <input type="checkbox" name="comment[]" value="<?= $value->vote_room_id ?>" id="">
                            </td>
                            <td><?= $value->vote_room_id ?></td>
                            <td><?= $value->name ?></td>
                            <td>
                                <p>
                                    <?= $value->comment ?>
                                </p>
                            </td>
                            <td><?= $value->star ?></td>
                            <td><?= $value->room_name ?></td>
                            <td><?php if ($value->status == 0) {
                                echo "Chờ duyệt";
                            } elseif ($value->status == 1) {
                                echo "Duyệt";
                            } else if ($value->status == 2) {
                                echo "Chặn";
                            } ?></td>
                            <td><?= $value->created_at ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </form>
        </div>
    </div>
</div>