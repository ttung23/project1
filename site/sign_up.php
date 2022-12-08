<div class="bg-color-signup ">

    <div class="flex justify-center items-center">
        <!-- <div class="w-full">
            <img src="../layout/assets/img/product/p3.webp" alt="" class="w-full">
        </div> -->

        <div class=" mb-5">
            <form  action="" method="post" enctype="multipart/form-data" class="form-signup pt-2 px-[150px] ">
            <h1 class="text-center text-uppercase text-4xl text-blue-500 mt-4 mb-3">Đăng ký</h1>
                <div class="mb-3">
                    <input value="<?= $_POST['name'] ?? "" ?>" type="text" id="name" name="name" placeholder="Họ và tên" class="border-b-2 w-full py-2 bg-blue-300 border-blue-500 transition ease-in-out m-0 focus:text-black outline-none placeholder:text-blue-500  ">
                    <?php if (isset($err['name'])) { ?>
                        <span class="text-red-500"><?= $err['name'] ?></span>
                    <?php } ?>
                </div>

                <div class="mb-3">
                    <input value="<?= $_POST['username'] ?? "" ?>" type="text" id="username" name="username" placeholder="Tên đăng nhập" class="border-b-2 w-full py-2 bg-blue-300 border-blue-500 transition ease-in-out m-0 focus:text-black outline-none placeholder:text-blue-500 ">
                    <?php if (isset($err['username'])) { ?>
                        <span class="text-red-500"><?= $err['username'] ?></span>
                    <?php } ?>
                </div>

                <div class="mb-3">
                    <input type="password" id="password" name="password" placeholder="Mật khẩu" class="border-b-2 w-full py-2 bg-blue-300 border-blue-500 transition ease-in-out m-0 focus:text-black focus:bg-blue-300 outline-none placeholder:text-blue-500">
                    <?php if (isset($err['password'])) { ?>
                        <span class="text-red-500"><?= $err['password'] ?></span>
                    <?php } ?>
                </div>

                <div class="mb-3">
                    <input type="password" id="password" name="re_password" placeholder="Nhập lại mật khẩu" class="border-b-2 w-full py-2 bg-blue-300 border-blue-500 transition ease-in-out m-0 focus:text-black focus:bg-blue-300 outline-none placeholder:text-blue-500">
                    <?php if (isset($err['re_password'])) { ?>
                        <span class="text-red-500"><?= $err['re_password'] ?></span>
                    <?php } ?>
                </div>

                <div class="mb-3">
                    <label for="gender" class="text-blue-500">Giới tính</label>
                    <div class="flex items-center">
                        <div class="form-check form-check-inline text-blue-500">
                            <input type="radio" name="gender" id="male" value="nam" class="form-check-input" checked>
                            Nam
                        </div>
                        <div class="form-check form-check-inline text-blue-500">
                            <input type="radio" name="gender" id="female" value="nữ" class="form-check-input">
                            Nữ
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <input value="<?= $_POST['email'] ?? "" ?>" type="email" id="email" name="email" placeholder="Email" class="border-b-2 w-full py-2 bg-blue-300 border-blue-500 transition ease-in-out m-0 focus:text-black focus:bg-blue-300 outline-none placeholder:text-blue-500">

                    <?php if (isset($err['email'])) { ?>
                        <span class="text-red-500"><?= $err['email'] ?></span>
                    <?php } ?>
                </div>

                <div class="mb-3">
                    <input type="file" id="image" name="image" class="border-b-2 w-full py-2 bg-blue-300 border-blue-500 transition ease-in-out m-0 focus:text-black focus:bg-blue-300 outline-none placeholder:text-blue-500">
                    <?php if (isset($err['img'])) { ?>
                        <span class="text-red-500"><?= $err['img'] ?></span>
                    <?php } ?>
                </div>

                <div class="mb-3">
                    <input value="<?= $_POST['date'] ?? "" ?>" type="date" id="date" name="date" class="border-b-2 w-full py-2 bg-blue-300 border-blue-500 transition ease-in-out m-0 focus:text-black focus:bg-blue-300 outline-none placeholder:text-blue-500">
                    <?php if (isset($err['date'])) { ?>
                        <span class="text-red-500"><?= $err['date'] ?></span>
                    <?php } ?>
                </div>

                <div class="mb-3">
                    <input value="<?= $_POST['diachi'] ?? "" ?>" type="text" id="diachi" name="diachi" placeholder="Địa chỉ" class="border-b-2 w-full py-2 bg-blue-300 border-blue-500 transition ease-in-out m-0 focus:text-black focus:bg-blue-300 outline-none placeholder:text-blue-500">
                    <?php if (isset($err['diachi'])) { ?>
                        <span class="text-red-500"><?= $err['diachi'] ?></span>
                    <?php } ?>
                </div>

                <div class="mb-3">
                    <input value="<?= $_POST['sdt'] ?? "" ?>" type="text" id="sdt" name="sdt" placeholder="Số điện thoại" class="border-b-2 w-full py-2 bg-blue-300 border-blue-500 transition ease-in-out m-0 focus:text-black focus:bg-blue-300 outline-none placeholder:text-blue-500">
                    <?php if (isset($err['sdt'])) { ?>
                        <span class="text-red-500"><?= $err['sdt'] ?></span>
                    <?php } ?>
                </div>
                <p class="pb-3 pt-2">
                    Đã có tài khoản?<a href="index.php?login" class="px-2 hover:text-blue-500">Đăng nhập</a>
                </p>

                <button type="submit" name="btn_sign_up" class="btn-primary btn btn-block bg-blue-500 ">Đăng ký</button><br>

            </form>
        </div>
    </div>
</div>