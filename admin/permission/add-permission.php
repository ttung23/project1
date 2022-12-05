<section class="dash-content w-full">
    <div class="content">
        <div class="danh_sach">
            <h3 class="text-3xl text-sky-500">THÊM CHỨC VỤ</h3>
            <div class="flex-from">
                <form action="" method="post" enctype="multipart/form-data">
                    <div>
                        <label for="">ID</label>
                        <input placeholder="ID sẽ tự động nhập" type="text" name="id" disabled
                            class="border rounded border-sky-400 w-full p-2" />
                    </div>

                    <div>
                        <label for="">Tên chức vụ</label>
                        <input value="<?= $_POST['name_per'] ?? "" ?>" type="text" name="name_per"
                            class="border rounded border-sky-400 w-full p-2" />
                        <?php if (isset($err['name_per'])) { ?>
                        <span class="text-red-500"><?= $err['name_per'] ?></span>
                        <?php } ?>
                    </div>

                    <div class="col-span-3">
                        <label for="">Mô tả</label>
                        <textarea class="border rounded border-sky-400 w-full p-2" name="description" id="ten" cols="30"
                            rows="5"><?= $_POST['description'] ?? "" ?></textarea>
                        <script>CKEDITOR.replace('ten');</script>

                        <?php if (isset($err['description'])) { ?>
                        <span class="text-red-500"><?= $err['description'] ?></span>
                        <?php } ?>
                    </div>
                    <div class="col-span-3 flex justify-between">
                        <button name="add_per" type="submit" class="p-3 bg-blue-500 text-white rounded">
                            Thêm chức vụ
                        </button>
                        <a class="inline-block p-3 bg-blue-500 text-white rounded"
                            href="../permission/c_permission.php">Xem
                            danh sách</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>