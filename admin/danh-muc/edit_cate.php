<section class="dash-content w-full">
    <div class="content">
        <div class="danh_sach">
            <h3 class="text-3xl text-sky-500">Thay Đổi Danh Mục</h3>
            <form action="" method="post" enctype="multipart/form-data">
                <?php for ($i = 0; $i < $len_cate_edit; $i++) { ?>
                    <div class="flex-from">
                        <div>
                            <label for="">ID</label>
                            <input placeholder="ID sẽ tự động nhập" value="<?= $cates_edit[$i]->categories_id ?>" type="text" name="id" disabled class="border rounded border-sky-400 w-full p-2" />
                        </div>

                        <div>
                            <label for="">Name</label>
                            <input value="<?= $cates_edit[$i]->name ?>" type="text" name="name_cate[]" class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['name_cate'][$i])) { ?>
                                <span class="text-red-500"><?= $err['name_cate'][$i] ?></span>
                            <?php } ?>
                        </div>

                        <div>
                            <label for="">Trạng thái</label>
                            <input value="<?= $cates_edit[$i]->status ?>" type="text" name="status[]" class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['status'][$i])) { ?>
                                <span class="text-red-500"><?= $err['status'][$i] ?></span>
                            <?php } ?>
                        </div>
                        <div>
                            <label for="">Mô tả</label>
                            <textarea class="border rounded border-sky-400 w-full p-2" name="description[]" id="" cols="30" rows="5"><?= $cates_edit[$i]->description ?></textarea>
                            <?php if (isset($err['description'][$i])) { ?>
                                <span class="text-red-500"><?= $err['description'][$i] ?></span>
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
                            <?php if (isset($err['img'][$i])) { ?>
                                <span class="text-red-500"><?= $err['img'][$i] ?></span>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="space my-3 border-b-[2px]"></div>
                <?php } ?>

                <div class="col-span-3 flex justify-between">
                    <button name="edit_cate" type="submit" class="p-3 bg-blue-500 text-white rounded">
                        Thay đổi
                    </button>
                    <a class="inline-block p-3 bg-blue-500 text-white rounded" href="../danh-muc/c_danh_muc.php">Xem danh sách</a>
                </div>
            </form>
                
                
        </div>
    </div>
</section>