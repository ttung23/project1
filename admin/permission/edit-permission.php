<section class="dash-content w-full">
    <div class="content">
        <div class="danh_sach">
            <h3 class="text-3xl text-sky-500">Sửa Chức Vụ</h3>
            <form action="" method="post" enctype="multipart/form-data">
                <?php for ($i = 0; $i < $len_per_edit; $i++) { ?>
                    <div class="flex-from">
                        <div>
                            <label for="">ID</label>
                            <input placeholder="ID sẽ tự động nhập" Value="<?= $per_edit[$i]->permission_id ?> " type="text"
                                name="id" disabled class="border rounded border-sky-400 w-full p-2" />
                        </div>
                        <div>
                            <label for="">Tên</label>
                            <input Value="<?= $per_edit[$i]->name?>" type="text" name="name_permission[]"
                                class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['name_room'][$i])) { ?>
                                <span class="text-red-500"><?= $err['name_room'][$i] ?></span>
                            <?php } ?>
                        </div>

                        <div class="col-span-3">
                            <label for="">Mô Tả Chức Vụ</label>
                            <textarea name="des[]" class="border rounded border-sky-400 w-full p-2"  cols="30" rows="5"><?= $per_edit[$i]->description?></textarea>
                            <?php if (isset($err['des'][$i])) { ?>
                                <span class="text-red-500"><?= $err['des'][$i] ?></span>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="space my-3 border-b-[2px]"></div>
                <?php } ?>
                <div class="col-span-3 flex justify-between">
                    <button name="edit_permission" type="submit" class="p-3 bg-blue-500 text-white rounded">
                        Sửa Chức Vụ
                    </button>
                    <a class="inline-block p-3 bg-blue-500 text-white rounded" href="../permission/c_permission.php">Xem danh sách</a>
                </div>
            </form>
        </div>
    </div>
</section>