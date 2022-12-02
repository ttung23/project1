<?php

require_once '../global.php';
require_once '../../dao/pdo.php';
require_once '../../dao/category_dao.php';
require_once '../../dao/room_dao.php';
require_once '../../dao/service_dao.php';
require_once '../../dao/permission_dao.php';
$categoryAll = loadAll_categories();
$service = loadAll_service();
$roomAll = loadAll_room4();
if(isset($_GET['id'])){
    $loadone = loadOne_room_status($_GET['id']);

}else{
    $loadone = $roomAll;
}
$permis =  loadAll_permissions();
        // if(isset($_SESSION['id']) == 5){
            if(isset($_GET['add-room'])){
                if(isset($_POST['add_room'])){
                         $name_room = $_POST['name_room'];
                        $category_id = $_POST['category_id'];
                        $service_id = $_POST['service_id'];
                        $price_room = $_POST['price_room'];
                        $quantity = $_POST['quantity'];
                        $star = $_POST['star'];
                        $location = $_POST['location'];
                        $acreage_room = $_POST['acreage_room'];
                        $location = $_POST['location'];
                        $view = 0;
                        $likes = 0;
                        $status = $_POST['status'];
                        $description = $_POST['description'];
                        $image = $_FILES['image'];
                        $image_name = $image['name'];
                        $err=[];
                
                        if ($name_room == "") {
                            $err['name_room'] = "Bạn chưa nhập tên Phòng";
                        }    
                        if ($price_room == "") {
                            $err['price_room'] = "Bạn chưa nhập Giá Phòng";
                        }
                        if ($category_id == "") {
                            $err['category_id'] = "Bạn chưa nhập tên danh mục";
                        }
                
                        if ($quantity == "") {
                            $err['quantity'] = "Bạn chưa chọn diện tích";
                        }
                
                        if ($location == "") {
                            $err['location'] = "Bạn chưa nhập vị trí";
                        }
                
                        if ($acreage_room == "") {
                            $err['acreage_room'] = "Bạn chưa nhập diện tích";
                        }
                        if ($service_id == "") {
                            $err['service_id'] = "Bạn chưa nhập tên danh mục";
                        }
                
                        if ($status == "") {
                            $err['status'] = "Bạn chưa nhập trạng thái của Phòng";
                        }
                
                        if ($description == "") {
                            $err['description'] = "Bạn chưa nhập mô tả của Phòng";
                        }
                
                        $ext = pathinfo($image_name, PATHINFO_EXTENSION);
                
                        if ($image['size'] <= 0) {
                            $err['img'] = "Bạn chưa chọn ảnh cho phòng";
                        } else if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                            $err['img'] = "Ảnh không đúng định dạng";
                        } else if ($image['size'] >= 2 * 1024 * 1024) {
                            $err['img'] = "Ảnh không được quá 2MB";
                        }
                
                        if (!$err) {
                            $add_room = insert_room($name_room, $description, $image_name,$category_id,$price_room,$star, $quantity,$status,$location,$acreage_room,$view,$likes,$service_id);
                
                            if ($image['size'] > 0) {
                                move_uploaded_file($image['tmp_name'], '../../layout/assets/img/products/' . $image_name);
                            }
                
                            header('location:c_room.php');
                }
            }
                $VIEW_TITLE = "Thêm danh mục";
                $VIEW_CSS = 'admin_add_danhmuc.css';
                $VIEW_ADMIN_NAME = 'add-room.php';
            
            }elseif(isset($_GET['edit-room'])){
                $id = $_GET['id'];
                $oneroom = loadOne_room($id);
                if(isset($_POST['edit_room'])){
                    $name_room = $_POST['name_room'];
                   $category_id = $_POST['category_id'];
                   $service_id = $_POST['service_id'];
                   $price_room = $_POST['price_room'];
                   $quantity = $_POST['quantity'];
                   $star = $_POST['star'];
                   $location = $_POST['location'];
                   $acreage_room = $_POST['acreage_room'];
                   $location = $_POST['location'];
                   $view = $_POST['view'];
                   $likes = $_POST['likes'];
                   $status = $_POST['status'];
                   $description = $_POST['description'];
                   $image = $_FILES['image'];
                   $image_name = $image['name'];
                   $err=[];
            
                   if ($name_room == "") {
                       $err['name_room'] = "Bạn chưa nhập tên Phòng";
                   }    
                   if ($price_room == "") {
                       $err['price_room'] = "Bạn chưa nhập Giá Phòng";
                   }
                   if ($category_id == "") {
                       $err['category_id'] = "Bạn chưa nhập tên danh mục";
                   }
            
                   if ($quantity == "") {
                       $err['quantity'] = "Bạn chưa chọn diện tích";
                   }
            
                   if ($location == "") {
                       $err['location'] = "Bạn chưa nhập vị trí";
                   }
            
                   if ($acreage_room == "") {
                       $err['acreage_room'] = "Bạn chưa nhập diện tích";
                   }
                   if ($service_id == "") {
                       $err['service_id'] = "Bạn chưa nhập tên danh mục";
                   }
            
                   if ($status == "") {
                       $err['status'] = "Bạn chưa nhập trạng thái của Phòng";
                   }
            
                   if ($description == "") {
                       $err['description'] = "Bạn chưa nhập mô tả của Phòng";
                   }
                  
                   $ext = pathinfo($image_name, PATHINFO_EXTENSION);
            
                   if ($image['size'] <= 0) {
                       $err['img'] = "Bạn chưa chọn ảnh cho phòng";
                   } else if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                       $err['img'] = "Ảnh không đúng định dạng";
                   } else if ($image['size'] >= 2 * 1024 * 1024) {
                       $err['img'] = "Ảnh không được quá 2MB";
                   }
            
                   if (!$err) {
            
                       $update = update_room($name_room,$description,$image['name'],$category_id,$price_room,$star, $quantity,$status,$location,$acreage_room,$view,$likes,$service_id,$id);
                       if ($image['size'] > 0) {
                           move_uploaded_file($image['tmp_name'], '../../layout/assets/img/products/' . $image_name);
                       }
            
                       header('location:c_room.php');
            }
                }
                $VIEW_TITLE = "Sửa danh mục";
                $VIEW_CSS = 'admin_add_danhmuc.css';
                $VIEW_ADMIN_NAME = 'edit-room.php';
            }else{
                if (isset($_POST['delete_room'])) {
                    if (isset($_POST['room'])) {
                        $choose_cate = $_POST['room'];
                
                        for ($i = 0; $i < count($choose_cate); $i++) {
                            $delete_room = room_remove($choose_cate[$i]);
                        }
                
                        header('location:c_room.php');
                    }
                }
                $VIEW_TITLE = "Danh sách danh mục";
                $VIEW_CSS = 'admin_room.css';
                $VIEW_ADMIN_NAME = '../room/danh-sach.php';
            }
        // }else{
        //     $VIEW_ADMIN_NAME = '../../admin/dashboard/admin_index.php';

        // }

include_once '../templates/layout/layout.php';

?>