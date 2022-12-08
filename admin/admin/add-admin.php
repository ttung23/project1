<section class="dash-content w-full">
    <div class="content">
        <div class="danh_sach">
            <h3 class="text-3xl text-sky-500">THÊM QTV</h3>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="flex-from">
                    <div>
                        <label for="">ID</label>
                        <input placeholder="ID sẽ tự động nhập" value="" type="text" name="id"
                            disabled class="border rounded border-sky-400 w-full p-2" />
                    </div>

                    <div>
                        <label for="">Tên QTV</label>
                        <input value="<?= $_POST['name_admin'] ?? "" ?>" type="text" name="name_admin"
                            class="border rounded border-sky-400 w-full p-2" />
                        <?php if (isset($err['name_admin'])) { ?>
                        <span class="text-red-500"><?= $err['name_admin'] ?></span>
                        <?php } ?>
                    </div>
                    <div>
                        <label for="">Email</label>
                        <input value="<?= $_POST['email'] ?? "" ?>" type="text" name="email"
                            class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['email'])) { ?>
                        <span class="text-red-500"><?= $err['email'] ?></span>
                        <?php } ?>
                    </div>
                    <div>
                        <label for="">Mật khẩu</label>
                        <input value="<?= $_POST['password'] ?? "" ?>" type="text" name="password"
                            class="border rounded border-sky-400 w-full p-2" />
                        <?php if (isset($err['password'])) { ?>
                        <span class="text-red-500"><?= $err['password'] ?></span>
                        <?php } ?>
                    </div>

                    <div>
                        <label for="">Địa Chỉ</label>
                        <input placeholder="" value="<?= $_POST['address'] ?? "" ?>" type="text" name="address"
                            class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['address'])) { ?>
                        <span class="text-red-500"><?= $err['address'] ?></span>
                        <?php } ?>
                    </div>

                    <div>
                        <label for="">Số Điện Thoại</label>
                        <input placeholder="" value="<?= $_POST['phone'] ?? "" ?>" type="text" name="phone"
                            class="border rounded border-sky-400 w-full p-2" />
                        <?php if (isset($err['phone'])) { ?>
                            <span class="text-red-500"><?= $err['phone'] ?></span>
                        <?php } ?>
                    </div>

                    <div>
                        <label for="">Giới Tính</label>
                        <input value="<?= $_POST['gender'] ?? "" ?>" type="text" name="gender"
                            class="border rounded border-sky-400 w-full p-2" />
                        <?php if (isset($err['gender'])) { ?>
                        <span class="text-red-500"><?= $err['gender'] ?></span>
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
                        <label for="">Chức vụ</label>
                        <select name="id_permission" id="" class="border rounded border-sky-400 w-full p-2">
                            <?php foreach ($permission as $value) { ?>
                                <option value="<?= $value->permission_id ?>"><?= $value->name ?></option>
                            <?php } ?>
                        </select>
                        <?php if (isset($err['img'])) { ?>
                            <span class="text-red-500"><?= $err['img'] ?></span>
                        <?php } ?>
                    </div>
            
                    <div class="col-span-3 flex justify-between">
                        <button name="add_admin" type="submit" class="p-3 bg-blue-500 text-white rounded">
                            Thêm QTV
                        </button>
                        <a class="inline-block p-3 bg-blue-500 text-white rounded" href="../room/c_room.php">Xem
                            danh sách</a>
                    </div>
                
                </div>
            </form>
        </div>
    </div>
</section>