<section class="dash-content w-full">
    <div class="content">
        <div class="danh_sach">
            <h3 class="text-3xl text-sky-500">SỬA DỊCH VỤ</h3>

            <form action="" method="post" enctype="multipart/form-data">
                <?php for ($i = 0; $i < $len_service_edit; $i++) { ?>
                    <div class="flex-from">
                        <div>
                            <label for="">ID</label>
                            <input placeholder="ID sẽ tự động nhập" type="text" name="id" value="<?= $service_edit[$i]->service_id ?>" disabled class="border rounded border-sky-400 w-full p-2" />
                        </div>

                        <div>
                            <label for="">Tên danh mục</label>
                            <input value="<?= $service_edit[$i]->name ?>" type="text" name="name_service[]" class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['name_service'][$i])) { ?>
                                <span class="text-red-500"><?= $err['name_service'][$i] ?></span>
                            <?php } ?>
                        </div>

                        <div>
                            <label for="">Ảnh hiện tại</label>
                            <input type="hidden" name="image[]" value="<?= $service_edit[$i]->images ?>" id="">
                            <img src="../../layout/assets/img/dichvu/<?= $service_edit[$i]->images ?>" alt="" width="150px">
                        </div>

                        <div>
                            <label for="">Ảnh</label>
                            <input type="file" name="image[]" class="w-full p-2" />
                            <?php if (isset($err['img'][$i])) { ?>
                                <span class="text-red-500"><?= $err['img'][$i] ?></span>
                            <?php } ?>
                        </div>

                        <div>
                            <label for="">Giá</label>
                            <input value="<?= $service_edit[$i]->price ?>" type="text" name="price[]" class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['price'][$i])) { ?>
                                <span class="text-red-500"><?= $err['price'][$i] ?></span>
                            <?php } ?>
                        </div>

                        <div>
                            <label for="">Số lượng người</label>
                            <input value="<?= $service_edit[$i]->quantity ?>" type="text" name="quantity[]" class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['quantity'][$i])) { ?>
                                <span class="text-red-500"><?= $err['quantity'][$i] ?></span>
                            <?php } ?>
                        </div>

                        <div>
                            <label for="">Phòng</label>
                            <input value="<?= $service_edit[$i]->id_room ?>" type="text" name="id_room[]" class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['id_room'][$i])) { ?>
                                <span class="text-red-500"><?= $err['id_room'][$i] ?></span>
                            <?php } ?>
                        </div>

                        <div class="col-span-3">
                            <label for="">Mô tả</label>
                            <textarea class="border rounded border-sky-400 w-full p-2" name="description[]" id="ten" cols="30"
                                rows="5"><?= $service_edit[$i]->description ?></textarea>
                            <script>CKEDITOR.replace('ten');</script>

                            <?php if (isset($err['description'][$i])) { ?>
                                <span class="text-red-500"><?= $err['description'][$i] ?></span>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="space my-3 border-b-[2px]"></div>
                <?php } ?>
                <div class="col-span-3 flex justify-between">
                    <button name="btn_edit_service" type="submit" class="p-3 bg-blue-500 text-white rounded">
                        Sửa dịch vụ
                    </button>
                    <a class="inline-block p-3 bg-blue-500 text-white rounded" href="../danh-muc/c_danh_muc.php">Xem danh sách</a>
                </div>
            </form>
        </div>
    </div>
</section>