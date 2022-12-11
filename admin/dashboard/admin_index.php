<div class="dash-content">
    <div class="overview">
        <div class="title">
            <i class="uil uil-estate"></i>
            <span class="text">Trang chủ</span>
        </div>

        <div class="boxes">
            <div class="box box1">
                <i class="uil uil-thumbs-up"></i>
                <span class="text">Tổng Like</span>
                <span class="number"><?= number_format($tong_like->tong_like, 0) ?></span>
            </div>
            <div class="box box2">
                <i class="uil uil-comments"></i>
                <span class="text">Tổng Comment</span>
                <span class="number"><?= number_format($tong_cmt->tong_cmt, 0) ?></span>
            </div>
            <div class="box box3">
                <i class="uil uil-user"></i>
                <span class="text">Tổng Người Dùng</span>
                <span class="number"><?= number_format($tong_user->tong_user, 0) ?></span>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="danh_sach">
            <div>
                <div>
                    <p class="text-[24px]">THỐNG KÊ LƯỢT ĐẶT PHÒNG THEO THÁNG</p>
                    <div id="myfirstchart" style="height: 250px;"></div>
                </div>

                <div class="grid grid-cols-2 gap-8">
                    <div>
                        <p class="text-[20px]">THỐNG KÊ DOANH THU THEO THÁNG</p>
                        <div id="myfirstchart2" style="height: 250px;"></div>
                    </div>
                    
                    <div>
                        <p class="text-[20px]">THỐNG KÊ LƯỢT ĐĂNG KÝ THEO THÁNG</p>
                        <div id="myfirstchart3" style="height: 250px;"></div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

</div>

<script>
    new Morris.Area({
        // ID of the element in which to draw the chart.
        element: 'myfirstchart',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [
            // { month: '1', value: 10 },
            // { month: '2', value: 15 },
            // { month: '3', value: 20 },
            // { month: '4', value: 25 },
            // { month: '5', value: 30 },
            // { month: '6', value: 35 },
            // { month: '7', value: 40 },
            // { month: '8', value: 45 },
            // { month: '9', value: 50 },
            // { month: '10', value: 55 },
            // { month: '11', value: 60 },
            // { month: '12', value: 20 },

            <?php for ($i = 1; $i <= 12; $i++) { ?>
                { month: '<?= $i ?>', tong_luot_dat: <?= $thongke[$i]->tong_luot_dat ?>},
            <?php } ?>
        ],
        // The name of the data record attribute that contains x-values.
        xkey: 'month',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['tong_luot_dat'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Tổng lượt đặt theo tháng']
    });

    new Morris.Bar({
        // ID of the element in which to draw the chart.
        element: 'myfirstchart2',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [
            // { month: '2008', tong_tien: 20 },
            // { month: '2009', tong_tien: 10 },
            // { month: '2010', tong_tien: 5 },
            // { month: '2011', tong_tien: 5 },
            // { month: '2012', tong_tien: 20 }
            <?php for ($i = 1; $i <= 12; $i++) { ?>
                { month: '<?= $i ?>', tong_tien: <?= $tong_tien[$i]->tong_doanh_thu ?? 0 ?>},
            <?php } ?>
        ],

        //, tong_tien: <?= $tong_tien[$i]->tong_doanh_thu ?? 0 ?>
        // The name of the data record attribute that contains x-values.
        xkey: 'month',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['tong_tien'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Doanh thu theo tháng']
    });

    new Morris.Bar({
        // ID of the element in which to draw the chart.
        element: 'myfirstchart3',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [
            // { month: '2008', tong_tien: 20 },
            // { month: '2009', tong_tien: 10 },
            // { month: '2010', tong_tien: 5 },
            // { month: '2011', tong_tien: 5 },
            // { month: '2012', tong_tien: 20 }
            <?php for ($i = 1; $i <= 12; $i++) { ?>
                { month: '<?= $i ?>', so_luong: <?= $user_by_month[$i]->tong_user ?? 0 ?>},
            <?php } ?>
        ],

        //, tong_tien: <?= $user_by_month[$i]->tong_user ?? 0 ?>
        // The name of the data record attribute that contains x-values.
        xkey: 'month',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['so_luong'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Người dùng đăng ký theo tháng']
    });
</script>