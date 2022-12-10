<div class="bang-bk-dtail">
    <h4 class="text-align text-2xl ml-4 pt-4  mb-4">Lịch Sử Đặt Hàng</h4>
    <div class="">
        <div class="d-flex justify-content-between align-items-center mb-3">

            <table class="table-2">
                <tr style="  height: 50px;  color: white;">
                    <th style="width: 205px; padding-left:10px ">Tên Phòng</th>
                    <th>Check_in_date</th>
                    <th>Check_out_date</th>
                    <th>Tổng Tiền</th>
                </tr>
                <?php foreach ($bookinguserde as $key => $value) : ?>
                    <tr style="  height: 50px; ">
                        <td style=" padding-left:20px; font-size: 20px; font-weight: bold;"><?php echo $value->tenphong ?></td>
                        <td><?php echo $value->check_in_date ?></td>
                        <td><?php echo $value->check_out_date ?></td>
                        <td><?php echo $value->total_amount ?></td>
                        <td>
                        </td>
                    </tr>

                <?php endforeach ?>
            </table>
        </div>
    </div>
    <div>
    </div>

</div>