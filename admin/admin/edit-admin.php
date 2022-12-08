<section class="dash-content w-full">
    <div class="content">
        <div class="danh_sach">
            <h3 class="text-3xl text-sky-500">Sửa Phòng</h3>
                <form action="" method="post" enctype="multipart/form-data">
                    <?php for ($i = 0; $i < $len_admin_edit; $i++) { ?>
                        <div class="flex-from">
                            <div>
                                <label for="">ID</label>
                                <input placeholder="ID sẽ tự động nhập" value="<?= $admins[$i]->admin_id ?>" type="text" name="id[]" disabled class="border rounded border-sky-400 w-full p-2" />
                            </div>

                            <div>
                                <label for="">Họ tên</label>
                                <input value="<?= $admins[$i]->name ?>" type="text" name="name_admin[]" class="border rounded border-sky-400 w-full p-2" />
                                <?php if (isset($err['name_admin'])) { ?>
                                    <span class="text-red-500"><?= $err['name_admin'] ?></span>
                                <?php } ?>
                            </div>
                            <div>
                                <label for="">Email</label>
                                <input value="<?= $admins[$i]->email  ?>" type="text" name="email[]" class="border rounded border-sky-400 w-full p-2" />
                                <?php if (isset($err['email'])) { ?>
                                    <span class="text-red-500"><?= $err['email'] ?></span>
                                <?php } ?>
                            </div>
                            <div>
                                <label for="">Mật khẩu</label>
                                <input value="<?= $admins[$i]->password ?>" type="text" name="password[]" class="border rounded border-sky-400 w-full p-2" />
                                <?php if (isset($err['password'])) { ?>
                                    <span class="text-red-500"><?= $err['password'] ?></span>
                                <?php } ?>
                            </div>

                            <div>
                                <label for="">Địa Chỉ</label>
                                <input placeholder="" value="<?= $admins[$i]->address ?>" type="text" name="address[]" class="border rounded border-sky-400 w-full p-2" />
                                <?php if (isset($err['address'])) { ?>
                                    <span class="text-red-500"><?= $err['address'] ?></span>
                                <?php } ?>
                            </div>

                            <div>
                                <label for="">Số Điện Thoại</label>
                                <input placeholder="" value="<?= $admins[$i]->phone ?>" type="text" name="phone[]" class="border rounded border-sky-400 w-full p-2" />
                                <?php if (isset($err['phone'])) { ?>
                                    <span class="text-red-500"><?= $err['phone'] ?></span>
                                <?php } ?>
                            </div>

                            <div>
                                <label for="">Giới Tính</label>
                                <input value="<?= $admins[$i]->gender ?>" type="text" name="gender[]" class="border rounded border-sky-400 w-full p-2" />
                                <?php if (isset($err['gender'])) { ?>
                                    <span class="text-red-500"><?= $err['gender'] ?></span>
                                <?php } ?>
                            </div>
                                
                            <div>
                                <label for="">Ảnh hiện tại</label>
                                <img src="../../layout/assets/img/admins/<?= $admins[$i]->thumbnail ?>" alt="" width="150px">
                                <input type="hidden" name="image[]" id="" value="<?= $admins[$i]->thumbnail ?>">
                            </div>

                            <div>
                                <label for="">Ảnh</label>
                                <input type="file" name="image[]" class="w-full p-2" />
                                <?php if (isset($err['img'])) { ?>
                                    <span class="text-red-500"><?= $err['img'] ?></span>
                                <?php } ?>
                            </div>

                            <div>
                                <label for="">Chức vụ</label>
                                <select name="permission[]" id="" class="border rounded border-sky-400 w-full p-2">
                                    <?php foreach ($permission as $value) { ?>
                                        <option <?= $admins[$i]->id_permission == $value->permission_id ? "selected" : "" ?> value="<?= $value->permission_id ?>"><?= $value->name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="space my-3 border-b-[2px]"></div>
                    <?php } ?>
                    <div class="col-span-3 flex justify-between">
                        <button name="edit_admin" type="submit" class="p-3 bg-blue-500 text-white rounded">
                            Lưu thông tin
                        </button>
                        <a class="inline-block p-3 bg-blue-500 text-white rounded" href="../admin/c_admin.php">Xem danh sách</a>
                    </div>
                </form>

                
        </div>
    </div>
</section>