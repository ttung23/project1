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
            <h3 class="text-3xl text-sky-500">Sửa Phòng</h3>
            <div class="flex-from">
                <form action="" method="post" enctype="multipart/form-data">
                    <?php for ($i = 0; $i < $len_admin_edit; $i++) { ?>
                        <div>
                            <label for="">ID</label>
                            <input placeholder="ID sẽ tự động nhập" value="<?= $admins[$i]->admin_id ?>" type="text" name="id[]" disabled class="border rounded border-sky-400 w-full p-2" />
                        </div>

                        <div>
                            <label for="">Name</label>
                            <input value="<?= $admins[$i]->name ?>" type="text" name="name_admin[]" class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['name_admin'])) { ?>
                                <span class="text-red-500"><?= $err['name_admin'] ?></span>
                            <?php } ?>
                        </div>
                        <div>
                            <label for="">email</label>
                            <input value="<?= $admins[$i]->email  ?>" type="text" name="email[]" class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['email'])) { ?>
                                <span class="text-red-500"><?= $err['email'] ?></span>
                            <?php } ?>
                        </div>
                        <div>
                            <label for="">password</label>
                            <input value="<?= $admins[$i]->password ?>" type="text" name="password[]" class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['password'])) { ?>
                                <span class="text-red-500"><?= $err['password'] ?></span>
                            <?php } ?>
                        </div>
                        <div>
                            <label for="">Trạng thái</label>
                            <select name="status[]" id="" class="border rounded border-sky-400 w-full p-2">
                                <option value="0">Đang Sửa</option>
                                <option value="1">Còn Trống</option>
                                <option value="2">Đã Hết Phòng</option>
                            </select>
                        </div>
                        <div>
                            <label for="">Địa Chỉ</label>
                            <input placeholder="" value="<?= $admins[$i]->address ?>" type="text" name="address[]" class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['address'])) { ?>
                                <span class="text-red-500"><?= $err['address'] ?></span>
                            <?php } ?>
                        </div>
                        <div>
                            <label for="">Số Điện Thoại</label>
                            <input placeholder="" value="<?= $admins[$i]->phone ?>" type="text" name="phone[]" class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['phone'])) { ?>
                                <span class="text-red-500"><?= $err['phone'] ?></span>
                            <?php } ?>
                        </div>
                        <div>
                            <label for="">Giới Tính</label>
                            <input value="<?= $admins[$i]->gender ?>" type="text" name="gender[]" class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['gender'])) { ?>
                                <span class="text-red-500"><?= $err['gender'] ?></span>
                            <?php } ?>
                        </div>
                        <div>
                            <label for="">Images</label>
                            <input type="file" name="image[]" class="w-full p-2" />
                            <?php if (isset($err['img'])) { ?>
                                <span class="text-red-500"><?= $err['img'] ?></span>
                            <?php } ?>
                        </div>

                        <div>
                            <label for="">quyền</label>
                            <br>
                            <select name="permission[]" class="border rounded border-sky-400 w-full p-2">
                                <?php foreach ($per as $key => $value) : ?>

                                    <option value="<?php echo $value->permission_id ?>"><?php echo $value->name ?></option>
                                <?php endforeach ?>

                            </select>
                        </div>
                    <?php } ?>
                    <div class="row-start-3 col-span-3 flex justify-between">
                            <button name="edit_admin" type="submit" class="border p-3 bg-blue-500 text-white rounded">
                                Sửa Phòng
                            </button>
                        </div>
                </form>

                <a class="inline-block border p-3 bg-blue-500 text-white rounded" href="../room/c_room.php">Xem
                    danh sách</a>
            </div>
        </div>
    </div>
</section>