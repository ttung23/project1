<section class="dash-content w-full">
    <div class="content">
        <div class="danh_sach">
            <h3 class="text-3xl text-sky-500">Sửa thông tin người dùng</h3>

            <form action="" method="post" enctype="multipart/form-data">
                <?php for ($i = 0; $i < $len_user_edit; $i++) { ?>
                
                    <div class="flex-from">
                        
                        <div>
                            <label for="">ID</label>
                            <input placeholder="ID sẽ tự động nhập" type="text" name="id" value="<?= $users_edit[$i]->user_id ?>" disabled class="border rounded border-sky-400 w-full p-2" />
                        </div>

                        <div>
                            <label for="">Họ tên</label>
                            <input value="<?= $users_edit[$i]->name ?>" type="text" name="name[]" class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['name'][$i])) { ?>
                                <span class="text-red-500"><?= $err['name'][$i] ?></span>
                            <?php } ?>
                        </div>

                        <div>
                            <label for="">Tên đăng nhập</label>
                            <input value="<?= $users_edit[$i]->username ?>" type="text" name="username[]" class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['username'][$i])) { ?>
                                <span class="text-red-500"><?= $err['username'][$i] ?></span>
                            <?php } ?>
                        </div>

                        <div>
                            <label for="">Giới tính</label>
                            <input value="<?= $users_edit[$i]->gender ?>" type="text" name="gender[]" class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['gender'][$i])) { ?>
                                <span class="text-red-500"><?= $err['gender'][$i] ?></span>
                            <?php } ?>
                        </div>

                        <div>
                            <label for="">Email</label>
                            <input value="<?= $users_edit[$i]->email ?>" type="text" name="email[]" class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['email'][$i])) { ?>
                                <span class="text-red-500"><?= $err['email'][$i] ?></span>
                            <?php } ?>
                        </div>

                        <div>
                            <label for="">Ảnh hiện tại</label>
                            <img src="../../layout/assets/img/users/<?= $users_edit[$i]->images ?>" width="150px" alt="">
                            <input type="hidden" name="image[]" value="<?= $users_edit[$i]->images ?>" id="">
                        </div>
                
                        <div>
                            <label for="">Ảnh đại diện</label>
                            <input type="file" name="image[]" class="w-full p-2" />
                            <?php if (isset($err['img'][$i])) { ?>
                                <span class="text-red-500"><?= $err['img'][$i] ?></span>
                            <?php } ?>
                        </div>

                        <div>
                            <label for="">Địa chỉ</label>
                            <input value="<?= $users_edit[$i]->address ?>" type="text" name="address[]" class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['address'][$i])) { ?>
                                <span class="text-red-500"><?= $err['address'][$i] ?></span>
                            <?php } ?>
                        </div>

                        <div>
                            <label for="">Số điện thoại</label>
                            <input value="<?= $users_edit[$i]->phone ?>" type="text" name="phone[]" class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['phone'][$i])) { ?>
                                <span class="text-red-500"><?= $err['phone'][$i] ?></span>
                            <?php } ?>
                        </div>

                        <div>
                            <label for="">Ngày sinh</label>
                            <input value="<?= $users_edit[$i]->date ?>" type="date" name="date[]" class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['date'][$i])) { ?>
                                <span class="text-red-500"><?= $err['date'][$i] ?></span>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="space my-3 border-b-[2px]"></div>
                <?php } ?>
                <div class="col-span-3 flex justify-between">
                    <button name="btn_edit_user" type="submit" class="p-3 bg-blue-500 text-white rounded">
                        Lưu thông tin
                    </button>
                    <a class="inline-block p-3 bg-blue-500 text-white rounded" href="../user/c_user.php">Xem danh sách</a>
                </div>
            </form>
        </div>
    </div>
</section>