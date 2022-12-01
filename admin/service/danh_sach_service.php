<div class="border border-[#D0D7DE] fs-6">
    <form action="" method="post">
        <div class="pb-4 m-4">
            <h1 class="fs-6 text-primary"><i class="fa-solid fa-hotel mr-4"></i>Sơ Đồ Phòng</h1>
            <div class="col-sm-2">
                <label for="">Loại Dịch Vụ:</label>
                <select name="" id="" class="form-control">
                    <option value="">Tất Cả</option>
                    <option value="">Tất Cả</option>
                    <option value="">Tất Cả</option>
                    <option value="">Tất Cả</option>
                    <option value="">Tất Cả</option>
                </select>
            </div>
            <div class="my-4 row">
                <label for="">Trạng Thái service</label>
                <div class="col-sm-2 m-4 hover-bg-[#78C2B5]">
                    <div>
                        <a href="../service/c_service.php?add_service" class="border btn btn-outline-success border-[#D0D7DE] w-100 h-100 text-primary px-3 py-1 shadow-lg">
                            Thêm
                        </a>
                    </div>
                </div>
                <div class="col-sm-2 m-4">
                    <div>
                        <button class="border btn btn-outline-danger border-[#D0D7DE] w-100 h-100 text-primary px-3 py-1 shadow-lg">
                            <i class="fa-solid fa-person-walking-luggage text-primary"></i>
                            Sửa
                        </button>
                    </div>
                </div>
                <div class="col-sm-2 m-4">
                    <div>
                        <button type="submit" name="btn_delete_service" class="border border-[#D0D7DE] btn btn-outline-warning btn btn-outline-danger w-100 h-100 text-primary px-3 py-1 shadow-lg">
                            <i class="fa-solid fa-person-walking-luggage text-success"></i>
                            xóa
                        </button>
                    </div>
                </div>
            </div>
            <div>
                *<a class="text-primary px-4">di chuyển con trỏ chọn hình ảnh để xem thông tin phòng</a>
            </div>
        </div>

        <section>
            <div class="row">
                <table class="table table-hover">
                    <tr class="" scope="col">
                        <th class="">#</th>
                        <th class="table-primary">ID</th>
                        <th class="">Name</th>
                        <th class="table-primary">Images</th>
                        <th class="">description</th>
                        <th class="table-primary">price</th>
                        <th class="">quantity</th>
                        <th class="table-primary">status</th>
                        <th class="">room_id</th>
                        <th class="table-primary">Ngày tạo</th>
                        <th class="table-primary">Ngày cập nhập</th>
                    </tr>
                    <?php foreach ($service as $value) { ?>
                        <tr>
                            <td><input type="checkbox" name="service[]" value="<?= $value->service_id ?>"></td>
                            <td class="table-success"><?= $value->service_id ?></td>
                            <td class="table-danger"><?= $value->name ?></td>
                            <td class="table-warning"><img src="../../layout/assets/img/<?= $value->images ?>" width="100px" alt="" /></td>
                            <td class="table-info"><?= $value->description ?></td>
                            <td class="table-secondary"><?= $value->price ?></td>
                            <td class="table-danger"><?= $value->quantity ?></td>
                            <td class="table-warning"><?= $value->status ?></td>
                            <td class="table-info"><?= $value->room_name ?></td>
                            <td class="table-secondary"><?= $value->created_at ?></td>
                            <td class="table-secondary"><?= $value->updated_at ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </section>
    </form>
</div>