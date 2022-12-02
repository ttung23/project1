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
            <h3 class="text-3xl text-sky-500">Thay Đổi Danh Mục</h3>

            <div class="flex-from">
                
                    <form action="" method="post" enctype="multipart/form-data">
                        <?php for ($i = 0; $i < $len_cate_edit; $i++) { ?>
                            <div>
                                <label for="">ID</label>
                                <input placeholder="ID sẽ tự động nhập" value="<?= $cates_edit[$i]->categories_id ?>" type="text" name="id" disabled class="border rounded border-sky-400 w-full p-2" />
                            </div>

                            <div>
                                <label for="">Name</label>
                                <input value="<?= $cates_edit[$i]->name ?>" type="text" name="name_cate[]" class="border rounded border-sky-400 w-full p-2" />
                                <?php if (isset($err['name_cate'])) { ?>
                                    <span class="text-red-500"><?= $err['name_cate'] ?></span>
                                <?php } ?>
                            </div>

                            <div>
                                <label for="">Trạng thái</label>
                                <input value="<?= $cates_edit[$i]->status ?>" type="text" name="status[]" class="border rounded border-sky-400 w-full p-2" />
                                <?php if (isset($err['status'])) { ?>
                                    <span class="text-red-500"><?= $err['status'] ?></span>
                                <?php } ?>
                            </div>
                            <div>
                                <label for="">Mô tả</label>
                                <textarea class="border rounded border-sky-400 w-full p-2" name="description[]" id="" cols="30" rows="5"><?= $cates_edit[$i]->description ?></textarea>
                                <?php if (isset($err['description'])) { ?>
                                    <span class="text-red-500"><?= $err['description'] ?></span>
                                <?php } ?>
                            </div>
                            
                            <div>
                                <label for="">Ảnh hiện tại</label>
                                <input type="hidden" name="image[]" id="" value="<?= $cates_edit[$i]->images ?>">
                                <img src="../../layout/assets/img/categories/<?= $cates_edit[$i]->images ?>" alt="">
                            </div>

                            <div>
                                <label for="">Images</label>
                                <input type="file" name="image[]" class="w-full p-2" />
                                <?php if (isset($err['img'])) { ?>
                                    <span class="text-red-500"><?= $err['img'] ?></span>
                                <?php } ?>
                            </div>
                        <?php } ?>

                        <div class="row-start-3 col-span-3 flex justify-between">
                            <button name="edit_cate" type="submit" class="border p-3 bg-blue-500 text-white rounded">
                                Thay đổi
                            </button>
                            
                        </div>
                    </form>
                
                <a class="inline-block border p-3 bg-blue-500 text-white rounded" href="../danh-muc/c_danh_muc.php">Xem danh sách</a>

                
            </div>
        </div>
    </div>
</section>