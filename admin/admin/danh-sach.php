<div class="content">
    <div>

        <div class="form-group shadow-lg flex">
            <i class="fa-solid fa-magnifying-glass mt-2"></i> <input type="text" name="find" class="form-control w-50">
            <button class="form-control w-25 bg-success ms-5">Tìm Kiếm</button>
        </div>
    </div>
    <div class="border border-[#D0D7DE] fs-6">
        <div class="pb-4 m-4">
            <h1 class="fs-6 text-primary"><i class="fa-solid fa-hotel mr-4"></i>Sơ Đồ Phòng</h1>
            <div class="col-sm-2">
                <label for="">Loại Phòng:</label>
                <select name="" id="" class="form-control">
                    <option value="">Tất Cả</option>
                    <option value="">Tất Cả</option>
                    <option value="">Tất Cả</option>
                    <option value="">Tất Cả</option>
                    <option value="">Tất Cả</option>
                </select>
            </div>
            <div class="my-4 row">
                <label for="">Trạng Thái Phòng</label>
                <div class="col-sm-2 m-4 hover-bg-[#78C2B5]">
                    <div>
                        <button
                            class="border btn btn-outline-success border-[#D0D7DE] w-100 h-100 text-primary px-3 py-1 shadow-lg">
                            Tất Cả
                        </button>
                    </div>
                </div>
                <div class="col-sm-2 m-4">
                    <div>
                        <button
                            class="border btn btn-outline-danger border-[#D0D7DE] w-100 h-100 text-primary px-3 py-1 shadow-lg">
                            <i class="fa-solid fa-person-walking-luggage text-primary"></i>
                            Phòng Đang Đến
                        </button>
                    </div>
                </div>
                <div class="col-sm-2 m-4">
                    <div>
                        <button
                            class="border border-[#D0D7DE] btn btn-outline-warning btn btn-outline-danger w-100 h-100 text-primary px-3 py-1 shadow-lg">
                            <i class="fa-solid fa-person-walking-luggage text-success"></i>

                            phòng Đang Sửa
                        </button>
                    </div>
                </div>
                <div class="col-sm-2 m-4">
                    <div>
                        <button
                            class="border border-[#D0D7DE] btn btn-outline-warning btn btn-outline-danger w-100 h-100 text-primary px-3 py-1 shadow-lg">
                            <i class="fa-solid fa-person-walking-luggage text-success"></i>


                            phòng Đang Sửa
                        </button>
                    </div>
                </div>
                <div class="col-sm-2 m-4">
                    <div>
                        <button
                            class="border border-[#D0D7DE] btn btn-outline-warning btn btn-outline-danger w-100 h-100 text-primary px-3 py-1 shadow-lg">
                            <i class="fa-solid fa-person-walking-luggage text-success"></i>


                            phòng Đang Sửa
                        </button>
                    </div>
                </div>
                <div class="col-sm-2 m-4">
                    <form action="" method="post">
                        <div>
                            <a
                                class="border border-[#D0D7DE] btn btn-outline-warning btn btn-outline-danger w-100 h-100 text-primary px-3 py-1 shadow-lg">
                                <i class="fa-solid fa-person-walking-luggage text-success"></i>


                                Sửa
                            </a>
                        </div>
                </div>
                <div class="col-sm-2 m-4">
                    <div>
                        <a href="c_room.php?add-room"
                            class="border border-[#D0D7DE] btn btn-outline-warning btn btn-outline-danger w-100 h-100 text-primary px-3 py-1 shadow-lg">
                            <i class="fa-solid fa-person-walking-luggage text-success"></i>
                            Thêm
                        </a>
                    </div>
                </div>
                <div class="col-sm-2 m-4">

                    <div>
                        <button type="submit" name="delete_room" onclick="return confirm('Bạn muốn xóa danh mục ko?')"
                            class="border border-[#D0D7DE] btn btn-outline-warning btn btn-outline-danger w-100 h-100 text-primary px-3 py-1 shadow-lg">
                            <i class="fa-solid fa-person-walking-luggage text-success"></i>
                            Xóa
                        </button>
                    </div>
                </div>
            </div>
            <div>
                *<a class="text-primary px-4">di chuyển con trỏ chọn hình ảnh để xem thông tin phòng</a>
            </div>
        </div>
        <form action="/danh-muc/index.php" method="post">
            <div class="row px-5">
                <?php foreach ($roomAll as $key => $value) : ?>

                <div class="col-sm-1  py-2 text-center py-5 h-25 w-25 <?php if($value->status == 1){
                        echo "bg-danger";
                    }else{
                        echo "bg-success";
                    }
                    
                    ?> bg-success border border-[#D0D7DE] shadow-lg rounded">
                    <td><input type="checkbox" name="room[]" class="rounded" value="<?= $value->room_id ?>" />
                        <a href="c_room.php?edit-room&id=<?php echo $value->room_id ?>"><i
                                class="fa-solid fa-pen-to-square"></i>Sửa</a>
                    </td>
                    <div class="  text-white">
                        <h1 class="fs-4"><?php echo $value->name?></h1>
                        <h2 class="fs-5"><?php if($value->status == 1){
                        echo "Tạm Khóa";
                    }else{
                        echo "Kích Hoạt";
                    }
                    
                    ?></h2>
                        <div class="row">
                            <div class="col-sm-6">
                                <h1 class="fs-4"><?php echo $value->quantity?></h1>
                                <i class="fa-solid fa-user"></i><i class="fa-solid fa-user"></i><i
                                    class="fa-solid fa-user"></i><i class="fa-solid fa-user"></i>
                            </div>

                            <div class="col-sm-6 bg-light rounded-circle w-25 text-center  ms-5">
                                <h3 class="fs-5 "><i class="fa-solid fa-check text-success"></i></h3>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endforeach ?>
        </form>
    </div>
</div>
<div class="col-sm-6">
    <h1 class="fs-5 text-center">Biểu Đồ Thống Kê Đặt Phòng Theo Tháng</h1>
    <div id="myfirstchart" style="height: 250px;"></div>
    <script>
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
</div>
</div>