<div class="dash-content">
    <div class="content">

    <div class="danh_sach">
        <h3>
            DANH SÁCH BÌNH LUẬN CỦA NGƯỜI DÙNG
        </h3>

        <form action="" method="post">
            <div class="action">
                <button class="bg-red-500" type="submit" name="btn_delete_cmt" onclick="return confirm('Bạn muốn xóa bình luận ko?')">Xóa bình luận</button>
            </div>

            <table>
                <tr>
                    <th>#</th>
                    <th style="width: 65px;">ID</th>
                    <th>Người bình luận</th>
                    <th style="width: 420px;">Nội dung</th>
                    <th>Đánh giá sao</th>
                    <th>Phòng</th>
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
                        <td><?= $value->created_at ?></td>
                    </tr>
                <?php } ?>
            </table>
        </form>
    </div>

    <div class="bieu_do">
        <h3>
            CÁC THỐNG KÊ VỀ BÌNH LUẬN CỦA NGƯỜI DÙNG
        </h3>

        <div id="myfirstchart" style="height: 250px;"></div>

    </div>
    </div>
</div>