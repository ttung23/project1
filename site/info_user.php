<div class="container rounded bg-white mt-5 mb-5">
    <form action="" method="post" enctype="multipart/form-data">
        <?php foreach ($oneusrer as $key => $value) : ?>
        <div>
            <div class="">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        width="150px" src="../layout/assets/img/users/<?php echo $value->images ?>"><span
                        class="font-weight-bold"><?php echo $value->name ?></span><span
                        class="text-black-50"><?php echo $value->username ?></span><span> </span></div>
            </div>
            <div class="">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Thông tin người dùng</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Tên</label><input type="text" name="name"
                                class="form-control" value="<?php echo $value->name ?>" placeholder="Thien"></div>
                        <div class="col-md-6"><label class="labels">Họ</label><input type="text" class="form-control"
                                value="" placeholder="Nguyen"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Tên đăng nhập</label><input type="text"
                                class="form-control" value="<?php echo $value->username ?>" name="username"
                                placeholder="Ten dang nhap"></div>
                        <div class="col-md-12"><label class="labels">password</label><input type="text"
                                class="form-control" value="<?php echo $value->password ?>" name="password"
                                placeholder="Ten dang nhap"></div>
                        <div class="col-md-12"><label class="labels">Email</label><input type="text"
                                class="form-control" value="<?php echo $value->email ?>" name="email"
                                placeholder="thienyet149@gmail.com"></div>
                        <div class="col-md-12"><label class="labels">Địa chỉ</label><input type="text"
                                class="form-control" value="<?php echo $value->address ?>" name="address"
                                placeholder=""></div>
                        <div class="col-md-12"><label class="labels">Số điện thoại</label><input type="text"
                                class="form-control" value="<?php echo $value->phone ?>" name="phone" placeholder="">
                        </div>
                        <div class="col-md-12"><label class="labels">Ảnh Đại Diện</label><input type="file"
                                class="form-control" value="" name="image" placeholder=""></div>
                        <div class="col-md-12"><label class="labels">Ngày Sinh</label><input type="date"
                                class="form-control" value="<?php echo $value->date ?>" name="date" placeholder="">
                        </div>
                    </div>
                    <div class="row mt-2 mx-1">
                        <div class="text-center"><button class="btn btn-primary profile-button text-primary"
                                name="edit_user" type="submit">Lưu thông
                                tin</button></div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </form>
            <form action="" method="post">
            <button type="submit" name="block_bk">Hủy Booking</button>      
    <div class="">
        <h4 class="text-align font-weight-bold text-2xl">Lịch Sử Đặt Hàng</h4>
        <div class="p-3 py-5">
            <div class="d-flex justify-content-between align-items-center mb-3">

                <table border="1" class="table">
                    <tr>
                    <th></th>
                        <th style="width: 65px;">MÃ Đơn Hàng</th>
                        <th>check_in_date</th>
                        <th>check_out_date</th>
                        <th>Trạng Thái</th>
                        <th>Tổng Tiền</th>
                        <th>Tin Nhắn</th>
                        <th>Số Điện Thoại</th>
                        <th>Tên Người Nhận</th>
                        <th>Ngày Đặt</th>
                    </tr>
                    <?php foreach ($bookinguser as $key => $value) : ?>
                    <tr>
                    <td>
                                <input type="checkbox" name="bk[]" value="<?= $value->booking_id ?>" id="">
                            </td>
                        <td><?php echo $value->booking_id?></td>
                        <td><?php echo $value->check_in_date?></td>
                        <td><?php echo $value->check_out_date?></td>
                        <td class=''><?php  if(($value->status) == 0){
                    echo "<div class=''>Chờ Xác Nhận</div>";   
            }else if(($value->status) == 1){
                echo "<div class=''>Xác Nhận</div>";   

            }else{
                echo "<div >Hủy Xác Nhận</div>";   

            }
                ?></td>
                        <td><?php echo $value->total_amount ?></td>
                        <td><?php echo $value->message ?></td>
                        <td><?php echo $value->phone ?></td>
                        <td><?php echo $value->name ?></td>
                        <td><?php echo $value->create_at ?></td>
                        <td>
                            <a href="index.php?booking_dt&idbk=<?php echo $value->booking_id ?>" class="mx-3">Xem chi
                                tiết</a>

                        </td>
                    </tr>
                    <?php endforeach ?>
                </table>
            </div>
        </div>
        </form>
    </div>

</div>