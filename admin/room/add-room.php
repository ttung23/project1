<section class="dash-content w-full">
    <div class="content">
        <div class="danh_sach">
            <h3 class="text-3xl text-sky-500">THÊM PHÒNG</h3>

            <form action="" method="post" enctype="multipart/form-data">
                <div class="flex-from">
                
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
                        <input value="<?= $_POST['price_room'] ?? "" ?>" type="text" name="price_room"
                            class="border rounded border-sky-400 w-full p-2" />
                        
                        <?php if (isset($err['price_room'])) { ?>
                            <span class="text-red-500"><?= $err['price_room'] ?></span>
                        <?php } ?>
                    </div>

                    <div>
                        <label for="">Phòng hạng (sao)</label>
                        <input value="<?= $_POST['star'] ?? "" ?>" type="text" name="star"
                            class="border rounded border-sky-400 w-full p-2" />

                        <?php if (isset($err['star'])) { ?>
                            <span class="text-red-500"><?= $err['star'] ?></span>
                        <?php } ?>
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
                        <label for="">Diện Tích</label>
                        <input value="<?= $_POST['acreage_room'] ?? "" ?>" type="text" name="acreage_room"
                            class="border rounded border-sky-400 w-full p-2" />
                        <?php if (isset($err['acreage_room'])) { ?>
                        <span class="text-red-500"><?= $err['acreage_room'] ?></span>
                        <?php } ?>
                    </div>
                    <div>
                        <label for="">Tổng số lượng</label>
                        <input value="<?= $_POST['quantity'] ?? "" ?>" type="text" name="quantity"
                            class="border rounded border-sky-400 w-full p-2" />
                        <?php if (isset($err['quantity'])) { ?>
                        <span class="text-red-500"><?= $err['quantity'] ?></span>
                        <?php } ?>
                    </div>
                    <div>
                        <label for="">Ảnh</label>
                        <input type="file" name="image" class="w-full p-2" />
                        <?php if (isset($err['img'])) { ?>
                        <span class="text-red-500"><?= $err['img'] ?></span>
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
                        <button name="add_room" type="submit" class="p-3 bg-blue-500 text-white rounded">
                            Thêm Phòng
                        </button>
                        <a class="inline-block p-3 bg-blue-500 text-white rounded" href="../room/c_room.php">Xem
                            danh sách</a>
                    </div>
                
                </div>
            </form>
        </div>
    </div>
</section>