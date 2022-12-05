<section class="dashboard w-full">
    <div class="w-full flex justify-between p-3 items-center">
        <i class="uil uil-bars sidebar-toggle text-3xl"></i>

        <div class="search-box">
            <i class="uil uil-search"></i>
            <input type="text" placeholder="Search here..." class="border-sky-400 px-3" />
        </div>

        <img src="./assets/img/anh3.jpg" alt="" width="50px" class="rounded-full" />
    </div>
    <?php foreach ($permissionone as $key => $value) : ?>
    <div class="content">
        <div class="danh_sach">
            <h3 class="text-3xl text-sky-500">Sửa Phân Quyền</h3>
            <div class="flex-from">
                <form action="" method="post" enctype="multipart/form-data">
                    <div>
                        <label for="">ID</label>
                        <input placeholder="ID sẽ tự động nhập" Value="<?php echo $value->permission_id ?> " type="text"
                            name="id" disabled class="border rounded border-sky-400 w-full p-2" />
                    </div>
                    <div>
                        <label for="">Tên</label>
                        <input Value="<?php echo $value->name?>" type="text" name="name_permission"
                            class="border rounded border-sky-400 w-full p-2" />
                        <?php if (isset($err['name_room'])) { ?>
                        <span class="text-red-500"><?= $err['name_room'] ?></span>
                        <?php } ?>
                    </div>
                    <div>
                        <label for="">Mô Tả Quyền</label>
                        <input Value="<?php echo $value->description?>" type="text" name="des"
                            class="border rounded border-sky-400 w-full p-2" />
                        <?php if (isset($err['des'])) { ?>
                        <span class="text-red-500"><?= $err['des'] ?></span>
                        <?php } ?>



                    </div>
            </div>
            <div class="row-start-3 col-span-3 flex justify-between">
                <button name="edit_permission" type="submit" class="border p-3 bg-blue-500 text-white rounded">
                    Sửa Quyền
                </button>
                <a class="inline-block border p-3 bg-blue-500 text-white rounded"
                    href="../permission/c_permission.php">Xem
                    danh sách</a>
            </div>
        </div>
        </form>
        <?php endforeach ?>
</section>