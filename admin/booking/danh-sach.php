<div class="danh_sach">
    <h3>
        DANH SÁCH BOOKING
    </h3>
    <form action="" method="post">
    <div class="action flex items-center">
        <a href="c_booking.php?add-booking" class="mx-3">Thêm</a>
        <button type="submit" name="delete_booking" onclick="return confirm('Bạn muốn xóa danh mục ko?')">Xóa</a>
    </div>

    <table border="1">
        <tr>
            <th>#</th>
            <th style="width: 65px;">booking_id</th>
            <th>check_in_date</th>
            <th>check_out_date</th>
            <th>status</th>
            <th>quantity_people</th>
            <th>total_amount</th>
            <th>id_user</th>
            <th>message</th>
            <th>phone</th>
            <th>email</th>
            <th>name</th>
            <th>created_at</th>
            <th>updated_at</th>
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
            <td>        <a href="c_booking.php?edit-booking&id=<?php echo $value->booking_id ?>" class="mx-3">Sửa</a></td>
        </tr>
        <?php endforeach ?>
    </table>
</div>
</form>

<div class="bieu_do">
    <h3>
        CÁC THỐNG KÊ VỀ BOOKS
    </h3>

    <div id="myfirstchart" style="height: 250px;"></div>

</div>

<script>
const body = document.querySelector("body"),
    modeToggle = body.querySelector(".mode-toggle");

let getMode = localStorage.getItem("mode");
if (getMode && getMode === "dark") {
    body.classList.toggle("dark");
}

modeToggle.addEventListener("click", () => {
    body.classList.toggle("dark");
    if (body.classList.contains("dark")) {
        localStorage.setItem("mode", "dark");
    } else {
        localStorage.setItem("mode", "light");
    }
});


new Morris.Donut({
    // ID of the element in which to draw the chart.
    element: 'myfirstchart',
    // Chart data records -- each entry in this array corresponds to a point on
    // the chart.
    data: [{
            year: '2008',
            value: 20
        },
        {
            year: '2009',
            value: 10
        },
        {
            year: '2010',
            value: 5
        },
        {
            year: '2011',
            value: 5
        },
        {
            year: '2012',
            value: 20
        }
    ],
    // The name of the data record attribute that contains x-values.
    xkey: 'year',
    // A list of names of data record attributes that contain y-values.
    ykeys: ['value'],
    // Labels for the ykeys -- will be displayed when you hover over the
    // chart.
    labels: ['Value']
});
</script>