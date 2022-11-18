<div class="bgc">
  <div class="contai-list-product containerr">
    <div class="left-l-pro">
      <div class="mony-l-pro">
        <div class="text-l-pro">
          <h2>Sắp xếp theo kết quả</h2>
          <a href="">Sắp xếp theo kết quả lựa chọn</a>
        </div>
        <form>
          <input type="radio" name="gender" value="male" checked />
          <span>Giá cao nhất</span>
          <br />
          <input type="radio" name="gender" value="female" />
          <span>Giá thấp nhất</span><br />
          <input type="radio" name="gender" value="other" />
          <span>Điểm đánh giá</span>
          <br />
          <input type="radio" name="gender" value="other" />
          <span>Tất cả</span>
        </form>
      </div>

      <div class="convenient-l-pro">
        <div class="text-c">
          <h2>Lọc theo kết quả</h2>
          <a href="">Hiển thị theo kết quả lọc :</a>
        </div>
        <div class="cs-l-pro">
          <h2>Chính sách đặt phòng</h2>
          <form>
            <input type="checkbox" name="vehicle1" value="mienphi" />Hoàn trả
            phòng miễn phí
            <br />
            <input type="checkbox" name="vehicle2" value="matphi" />Hoàn trả
            phòng mất 10% <br /><br />
          </form>
        </div>
        <div class="gia-l-pro">
          <h2>Giá mỗi đêm khoảng</h2>

          <input type="range" name="agetb" id="agetb" />
        </div>
        <div class="ks-l-pro">
          <h2>Loại phòng khách sạn</h2>
          <form action="">
            <input type="checkbox" name="vehicle1" value="mienphi" />Tất cả
            các phòng
            <br />
            <input type="checkbox" name="vehicle2" value="matphi" /> Phòng
            thương gia <br />
            <input type="checkbox" name="vehicle1" value="mienphi" />Phòng đôi
            <br />
            <input type="checkbox" name="vehicle2" value="matphi" />Phòng đơn
            <br />
            <input type="checkbox" name="vehicle2" value="matphi" />Phòng tình
            yêu <br />
          </form>
        </div>
        <div class="tiennghi-l-pro">
          <h2>Tiện Nghi</h2>
          <form action="">
            <input type="checkbox" name="tn1" value="mienphi" />Có Wifi
            <br />
            <input type="checkbox" name="tn2" value="matphi" /> Có thang máy
            <br />
            <input type="checkbox" name="tn3" value="mienphi" />Lễ tân 24/24
            <br />
            <input type="checkbox" name="tn3" value="matphi" /> bồn tắm
            <br />
            <input type="checkbox" name="tn5" value="matphi" /> Chỗ để xe rộng
            <br />
            <input type="checkbox" name="tn5" value="matphi" /> Bể bơi
            <br />
            <input type="checkbox" name="tn5" value="matphi" /> Phòng tập GYM
            <br />
            <input type="checkbox" name="tn5" value="matphi" /> Massag
            <br />
          </form>
        </div>
        <div class="luutru-l-pro">
          <h2>Loại hình lưu trú</h2>
          <form action="">
            <input type="radio" name="gender" value="male" checked /> Theo
            giờ<br />
            <input type="radio" name="gender" value="female" /> Qua đêm<br />
            <input type="radio" name="gender" value="other" /> Theo tuần
            <br />
            <input type="radio" name="gender" value="other" /> Tất cả
          </form>
        </div>
      </div>
    </div>
    <div class="right-l-pro">
      <div class="giamgia-r">
        <span>Giảm giá 11.11 độc quyền!</span><br />
        <span>Khách sạn giảm giá lên tới 50%! Đặt ngay!</span>
      </div>
      <div class="tim-r-pro">
        <input type="text" placeholder="Nhập phòng bạn muốn tìm kiếm" />
        <select name="tp" id="sampleSelect" class="tp" onchange="location = this.value;">
          <option class="hidden" value="index.php?list-room&id=0&iddm=0">Tất Cả</option></a>
          <option value="index.php?list-room&id=0&iddm=0">Tất Cả</option></a>
          <?php foreach ($categoriesAll as $key => $value) : ?>
            <option value="index.php?list-room&id=<?php echo $value->categories_id; ?>&iddm=<?php echo $value->categories_id; ?>"><?php echo $value->name; ?></option></a>
          <?php endforeach ?>
        </select>
      </div>
      <!--  -->
      <?php foreach ($selectfind as $key => $value) : ?>
        <div class="room-l-pro">
          <div class="img-l-pro">
            <div class="nd-img-room">
              <img src="../layout/assets/img/product/<?php echo $value->thumbnail ?>" alt="" />
              <div class="nd-flex-room">
                <h2>Stayyin - Phòng đơn <span>( Phòng <?php echo $value->name ?> )</span></h2>

                <a href="">Khách sạn</a><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> <br />
                <i style="padding-top: 13px; padding-right: 7px; color: #959ca1" class="fa-solid fa-location-dot"></i><span style="color: #959ca1">Hà nội</span><br />
                <i style="color: #1ba0e2; padding-top: 9px" class="fa-solid fa-heart"></i>
                <span style="color: #1ba0e2">ấn tượng - 8.9</span> (257)
                <br /><br />
                <a style="background-color: #eac2b0; color: #616669" href=""><i style="color: #f3545c" class="fa-solid fa-gift"></i> Quà
                  tặng cho thành viên mới</a>
              </div>
            </div>
            <div class="gia-room">
              <i style="color: #7ed2a8" class="fa-sharp fa-solid fa-building-user"></i>
              <span style="color: #7ed2a8">Đặt phòng đển nhận ưu đãi khủng 11.11</span><br /><br /><br /><br />
              <span style="
                    color: #ff5e1f;
                    font-weight: bold;
                    font-size: 18px;
                    margin-top: 50px;
                  ">
                <?php echo $value->price ?>
              </span>
              <br />
              <br />

              <a href="<?= SITE_URL . "?product-detail&id=$value->room_id&iddm=$value->id_category_room" ?>">Đặt phòng</a>
            </div>
          </div>
        </div>
      <?php endforeach ?>
      <?php foreach ($roomcategori as $key => $value) : ?>
        <div class="room-l-pro">
          <div class="img-l-pro">
            <div class="nd-img-room">
              <img src="../layout/assets/img/product/<?php echo $value->thumbnail ?>" alt="" />
              <div class="nd-flex-room">
                <h2>Stayyin - Phòng đơn <span>( Phòng <?php echo $value->name ?> )</span></h2>

                <a href="">Khách sạn</a><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> <br />
                <i style="padding-top: 13px; padding-right: 7px; color: #959ca1" class="fa-solid fa-location-dot"></i><span style="color: #959ca1">Hà nội</span><br />
                <i style="color: #1ba0e2; padding-top: 9px" class="fa-solid fa-heart"></i>
                <span style="color: #1ba0e2">ấn tượng - 8.9</span> (257)
                <br /><br />
                <a style="background-color: #eac2b0; color: #616669" href=""><i style="color: #f3545c" class="fa-solid fa-gift"></i> Quà
                  tặng cho thành viên mới</a>
              </div>
            </div>
            <div class="gia-room">
              <i style="color: #7ed2a8" class="fa-sharp fa-solid fa-building-user"></i>
              <span style="color: #7ed2a8">Đặt phòng đển nhận ưu đãi khủng 11.11</span><br /><br /><br /><br />
              <span style="
                    color: #ff5e1f;
                    font-weight: bold;
                    font-size: 18px;
                    margin-top: 50px;
                  ">
                <?php echo $value->price ?>
              </span>
              <br />
              <br />

              <a href="<?= SITE_URL . "?product-detail&id=$value->room_id&iddm=$value->id_category_room" ?>">Đặt phòng</a>
            </div>
          </div>
        </div>
      <?php endforeach ?>
      <!--  -->
      <div class="banner-l-pro">
        <img src="assets/img/lis-pro/sp0.webp" alt="" />
        <div class="text-bn">
          <span style="">Muốn nhận mã ưu đãi và giá phòng thấp nhất?</span><br />
          <span style="color: #be90c8">Đặt ngay trên ứng dụng Traveloka, giá trung thực không phí
            ẩn</span><br />
          <a style="color: #1ba0e2" href="">Tải ngay ứng dụng </a>
        </div>
      </div>
      <!--  -->
      <?php foreach ($roomAll as $key => $value) : ?>
        <div class="room-l-pro">
          <div class="img-l-pro">
            <div class="nd-img-room">
              <img src="../layout/assets/img/product/<?php echo $value->thumbnail ?>" alt="" />
              <div class="nd-flex-room">
                <h2>Stayyin - Phòng đơn <span>( Phòng <?php echo $value->name ?> )</span></h2>

                <a href="">Khách sạn</a><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> <br />
                <i style="padding-top: 13px; padding-right: 7px; color: #959ca1" class="fa-solid fa-location-dot"></i><span style="color: #959ca1">Hà nội</span><br />
                <i style="color: #1ba0e2; padding-top: 9px" class="fa-solid fa-heart"></i>
                <span style="color: #1ba0e2">ấn tượng - 8.9</span> (257)
                <br /><br />
                <a style="background-color: #eac2b0; color: #616669" href=""><i style="color: #f3545c" class="fa-solid fa-gift"></i> Quà
                  tặng cho thành viên mới</a>
              </div>
            </div>
            <div class="gia-room">
              <i style="color: #7ed2a8" class="fa-sharp fa-solid fa-building-user"></i>
              <span style="color: #7ed2a8">Đặt phòng đển nhận ưu đãi khủng 11.11</span><br /><br /><br /><br />
              <span style="
                    color: #ff5e1f;
                    font-weight: bold;
                    font-size: 18px;
                    margin-top: 50px;
                  ">
                <?php echo $value->price ?>
              </span>
              <br />
              <br />

              <a href="">Đặt phòng</a>
            </div>
          </div>
        </div>
      <?php endforeach ?>
      <!--  -->
    </div>
  </div>
</div>