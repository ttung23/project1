<div class="dash-content">
    <div class="content">
        <div class="danh_sach border border-[#D0D7DE] fs-6">
            <h3>DANH SÁCH DỊCH VỤ</h3>
            <form action="" method="post">
                <div class="action">
                    <a href="?add_service" class="bg-green-500" type="submit" name="unlock_user">Thêm dịch vụ</a>
                    <button class="bg-yellow-500" type="submit" name="unlock_user">Sửa thông tin dịch vụ</button>
                    <button class="bg-red-500" type="submit" name="block_user">Xóa dịch vụ</button>
                </div>

                <section>
                    <div class="">
                        <table class="">
                            <tr class="">
                                <th>#</th>
                                <th>ID</th>
                                <th>Tên dịch vụ</th>
                                <th>Ảnh</th>
                                <th>Mô tả</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Trạng thái</th>
                                <th>Phòng</th>
                                <th>Ngày tạo</th>
                                <th>Ngày cập nhập</th>
                            </tr>
                            <?php foreach ($service as $value) { ?>
                                <tr>
                                    <td><input type="checkbox" name="service[]" value="<?= $value->service_id ?>"></td>
                                    <td><?= $value->service_id ?></td>
                                    <td><?= $value->name ?></td>
                                    <td><img src="../../layout/assets/img/<?= $value->images ?>" width="100px" alt="" /></td>
                                    <td><?= $value->description ?></td>
                                    <td><?= $value->price ?></td>
                                    <td><?= $value->quantity ?></td>
                                    <td><?= $value->status ?></td>
                                    <td><?= $value->room_name ?></td>
                                    <td><?= $value->created_at ?></td>
                                    <td><?= $value->updated_at ?></td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </section>
            </form>
        </div>
    </div>

    <div class="bieu_do">
        <h3>
            CÁC BIỂU ĐỒ VỀ DỊCH VỤ
        </h3>

        <div id="myfirstchart" style="height: 250px;"></div>
    </div>
</div>