<div class="dash-content">
    <div class="content">
        <div class="danh_sach">
            <h3>
                DANH SÁCH CHỨC VỤ
            </h3>
            <form action="" method="post">
                <div class="action">
                    <a class="bg-green-500" href="c_permission.php?add-per">Thêm</a>
                    <button class="bg-red-500" type="submit" name="delete_per" onclick="return confirm('Bạn muốn xóa danh mục ko?')">Xóa</button>
                </div>

                <table>
                    <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>Tên chức vụ</th>
                        <th>Mô tả</th>
                        <th>Ngày tạo</th>
                    </tr>
                    <?php foreach ($permission as $key => $value) : ?>
                    <tr>
                        <td>
                            <input type="checkbox" name="permission[]" value="<?php echo $value->permission_id ?>" id="">
                        </td>
                        <td><?php echo $value->permission_id ?></td>
                        <td><?php echo $value->name ?></td>
                        <td><?php echo $value->description ?></td>
                        <td><?php echo $value->create_at ?></td>
                        
                    </tr>
                    <?php endforeach ?>
            </form>

            </table>
        </div>
    </div>

    <div class="bieu_do">
        <h3>
            CÁC THỐNG KÊ VỀ CHỨC VỤ
        </h3>

        <div id="myfirstchart" style="height: 250px;"></div>

    </div>
</div>