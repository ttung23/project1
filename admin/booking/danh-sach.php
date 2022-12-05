<div class="dash-content">
    <div class="content">
        <div class="danh_sach">
            <h3>
                DANH SÁCH ĐƠN HÀNG
            </h3>
            <form action="" method="post">
                <div class="action flex items-center">
                    <a class="bg-green-500" href="c_booking.php?add-booking" class="mx-3">Thêm</a>
                    <button class="bg-red-500" type="submit" name="delete_booking" onclick="return confirm('Bạn muốn xóa danh mục ko?')">Xóa</a>
                </div>

                <table>
                    <tr>
                        <th>#</th>
                        <th style="width: 65px;">ID</th>
                        <th>Check in</th>
                        <th>check out</th>
                        <th>Trạng thái</th>
                        <th>Số lượng người</th>
                        <th>Tổng tiền</th>
                        <th>Người đặt</th>
                        <th>Tin nhắn</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Người nhận phòng</th>
                        <th>Ngày tạo</th>
                        <th>Ngày cập nhập</th>
                    </tr>
                    <?php foreach ($booking as $key => $value) : ?>
                        <tr>
                            <td>
                                <input type="checkbox" name="booking[]" Value="<?php echo $value->booking_id ?>" id="">
                            </td>
                            <td><?php echo $value->booking_id?></td>
                            <td><?php echo $value->check_in_date?></td>
                            <td><?php echo $value->check_out_date?></td>
                            <td><?php  if(($value->status) == 0){
                                    echo "Chờ xác Nhận";   
                            }else if(($value->status) == 1){
                                echo "Xác Nhận";
                            }else{
                                echo "Đã Khóa";
                            }
                                ?></td>
                            <td><?php echo $value->quantity_people ?></td>
                            <td><?php echo $value->total_amount ?></td>
                            <td><?php echo $value->quantity_people ?></td>
                            <td><?php echo $value->message ?></td>
                            <td><?php echo $value->phone ?></td>
                            <td><?php echo $value->email ?></td>
                            <td><?php echo $value->name ?></td>
                            <td><?php echo $value->create_at ?></td>
                            <td><?php echo $value->updated_at ?></td>
                        </tr>
                    <?php endforeach ?>
                </table>
            </form>
        </div>


        <div class="bieu_do">
            <h3>
                CÁC THỐNG KÊ VỀ ĐƠN HÀNG
            </h3>

            <div id="myfirstchart" style="height: 250px;"></div>

        </div>
    </div>
</div>