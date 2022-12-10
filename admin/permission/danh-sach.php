<div class="dash-content">
    <div class="content">
        <div class="danh_sach">
            <h3>
                DANH SÁCH CHỨC VỤ
            </h3>
            <form action="" method="post">
                <div class="action">
                    <!-- <a class="bg-green-500" href="c_permission.php?add-per">Thêm</a> -->
                    <div class="add cursor-pointer capitalize bg-green-500 text-center px-3 py-[12px] shadow-lg w-[200px]"  data-modal-toggle="aa">
                        Thêm chức vụ
                    </div>
                    <button class="bg-yellow-500 capitalize" name="edit_per" type="submit">Sửa thông tin</button>
                    <button class="bg-red-500 capitalize" type="submit" name="delete_per" onclick="return confirm('Bạn muốn xóa chức vụ đã chọn không?')">Xóa</button>
                </div>

                <div id="aa" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 md:inset-0 h-modal">
                    <div class="bg-white p-5">
                        <div class="flex_tt text-center py-3">
                            <img class="inline-block" src="../../layout/assets/img/logo/logo_chuong.png" width="50px" alt="ảnh logo">
                            <span class="font-semibold text-[20px]">StayyInn</span>
                        </div>

                        <h4>NHẬP SỐ BẢN GHI MUỐN THÊM</h4>
                        <input class="p-3 border border-[#0194f3] text-center outline-none rounded-[8px] w-full" type="number" name="quantity_rows" min="1" step="1" id="">
                        <?php if (isset($loi)) { ?>
                            <span class="text-red-700"><?= $loi ?></span>
                        <?php } ?>
                        <button name="add_per" class="block text-white rounded-[8px] mt-2 bg-[#0194f3] p-2 mx-auto" type="submit">Xác nhận</button>

                    </div>
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
</div>