<section class="dash-content w-full">
    <div class="content">
        <div class="danh_sach">
            <h3 class="text-3xl text-sky-500">THÊM NHÂN VIÊN</h3>
            <form action="" method="post" enctype="multipart/form-data">
                <?php for ($i = 0; $i < $len_rows; $i++) { ?>
                    <h3 class="text-xl capitalize text-sky-500">nhân viên thứ <?= $i + 1 ?></h3>
                    <div class="flex-from">
                        <div>
                            <label for="">ID</label>
                            <input placeholder="ID sẽ tự động nhập" value="" type="text" name="id"
                                disabled class="border rounded border-sky-400 w-full p-2" />
                        </div>

                        <div>
                            <label for="">Tên Nhân Viên</label>
                            <input value="<?= $_POST['name_admin'][$i] ?? "" ?>" type="text" name="name_admin[]"
                                class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['name_admin'][$i])) { ?>
                            <span class="text-red-500"><?= $err['name_admin'][$i] ?></span>
                            <?php } ?>
                        </div>
                        <div>
                            <label for="">Email</label>
                            <input value="<?= $_POST['email'][$i] ?? "" ?>" type="text" name="email[]"
                                class="border rounded border-sky-400 w-full p-2" />
                                <?php if (isset($err['email'][$i])) { ?>
                            <span class="text-red-500"><?= $err['email'][$i] ?></span>
                            <?php } ?>
                        </div>
                        <div>
                            <label for="">Mật khẩu</label>
                            <input value="<?= $_POST['password'][$i] ?? "" ?>" type="text" name="password[]"
                                class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['password'][$i])) { ?>
                            <span class="text-red-500"><?= $err['password'][$i] ?></span>
                            <?php } ?>
                        </div>

                        <div>
                            <label for="">Địa Chỉ</label>
                            <input placeholder="" value="<?= $_POST['address'][$i] ?? "" ?>" type="text" name="address[]"
                                class="border rounded border-sky-400 w-full p-2" />
                                <?php if (isset($err['address'][$i])) { ?>
                            <span class="text-red-500"><?= $err['address'][$i] ?></span>
                            <?php } ?>
                        </div>

                        <div>
                            <label for="">Số Điện Thoại</label>
                            <input placeholder="" value="<?= $_POST['phone'][$i] ?? "" ?>" type="text" name="phone[]"
                                class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['phone'][$i])) { ?>
                                <span class="text-red-500"><?= $err['phone'][$i] ?></span>
                            <?php } ?>
                        </div>

                        <div>
                            <label for="">Giới Tính</label>
                            <!-- <input value="<?//= $_POST['gender'][$i] ?? "" ?>" type="text" name="gender[]"
                                class="border rounded border-sky-400 w-full p-2" /> -->
                            <select name="gender[]" id="" class="border rounded border-sky-400 w-full p-2">
                                <option <?php if (isset($_POST['gender'][$i]) && $_POST['gender'][$i] == "nữ") {
                                    echo "selected";
                                }?> value="nữ">Nữ</option>
                                <option <?php if (isset($_POST['gender'][$i]) && $_POST['gender'][$i] == "nam") {
                                    echo "selected";
                                } ?> value="nam">Nam</option>
                            </select>
                        </div>

                        <div>
                            <label for="">Ảnh</label>
                            <input type="file" name="image[]" class="w-full p-2" />
                            <?php if (isset($err['img'][$i])) { ?>
                                <span class="text-red-500"><?= $err['img'][$i] ?></span>
                            <?php } ?>
                        </div>

                        <div>
                            <label for="">Chức vụ</label>
                            <select name="id_permission[]" id="" class="border rounded border-sky-400 w-full p-2">
                                <?php foreach ($permission as $value) { ?>
                                    <option value="<?= $value->permission_id ?>"><?= $value->name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="space my-3 border-b-[2px]"></div>
                <?php } ?>
                
            
                <div class="col-span-3 flex justify-between">
                    <button name="add_admin" type="submit" class="p-3 bg-blue-500 text-white rounded">
                        Thêm Nhân Viên
                    </button>
                    <a class="inline-block p-3 bg-blue-500 text-white rounded" href="../room/c_room.php">Xem
                        danh sách</a>
                </div>
            </form>
        </div>
    </div>
</section>