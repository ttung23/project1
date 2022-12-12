<section class="dash-content w-full">
    <div class="content">
        <div class="danh_sach">
            <h3 class="text-3xl text-sky-500">Sửa thông tin phòng</h3>
            <form action="" method="post" enctype="multipart/form-data">
                <?php for ($i = 0; $i < $len_room_edit; $i++) { ?>
                    <div class="flex-from">
                        <div>
                            <label for="">ID</label>
                            <input placeholder="ID sẽ tự động nhập" value="<?= $room_edit[$i]->room_id ?>" type="text" name="id"
                                disabled class="border rounded border-sky-400 w-full p-2" />
                        </div>

                        <div>
                            <label for="">Name</label>
                            <input value="<?= $room_edit[$i]->name ?>" type="text" name="name_room[]"
                                class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['name_room'][$i])) { ?>
                                <span class="text-red-500"><?= $err['name_room'][$i] ?></span>
                            <?php } ?>
                        </div>

                        <div>
                            <label for="">Danh Mục</label>
                            <select name="category_id[]" id="" class="border rounded border-sky-400 w-full p-2">
                                <?php foreach ($categoryAll as $key => $value) { ?>
                                    <option <?= $room_edit[$i]->id_category_room == $value->categories_id ? "selected" : "" ?> value="<?php echo $value->categories_id ?>"><?php echo $value->name ?></option>
                                <?php } ?>
                            </select>
                            <?php if (isset($err['category_id'][$i])) { ?>
                                <span class="text-red-500"><?= $err['category_id'][$i] ?></span>
                            <?php } ?>
                        </div>

                        <div>
                            <label for="">Giá</label>
                            <input value="<?= $room_edit[$i]->price ?>" type="text" name="price_room[]"
                                class="border rounded border-sky-400 w-full p-2" />
                        </div>

                        <div>
                            <label for="">Tầng</label>
                            <input value="<?= $room_edit[$i]->location ?>" type="text" name="location[]"
                                class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['location'][$i])) { ?>
                                <span class="text-red-500"><?= $err['location'][$i] ?></span>
                            <?php } ?>
                        </div>

                        <div>
                            <label for="">Hạng sao</label>
                            <select name="star[]" id="" class="border rounded border-sky-400 w-full p-2">
                                <option <?= $room_edit[$i]->star == 1 ? "selected" : "" ?> value="1">1</option>
                                <option <?= $room_edit[$i]->star == 2 ? "selected" : "" ?> value="2">2</option>
                                <option <?= $room_edit[$i]->star == 3 ? "selected" : "" ?> value="3">3</option>
                                <option <?= $room_edit[$i]->star == 4 ? "selected" : "" ?> value="4">4</option>
                                <option <?= $room_edit[$i]->star == 5 ? "selected" : "" ?> value="5">5</option>
                            </select>
                            <?php if (isset($err['service'][$i])) { ?>
                                <span class="text-red-500"><?= $err['service'][$i] ?></span>
                            <?php } ?>
                        </div>

                        <div>
                            <label for="">Diện Tích</label>
                            <input value="<?= $room_edit[$i]->acreage ?>" type="text" name="acreage_room[]"
                                class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['acreage_room'][$i])) { ?>
                                <span class="text-red-500"><?= $err['acreage_room'][$i] ?></span>
                            <?php } ?>
                        </div>

                        <div>
                            <label for="">Tổng số lượng</label>
                            <input value="<?= $room_edit[$i]->quantity ?>" type="text" name="quantity[]"
                                class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['quantity'][$i])) { ?>
                                <span class="text-red-500"><?= $err['quantity'][$i] ?></span>
                            <?php } ?>
                        </div>

                        <div>
                            <label for="">Ảnh hiện tại</label>
                            <input type="hidden" name="image[]" value="<?= $room_edit[$i]->thumbnail ?>" class="w-full p-2" />
                            <img src="../../layout/assets/img//product/<?= $room_edit[$i]->thumbnail ?>" alt="" width="150px">
                            <?php if (isset($err['img'][$i])) { ?>
                                <span class="text-red-500"><?= $err['img'][$i] ?></span>
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
                            <textarea class="border rounded border-sky-400 w-full p-2" name="description[]" id="" cols="30"
                                rows="5" value=""><?= $room_edit[$i]->description ?></textarea>
                            <?php if (isset($err['description'][$i])) { ?>
                                <span class="text-red-500"><?= $err['description'][$i] ?></span>
                            <?php } ?>
                        </div>                        
                    </div>
                    <div class="space my-3 border-b-[2px]"></div>
                <?php } ?>
                <div class=" col-span-3 flex justify-between">
                    <button name="btn_edit_room" type="submit" class="p-3 bg-blue-500 text-white rounded">
                        Sửa Phòng
                    </button>
                    <a class="inline-block p-3 bg-blue-500 text-white rounded" href="../room/c_room.php">Xem danh sách</a>
                </div>
            </form>
        </div>
    </div>
</section>
