<section class="dash-content w-full">
    <div class="content">
        <div class="danh_sach">
            <h3 class="text-3xl text-sky-500">THÊM ẢNH VÀO PHÒNG</h3>

            <form action="" method="post" enctype="multipart/form-data">
                <?php for($i = 0; $i < $len_rows; $i++) { ?>
                    <h3 class="text-xl capitalize text-sky-500">phòng thứ <?= $i + 1 ?></h3>
                    <div class="flex-from">
                        <div>
                            <label for="">ID</label>
                            <input placeholder="ID sẽ tự động nhập" type="text" name="id" disabled value="<?= $room_add_img[$i]->room_id ?>"
                                class="border rounded border-sky-400 w-full p-2" />
                        </div>

                        <div>
                            <label for="">Tên phòng</label>
                            <input disabled placeholder="Tên phòng..." value="<?= $room_add_img[$i]->name ?>" type="text" name="name_room[]"
                                class="border rounded border-sky-400 w-full p-2" />
                        </div>

                        <?php for ($j = 0; $j < $_SESSION['add_img_room']; $j++) { ?>
                            <div class="col-span-3">
                                <label for="">Ảnh <?= $j + 1 ?>:</label>
                                <select name="imgs[]" id="">
                                    <?php foreach ($img as $key=>$value) { ?>
                                        <option style="background-image:url(../../layout/assets/img/product/<?= $value->image ?>)" value="<?= $value->id_list ?>">
                                            <?= $value->image ?>
                                        </option>
                                    <?php } ?>
                                </select>
                                <?php if (isset($err['img'][$i])) { ?>
                                    <span class="text-red-500"><?= $err['img'][$i] ?></span>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="space my-3 border-b-[2px]"></div>
                <?php } ?>
                
                <div class="col-span-3 flex justify-between">
                    <button name="add_img_room" type="submit" class="p-3 bg-blue-500 text-white rounded">
                        Thêm Ảnh
                    </button>
                    <a class="inline-block p-3 bg-blue-500 text-white rounded" href="../room/c_room.php">Xem
                        danh sách</a>
                </div>
            </form>

            
        </div>
    </div>
</section>