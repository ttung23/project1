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
            <h3 class="text-3xl text-sky-500">Sửa thông tin User</h3>

            <div class="flex-from">
                <form action="" method="post" enctype="multipart/form-data">
                    <div>
                        <label for="">ID</label>
                        <input placeholder="ID sẽ tự động nhập" type="text" name="id" value="<?//= id_user  ?>" disabled class="border rounded border-sky-400 w-full p-2" />
                    </div>

                    <div>
                        <label for="">Họ tên</label>
                        <input value="<?= $_POST['name'] ?? "" ?>" type="text" name="name" class="border rounded border-sky-400 w-full p-2" />
                        <?php if (isset($err['name'])) { ?>
                            <span class="text-red-500"><?= $err['name'] ?></span>
                        <?php } ?>
                    </div>

                    <div>
                        <label for="">Tên đăng nhập</label>
                        <input value="<?= $_POST['username'] ?? "" ?>" type="text" name="username" class="border rounded border-sky-400 w-full p-2" />
                        <?php if (isset($err['username'])) { ?>
                            <span class="text-red-500"><?= $err['username'] ?></span>
                        <?php } ?>
                    </div>

                    <div>
                        <label for="">Giới tính</label>
                        <input value="<?= $_POST['gender'] ?? "" ?>" type="text" name="gender" class="border rounded border-sky-400 w-full p-2" />
                        <?php if (isset($err['gender'])) { ?>
                            <span class="text-red-500"><?= $err['gender'] ?></span>
                        <?php } ?>
                    </div>

                    <div>
                        <label for="">Email</label>
                        <input value="<?= $_POST['email'] ?? "" ?>" type="text" name="email" class="border rounded border-sky-400 w-full p-2" />
                        <?php if (isset($err['email'])) { ?>
                            <span class="text-red-500"><?= $err['email'] ?></span>
                        <?php } ?>
                    </div>
            
                    <div>
                        <label for="">Ảnh đại diện</label>
                        <input type="file" name="image" class="w-full p-2" />
                        <?php if (isset($err['img'])) { ?>
                            <span class="text-red-500"><?= $err['img'] ?></span>
                        <?php } ?>
                    </div>

                    <div>
                        <label for="">Địa chỉ</label>
                        <input value="<?= $_POST['address'] ?? "" ?>" type="text" name="address" class="border rounded border-sky-400 w-full p-2" />
                        <?php if (isset($err['address'])) { ?>
                            <span class="text-red-500"><?= $err['address'] ?></span>
                        <?php } ?>
                    </div>

                    <div>
                        <label for="">Số điện thoại</label>
                        <input value="<?= $_POST['phone'] ?? "" ?>" type="text" name="phone" class="border rounded border-sky-400 w-full p-2" />
                        <?php if (isset($err['phone'])) { ?>
                            <span class="text-red-500"><?= $err['phone'] ?></span>
                        <?php } ?>
                    </div>

                    <div>
                        <label for="">Ngày sinh</label>
                        <input value="<?= $_POST['date'] ?? "" ?>" type="date" name="date" class="border rounded border-sky-400 w-full p-2" />
                        <?php if (isset($err['date'])) { ?>
                            <span class="text-red-500"><?= $err['date'] ?></span>
                        <?php } ?>
                    </div>
                
                    <div class="row-start-4 col-span-3 flex justify-between">
                        <button name="btn_edit_user" type="submit" class="border p-3 bg-blue-500 text-white rounded">
                            Update user
                        </button>
                        <a class="inline-block border p-3 bg-blue-500 text-white rounded" href="../user/c_user.php">Xem danh sách</a>
                    </div>
                </form>

                
            </div>
        </div>
    </div>
</section>