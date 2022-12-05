<section class="dashboard w-full">
    <div class="w-full flex justify-between p-3 items-center">
        <i class="uil uil-bars sidebar-toggle text-3xl"></i>

        <div class="search-box">
            <i class="uil uil-search"></i>
            <input type="text" placeholder="Search here..." class="border-sky-400 px-3" />
        </div>

        <img src="./assets/img/anh3.jpg" alt="" width="50px" class="rounded-full" />
    </div>

    <div class="content">
        <div class="danh_sach">
            <h3 class="text-3xl text-sky-500">Thêm Phòng</h3>

            <div class="flex-from">
                <form action="" method="post" enctype="multipart/form-data">
                    <div>
                        <label for="">ID</label>
                        <input placeholder="ID sẽ tự động nhập" type="text" name="id" disabled
                            class="border rounded border-sky-400 w-full p-2" />
                    </div>

                    <div>
                        <label for="">Name</label>
                        <input value="<?= $_POST['name'] ?? "" ?>" type="text" name="name_room"
                            class="border rounded border-sky-400 w-full p-2" />
                        <?php if (isset($err['name_room'])) { ?>
                        <span class="text-red-500"><?= $err['name_room'] ?></span>
                        <?php } ?>
                    </div>
                    <div>
                        <label for="">Danh Mục</label>
                        <select name="category_id" id="" class="border rounded border-sky-400 w-full p-2">
                            <?php foreach ($categoryAll as $key => $value) : ?>
                            <option value="<?php echo $value->categories_id ?>"><?php echo $value->name ?></option>
                            <?php endforeach ?>
                        </select>
                        <?php if (isset($err['category_id'])) { ?>
                        <span class="text-red-500"><?= $err['category_id'] ?></span>
                        <?php } ?>
                    </div>
                    <div>
                        <label for="">Giá</label>
                        <input value="<?= $_POST['price_cate'] ?? "" ?>" type="text" name="price_room"
                            class="border rounded border-sky-400 w-full p-2" />
                    </div>
                    <div>
                        <label for="">Tầng</label>
                        <input value="<?= $_POST['location'] ?? "" ?>" type="text" name="location"
                            class="border rounded border-sky-400 w-full p-2" />
                        <?php if (isset($err['location'])) { ?>
                        <span class="text-red-500"><?= $err['location'] ?></span>
                        <?php } ?>
                    </div>
                    <div>
                        <label for="">Dịch Vụ</label>
                        <select name="service_id" id="" class="border rounded border-sky-400 w-full p-2">
                            <?php foreach ($service as $key => $value) : ?>
                            <option value="<?php echo $value->service_id ?>"><?php echo $value->name ?></option>
                            <?php endforeach ?>
                        </select>
                        <?php if (isset($err['service'])) { ?>
                        <span class="text-red-500"><?= $err['service'] ?></span>
                        <?php } ?>
                    </div>
                    <div>
                        <label for="">Đánh giá</label>
                        <select name="star" id="" class="border rounded border-sky-400 w-full p-2">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <?php if (isset($err['service'])) { ?>
                        <span class="text-red-500"><?= $err['service'] ?></span>
                        <?php } ?>
                    </div>
                    <div>
                        <label for="">Trạng thái</label>
                        <select name="status" id="" class="border rounded border-sky-400 w-full p-2">
                            <option value="0">Đang Sửa</option>
                            <option value="1">Còn Trống</option>
                            <option value="2">Đã Hết Phòng</option>
                        </select>
                    </div>
                    <div>
                        <label for="">Lượt Xem</label>
                        <input placeholder="" value="0" type="text" name="views" disabled
                            class="border rounded border-sky-400 w-full p-2" />
                    </div>
                    <div>
                        <label for="">Diện Tích</label>
                        <input value="<?= $_POST['acreage_room'] ?? "" ?>" type="text" name="acreage_room"
                            class="border rounded border-sky-400 w-full p-2" />
                        <?php if (isset($err['acreage_room'])) { ?>
                        <span class="text-red-500"><?= $err['acreage_room'] ?></span>
                        <?php } ?>
                    </div>
                    <div>
                        <label for="">Lượt Thích</label>
                        <input placeholder="" value="0" type="text" name="likes" disabled
                            class="border rounded border-sky-400 w-full p-2" />
                    </div>
                    <div>
                        <label for="">max_people</label>
                        <input value="<?= $_POST['quantity'] ?? "" ?>" type="text" name="quantity"
                            class="border rounded border-sky-400 w-full p-2" />
                        <?php if (isset($err['quantity'])) { ?>
                        <span class="text-red-500"><?= $err['quantity'] ?></span>
                        <?php } ?>
                    </div>
                    <div>
                        <label for="">Mô tả</label>
                        <textarea class="border rounded border-sky-400 w-full p-2" name="description" id="" cols="30"
                            rows="5"><?= $_POST['description'] ?? "" ?></textarea>
                        <?php if (isset($err['description'])) { ?>
                        <span class="text-red-500"><?= $err['description'] ?></span>
                        <?php } ?>
                    </div>

                    <div>
                        <label for="">Images</label>
                        <input type="file" name="image" class="w-full p-2" />
                        <?php if (isset($err['img'])) { ?>
                        <span class="text-red-500"><?= $err['img'] ?></span>
                        <?php } ?>
                    </div>
                    <div class="row-start-3 col-span-3 flex justify-between">
                        <button name="add_room" type="submit" class="border p-3 bg-blue-500 text-white rounded">
                            Thêm Phòng
                        </button>
                        <a class="inline-block border p-3 bg-blue-500 text-white rounded" href="../room/c_room.php">Xem
                            danh sách</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>