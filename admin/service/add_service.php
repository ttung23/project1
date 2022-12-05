<section class="dash-content w-full">
    <div class="content">
        <div class="danh_sach">
            <h3 class="text-3xl text-sky-500">THÊM DỊCH VỤ</h3>

            <div class="flex-from">
                <form action="" method="post" enctype="multipart/form-data">
                    <div>
                        <label for="">ID</label>
                        <input placeholder="ID sẽ tự động nhập" type="text" name="id" disabled class="border rounded border-sky-400 w-full p-2" />
                    </div>

                    <div>
                        <label for="">Tên danh mục</label>
                        <input value="<?= $_POST['name_service'] ?? "" ?>" type="text" name="name_service" class="border rounded border-sky-400 w-full p-2" />
                        <?php if (isset($err['name_service'])) { ?>
                            <span class="text-red-500"><?= $err['name_service'] ?></span>
                        <?php } ?>
                    </div>

                    <div>
                        <label for="">Ảnh</label>
                        <input type="file" name="image" class="w-full p-2" />
                        <?php if (isset($err['img'])) { ?>
                            <span class="text-red-500"><?= $err['img'] ?></span>
                        <?php } ?>
                    </div>

                    <div>
                        <label for="">Giá</label>
                        <input value="<?= $_POST['price'] ?? "" ?>" type="text" name="price" class="border rounded border-sky-400 w-full p-2" />
                        <?php if (isset($err['price'])) { ?>
                            <span class="text-red-500"><?= $err['price'] ?></span>
                        <?php } ?>
                    </div>

                    <div>
                        <label for="">Số lượng người</label>
                        <input value="<?= $_POST['quantity'] ?? "" ?>" type="text" name="quantity" class="border rounded border-sky-400 w-full p-2" />
                        <?php if (isset($err['quantity'])) { ?>
                            <span class="text-red-500"><?= $err['quantity'] ?></span>
                        <?php } ?>
                    </div>

                    <div>
                        <label for="">Phòng</label>
                        <input value="<?= $_POST['id_room'] ?? "" ?>" type="text" name="id_room" class="border rounded border-sky-400 w-full p-2" />
                        <?php if (isset($err['id_room'])) { ?>
                            <span class="text-red-500"><?= $err['id_room'] ?></span>
                        <?php } ?>
                    </div>

                    <div class="col-span-3">
                        <label for="">Mô tả</label>
                        <textarea class="border rounded border-sky-400 w-full p-2" name="description" id="ten" cols="30"
                            rows="5"><?= $_POST['description'] ?? "" ?></textarea>
                        <script>CKEDITOR.replace('ten');</script>

                        <?php if (isset($err['description'])) { ?>
                        <span class="text-red-500"><?= $err['description'] ?></span>
                        <?php } ?>
                    </div>

                    <div class="col-span-3 flex justify-between">
                        <button name="btn_add_service" type="submit" class="p-3 bg-blue-500 text-white rounded">
                            Thêm dịch vụ
                        </button>
                        <a class="inline-block p-3 bg-blue-500 text-white rounded" href="../danh-muc/c_danh_muc.php">Xem danh sách</a>
                    </div>
                </form>


            </div>
        </div>
    </div>
</section>