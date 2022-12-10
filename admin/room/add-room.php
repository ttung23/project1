<section class="dash-content w-full">
    <div class="content">
        <div class="danh_sach">
            <h3 class="text-3xl text-sky-500">THÊM PHÒNG</h3>

            <form action="" method="post" enctype="multipart/form-data">
                <?php for($i = 0; $i < $len_rows; $i++) { ?>
                    <h3 class="text-xl capitalize text-sky-500">phòng thứ <?= $i + 1 ?></h3>
                    <div class="flex-from">
                        <div>
                            <label for="">ID</label>
                            <input placeholder="ID sẽ tự động nhập" type="text" name="id" disabled
                                class="border rounded border-sky-400 w-full p-2" />
                        </div>

                        <div>
                            <label for="">Tên phòng</label>
                            <input placeholder="Tên phòng..." value="<?= $_POST['name'][$i] ?? "" ?>" type="text" name="name_room[]"
                                class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['name_room'][$i])) { ?>
                            <span class="text-red-500"><?= $err['name_room'][$i] ?></span>
                            <?php } ?>
                        </div>
                        <div>
                            <label for="">Danh Mục</label>
                            <select name="category_id[]" id="" class="border rounded border-sky-400 w-full p-2">
                                <?php foreach ($categoryAll as $key => $value) : ?>
                                    <option value="<?php echo $value->categories_id ?>"><?php echo $value->name ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div>
                            <label for="">Giá</label>
                            <input placeholder="Giá phòng mỗi đêm..." value="<?= $_POST['price_room'][$i] ?? "" ?>" type="text" name="price_room[]"
                                class="border rounded border-sky-400 w-full p-2" />
                            
                            <?php if (isset($err['price_room'][$i])) { ?>
                                <span class="text-red-500"><?= $err['price_room'][$i] ?></span>
                            <?php } ?>
                        </div>

                        <div>
                            <label for="">Phòng hạng (sao)</label>
                            <input placeholder="Phòng hạng..." value="<?= $_POST['star'][$i] ?? "" ?>" type="text" name="star[]"
                                class="border rounded border-sky-400 w-full p-2" />

                            <?php if (isset($err['star'][$i])) { ?>
                                <span class="text-red-500"><?= $err['star'][$i] ?></span>
                            <?php } ?>
                        </div>

                        <div>
                            <label for="">Tầng</label>
                            <input placeholder="Số tầng..." value="<?= $_POST['location'][$i] ?? "" ?>" type="text" name="location[]"
                                class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['location'][$i])) { ?>
                                <span class="text-red-500"><?= $err['location'][$i] ?></span>
                            <?php } ?>
                        </div>

                        <div>
                            <label for="">Diện Tích</label>
                            <input placeholder="Diện tích..." value="<?= $_POST['acreage_room'][$i] ?? "" ?>" type="text" name="acreage_room[]"
                                class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['acreage_room'][$i])) { ?>
                                <span class="text-red-500"><?= $err['acreage_room'][$i] ?></span>
                            <?php } ?>
                        </div>
                        <div>
                            <label for="">Số lượng người</label>
                            <input placeholder="Số lượng người..." value="<?= $_POST['quantity'][$i] ?? "" ?>" type="text" name="quantity[]"
                                class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['quantity'][$i])) { ?>
                                <span class="text-red-500"><?= $err['quantity'][$i] ?></span>
                            <?php } ?>
                        </div>
                        <div>
                            <label for="">Ảnh</label>
                            <input type="file" name="image[]" class="w-full p-2" />
                            <?php if (isset($err['img'][$i])) { ?>
                            <span class="text-red-500"><?= $err['img'][$i] ?></span>
                            <?php } ?>
                        </div>
                        
                        <div class="col-span-3">
                            <label for="">Mô tả</label>
                            <textarea placeholder="Mô tả của phòng..." class="border rounded border-sky-400 w-full p-2" name="description[]" id="ten" cols="30"
                                rows="5"><?= $_POST['description'][$i] ?? "" ?></textarea>
                            <script>CKEDITOR.replace('ten');</script>

                            <?php if (isset($err['description'][$i])) { ?>
                                <span class="text-red-500"><?= $err['description'][$i] ?></span>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="space my-3 border-b-[2px]"></div>
                <?php } ?>
                
                <div class="col-span-3 flex justify-between">
                    <button name="add_room" type="submit" class="p-3 bg-blue-500 text-white rounded">
                        Thêm Phòng
                    </button>
                    <a class="inline-block p-3 bg-blue-500 text-white rounded" href="../room/c_room.php">Xem
                        danh sách</a>
                </div>
            </form>

            
        </div>
    </div>
</section>