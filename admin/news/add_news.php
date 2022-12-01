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
            <h3 class="text-3xl text-sky-500">Thêm Tin Tức</h3>

            <div class="flex-from">
                <form action="" method="post" enctype="multipart/form-data">
                    <div>
                        <label for="">ID</label>
                        <input placeholder="ID sẽ tự động nhập" type="text" name="id" disabled class="border rounded border-sky-400 w-full p-2" />
                    </div>

                    <div>
                        <label for="">Name</label>
                        <input value="<?= $_POST['name_new'] ?? "" ?>" type="text" name="name_new" class="border rounded border-sky-400 w-full p-2" />
                        <?php if (isset($err['name_new'])) { ?>
                            <span class="text-red-500"><?= $err['name_new'] ?></span>
                        <?php } ?>
                    </div>

                    <div>
                        <label for="">Images</label>
                        <input type="file" name="image" class="w-full p-2" />
                        <?php if (isset($err['img'])) { ?>
                            <span class="text-red-500"><?= $err['img'] ?></span>
                        <?php } ?>
                    </div>

                    <div>
                        <label for="">Nội dung</label>
                        <textarea class="border rounded border-sky-400 w-full p-2" name="content" id="" cols="30" rows="5"><?= $_POST['content'] ?? "" ?></textarea>
                        <?php if (isset($err['content'])) { ?>
                            <span class="text-red-500"><?= $err['content'] ?></span>
                        <?php } ?>
                    </div>

                    <div>
                        <label for="">Id admin</label>
                        <input value="<?= $_POST['id_admin'] ?? "" ?>" placeholder="cho vào sau" type="text" name="id_admin" class="border rounded border-sky-400 w-full p-2" />
                        <?php if (isset($err['id_admin'])) { ?>
                            <span class="text-red-500"><?= $err['id_admin'] ?></span>
                        <?php } ?>
                    </div>
                
                    <div class="row-start-3 col-span-3 flex justify-between">
                        <button name="btn_add_new" type="submit" class="border p-3 bg-blue-500 text-white rounded">
                            Đăng tin tức
                        </button>
                        <a class="inline-block border p-3 bg-blue-500 text-white rounded" href="../news/c_news.php">Xem danh sách</a>
                    </div>
                </form>

                
            </div>
        </div>
    </div>
</section>