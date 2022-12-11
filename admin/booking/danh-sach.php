<div class="dash-content">
    <div class="content">
        <div class="danh_sach">
            <h3>
                DANH SÁCH ĐƠN HÀNG
            </h3>
            <form action="" method="post">
                <div class="action">
                    <div class="grid grid-cols-4 gap-[20px] my-3">
                        <div class="">
                            <a href="c_booking.php" class="bg-[#0194f3] capitalize text-center btn-outline- px-3 py-[12px] shadow-lg w-[200px]">
                                Tất Cả
                            </a>
                        </div>

                        <div class="">
                            <a href="c_booking.php?status=1" class="bg-green-500 capitalize text-center btn-outline- px-3 py-[12px] shadow-lg w-[200px]">
                                Đơn xác nhận
                            </a>
                        </div>

                        <div class="">
                            <a href="c_booking.php?status=0" class="bg-yellow-500 capitalize text-center btn-outline- px-3 py-[12px] shadow-lg w-[200px]">
                                Đơn chờ xác nhận
                            </a>
                        </div>

                        <div class="">
                            <a href="c_booking.php?status=2" class="bg-red-500 capitalize text-center btn-outline- px-3 py-[12px] shadow-lg w-[200px]">
                                Đơn hủy
                            </a>
                        </div>

                        <div class="">
                            <button type="submit" name="approve_booking" class="capitalize bg-green-500 text-center text-white px-3 py-[12px] shadow-lg w-[200px]">
                                xác nhận
                            </button>
                        </div>

                        <div class="">
                            <button type="submit" name="unapproved_booking" class="capitalize bg-red-500 text-center px-3 py-[12px] shadow-lg w-[200px]">
                                Hủy
                            </button>
                        </div>

                        <div class="">
                            <button type="submit" name="delete_booking" class="capitalize bg-rose-700 text-center px-3 py-[12px] shadow-lg w-[200px]" onclick="return confirm('Bạn muốn xóa đơn hàng không?')">
                                Xóa
                            </button>
                        </div>
                    </div>
                </div>

                <table>
                    <tr>
                        <th>#</th>
                        <th style="width: 65px;">ID</th>
                        <th>Ngày nhận phòng</th>
                        <th>Ngày trả phòng</th>
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
                            }else if (($value->status) == 2){
                                echo "Đã Hủy";
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
    </div>
</div>