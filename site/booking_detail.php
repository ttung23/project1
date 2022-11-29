          <div class="">
              <h4 class="text-align">Lịch Sử Đặt Hàng</h4>
              <div class="p-3 py-5">
                  <div class="d-flex justify-content-between align-items-center mb-3">

                      <table border="1" class="table">
                          <tr>
                              <th style="width: 65px;">Tên Phòng</th>
                              <th>check_in_date</th>
                              <th>check_out_date</th>
                              <th>Tổng Tiền</th>
                          </tr>
                          <?php foreach ($bookinguserde as $key => $value) : ?>
                              <tr>
                                  <td><?php echo $value->tenphong ?></td>
                                  <td><?php echo $value->check_in_date ?></td>
                                  <td><?php echo $value->check_out_date ?></td>
                                  <td><?php echo $value->total_amount ?></td>
                                  <td>
                                  </td>
                              </tr>
                          <?php endforeach ?>
                      </table>
                  </div>
              </div>
              <div>
              </div>

          </div>