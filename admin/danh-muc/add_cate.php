<section class="dash-content w-full">
    <div class="content">
        <div class="danh_sach">
            <h3 class="text-3xl text-sky-500">THÊM DANH MỤC</h3>

            <form action="" method="post" enctype="multipart/form-data">
                <div class="flex-from">
                
                    <div>
                        <label for="id">ID</label>
                        <input placeholder="ID sẽ tự động nhập" type="text" name="id" id="id" disabled class="border rounded border-sky-400 w-full p-2" />
                    </div>

                    <div>
                        <label for="name_cate">Name</label>
                        <input value="<?= $_POST['name_cate'] ?? "" ?>" type="text" name="name_cate" id="name_cate" class="border rounded border-sky-400 w-full p-2" />
                        <?php if (isset($err['name_cate'])) { ?>
                            <span class="text-red-500"><?= $err['name_cate'] ?></span>
                        <?php } ?>
                    </div>

                    <div>
                        <label for="image">Images</label>
                        <input type="file" name="image" id="image" class="w-full p-2" />
                        <?php if (isset($err['img'])) { ?>
                            <span class="text-red-500"><?= $err['img'] ?></span>
                        <?php } ?>
                    </div>

                    <div class="col-span-3">
                        <label for="description">Mô tả</label>
                        <textarea class="border rounded border-sky-400 w-full p-2" name="description" id="description" cols="30" rows="5"><?= $_POST['description'] ?? "" ?></textarea>
                        <?php if (isset($err['description'])) { ?>
                            <span class="text-red-500"><?= $err['description'] ?></span>
                        <?php } ?>
                    </div>

                    <div></div>
                
                    <div class="flex justify-between gap-[10px] col-span-3">
                        <button name="add_cate" type="submit" class="p-3 bg-blue-500 text-white rounded">
                            Thêm Danh mục
                        </button>
                        <a class="inline-block p-3 bg-blue-500 text-white rounded" href="../danh-muc/c_danh_muc.php">Xem danh sách</a>
                    </div>
                

                
                </div>
            </form>
        </div>
    </div>
</section>