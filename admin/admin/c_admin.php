<?php

require_once '../global.php';
require_once '../../dao/pdo.php';
require_once '../../dao/category_dao.php';
require_once '../../dao/room_dao.php';
require_once '../../dao/service_dao.php';
require_once '../../dao/admin_dao.php';
require_once '../../dao/permission_dao.php';
$categoryAll = loadAll_categories();
$per = loadAll_permissions();
$admin = loadAll_admin();

if(isset($_GET['add-admin'])){
    if(isset($_POST['add_admin'])){
        $name_admin = $_POST['name_admin'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];      
         $status = $_POST['status'];
       $image = $_FILES['image'];
       $image_name = $image['name'];      
       $id_permission = $_POST['permission'];
        $err=[];
       if ($name_admin == "") {
        $err['name_admin'] = "Bạn chưa nhập tên Phòng";
    }    
    if ($email == "") {
        $err['email'] = "Bạn chưa nhập email";
    }
    if ($password == "") {
        $err['password'] = "Bạn chưa nhập password";
    }

    if ($address == "") {
        $err['address'] = "Bạn chưa chọn address";
    }

    if ($phone == "") {
        $err['phone'] = "Bạn chưa nhập phone";
    }

    if ($gender == "") {
        $err['gender'] = "Bạn chưa nhập gender";
    }
    if ($status == "") {
        $err['status'] = "Bạn chưa nhập trạng thái của Phòng";
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
                $update = Insert_admins($name_admin,$email,$password,$gender,$image_name,$address,$phone,$status,$id_permission);
    
                if ($image['size'] > 0) {
                    move_uploaded_file($image['tmp_name'], '../../layout/assets/img/' . $image_name);
                }
    
                header('location:c_admin.php');
    }
}
    $VIEW_TITLE = "Thêm danh mục";
    $VIEW_CSS = 'admin_add_danhmuc.css';
    $VIEW_ADMIN_NAME = 'add-admin.php';

}elseif(isset($_GET['edit_admin'])){
    $id = $_GET['id'];
    $oneroom = loadOne_admins($id);
    if(isset($_POST['edit_admin'])){
        $name_admin = $_POST['name_admin'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];      
         $status = $_POST['status'];
       $image = $_FILES['image'];
       $image_name = $image['name'];
       $id_permission = $_POST['permission'];

       $err=[];

       if ($name_admin == "") {
           $err['name_admin'] = "Bạn chưa nhập tên Phòng";
       }    
       if ($email == "") {
           $err['email'] = "Bạn chưa nhập email";
       }
       if ($password == "") {
           $err['password'] = "Bạn chưa nhập password";
       }

       if ($address == "") {
           $err['address'] = "Bạn chưa chọn address";
       }

       if ($phone == "") {
           $err['phone'] = "Bạn chưa nhập phone";
       }

       if ($gender == "") {
           $err['gender'] = "Bạn chưa nhập gender";
       }
       if ($status == "") {
           $err['status'] = "Bạn chưa nhập trạng thái của Phòng";
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

           $update = Update_admins($name_admin,$email,$password,$gender,$image_name,$address,$phone,$status,$id_permission,$id);
           if ($image['size'] > 0) {
               move_uploaded_file($image['tmp_name'], '../layout/assets/img/' . $image_name);
           }

           header('location:c_admin.php');
}
    }
    $VIEW_TITLE = "Sửa danh mục";
    $VIEW_CSS = 'admin_add_danhmuc.css';
    $VIEW_ADMIN_NAME = 'edit-admin.php';
}else{
    if (isset($_POST['delete_admin'])) {
        if (isset($_POST['admin'])) {
            $choose_cate = $_POST['admin'];
    
            for ($i = 0; $i < count($choose_cate); $i++) {
                $delete_admin = admin_remove_by_id($choose_cate[$i]);
            }
    
            header('location:c_admin.php');
        }
    }
    $VIEW_TITLE = "Danh sách danh mục";
    $VIEW_CSS = 'admin_cmt.css';
    $VIEW_ADMIN_NAME = '../admin/danh-sach.php';
}

include_once '../templates/layout/layout.php';

?>