<div class="max-w-4xl mx-auto items-center mt-[150px] shadow shadow-lg bg-blue-300 opacity-90">

    <div class="flex justify-center items-center">
        <div class="w-full">
            <img src="../layout/assets/img/product/p3.webp" alt="" class="w-full">
        </div>

        <div class="w-full">
            <h1 class="text-center text-uppercase text-4xl text-blue-500">Quên mật khẩu</h1>
            <form action="" method="post" enctype="multipart/form-data" class="pt-2 px-[100px] bg-blue-300">
                <div class="mb-3">
                    <input value="<?= $_POST['password'] ?? "" ?>" type="password" name="password" placeholder="Nhập mật khẩu mới" class="border-b-2 w-full py-2 bg-blue-300 border-blue-500 transition ease-in-out m-0 focus:text-black focus:bg-blue-300 outline-none placeholder:text-blue-500">
                    <?php if (isset($err['password'])) { ?>
                        <span class="text-red-500"><?= $err['password'] ?></span>
                    <?php } ?>
                </div>

                <div class="mb-3">
                    <input value="<?= $_POST['re_password'] ?? "" ?>" type="password" name="re_password" placeholder="Xác nhận mật khẩu" class="border-b-2 w-full py-2 bg-blue-300 border-blue-500 transition ease-in-out m-0 focus:text-black focus:bg-blue-300 outline-none placeholder:text-blue-500">
                    <?php if (isset($err['re_password'])) { ?>
                        <span class="text-red-500"><?= $err['re_password'] ?></span>
                    <?php } ?>
                </div>

                <button type="submit" name="btn_update_password" class="btn-primary btn btn-block bg-blue-500">Xác nhận</button>

            </form>
        </div>
    </div>
</div>