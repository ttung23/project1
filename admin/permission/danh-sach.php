<div class="content">
    <div class="danh_sach">
        <h3>
            DANH SÁCH PERMISSION
        </h3>
        <form action="" method="post">
            <div class="action">
                <a href="c_permission.php?add-per" class="mx-3">Thêm</a>
                <button type="submit" name="delete_per" onclick="return confirm('Bạn muốn xóa danh mục ko?')"
                    class="m-5">Xóa</a>
            </div>

            <table>
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>created_at</th>
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
                    <td> <a href="c_permission.php?edit-permission&id=<?php echo $value->permission_id ?>"
                            class="mx-3">Sửa</a>
                    </td>
                </tr>
                <?php endforeach ?>
        </form>

        </table>
    </div>

    <div class="bieu_do">
        <h3>
            CÁC THỐNG KÊ VỀ PERMISSION
        </h3>

        <div id="myfirstchart" style="height: 250px;"></div>

    </div>
</div>