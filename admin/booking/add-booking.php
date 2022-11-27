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
            <h3 class="text-3xl text-sky-500">add Phòng</h3>
            <div class="flex-from">
                <form action="" method="post" enctype="multipart/form-data">
                    <div>
                        <label for="">ID</label>
                        <input placeholder="ID sẽ tự động nhập" value="" type="text" name="id"
                            disabled class="border rounded border-sky-400 w-full p-2" />
                    </div>

                    <div>
                        <label for="">Name</label>
                        <input value="<?= $_POST['name_booking'] ?? "" ?>" type="text" name="name_booking"
                            class="border rounded border-sky-400 w-full p-2" />
                        <?php if (isset($err['name_booking'])) { ?>
                        <span class="text-red-500"><?= $err['name_booking'] ?></span>
                        <?php } ?>
                    </div>
                    <div>
                        <label for="">check_in_date</label>
                        <input value="<?= $_POST['check_in_date'] ?? "" ?>" type="date" name="check_in_date"
                            class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['check_in_date'])) { ?>
                        <span class="text-red-500"><?= $err['check_in_date'] ?></span>
                        <?php } ?>
                    </div>
                    <div>
                        <label for="">check_out_date</label>
                        <input value="<?= $_POST['check_out_date'] ?? "" ?>" type="date" name="check_out_date"
                            class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['check_out_date'])) { ?>
                        <span class="text-red-500"><?= $err['check_out_date'] ?></span>
                        <?php } ?>
                    </div>
                    <div>
                        <label for="">Trạng thái</label>
                        <select name="status" id="" class="border rounded border-sky-400 w-full p-2">
                            <option value="0">Đang Sửa</option>
                            <option value="1">Còn Trống</option>
                            <option value="2">Đã Hết Phòng</option>
                        </select>
                    </div>
                    <div>
                        <label for="">tổng tiền</label>
                        <input placeholder="" value=" <?= $_POST['total_amount'] ?? "" ?>" type="text" name="total_amount"
                            class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['total_amount'])) { ?>
                        <span class="text-red-500"><?= $err['total_amount'] ?></span>
                        <?php } ?>
                    </div>
                    <div>
                        <label for="">Mã User</label>
                        <input placeholder="" value=" <?= $_POST['id_user'] ?? "" ?>" type="text" name="id_user"
                            class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['id_user'])) { ?>
                        <span class="text-red-500"><?= $err['id_user'] ?></span>
                        <?php } ?>
                    </div>
                    <div>
                        <label for="">Số Lượng</label>
                        <input placeholder="" value=" <?= $_POST['quantity'] ?? "" ?>" type="text" name="quantity"
                            class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['quantity'])) { ?>
                        <span class="text-red-500"><?= $err['quantity'] ?></span>
                        <?php } ?>
                    </div>

                    <div>
                        <label for="">Tin Nhắn</label>
                        <input placeholder="" value=" <?= $_POST['messeage'] ?? "" ?>" type="text" name="messeage"
                            class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['messeage'])) { ?>
                        <span class="text-red-500"><?= $err['messeage'] ?></span>
                        <?php } ?>
                    </div>
                    <div>
                        <label for="">Email</label>
                        <input placeholder="" value=" <?= $_POST['Email'] ?? "" ?>" type="text" name="Email"
                            class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['messeage'])) { ?>
                        <span class="text-red-500"><?= $err['Email'] ?></span>
                        <?php } ?>
                    </div>
                    <div>
                        <label for="">Phone</label>
                        <input placeholder="" value=" <?= $_POST['phone'] ?? "" ?>" type="text" name="phone"
                            class="border rounded border-sky-400 w-full p-2" />
                            <?php if (isset($err['phone'])) { ?>
                        <span class="text-red-500"><?= $err['phone'] ?></span>
                        <?php } ?>
                    </div>

                    <div class="row-start-3 col-span-3 flex justify-between">
                        <button name="add_booking" type="submit" class="border p-3 bg-blue-500 text-white rounded">
                            Theem Phòng
                        </button>
                        <a class="inline-block border p-3 bg-blue-500 text-white rounded" href="../room/c_room.php">Xem
                            danh sách</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>