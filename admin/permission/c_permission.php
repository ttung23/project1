<?php
session_start();


require_once '../global.php';
require_once '../../dao/pdo.php';
require_once '../../dao/category_dao.php';
require_once '../../dao/room_dao.php';
require_once '../../dao/service_dao.php';
require_once '../../dao/permission_dao.php';
$permission = loadAll_permissions();

if(isset($_GET['add-per'])){
    if(isset($_POST['add_per'])){
             $name_per = $_POST['name_per'];
            $description = $_POST['description'];
            $err=[];
    
            if ($name_per == "") {
                $err['name_per'] = "Bạn chưa nhập tên Phòng";
            }    
            if ($description == "") {
                $err['description'] = "Bạn chưa nhập mô tả của Phòng";
            }
            if (!$err) {
                $add_room = Insert_permissions($name_per, $description);
                header('location:c_permission.php');
    }
}
    $VIEW_TITLE = "Thêm danh mục";
    $VIEW_CSS = 'admin_add_danhmuc.css';
    $VIEW_ADMIN_NAME = 'add-permission.php';

}elseif(isset($_GET['edit-permission'])){
    
    $id = $_GET['id'];
    $permissionone = loadAll_permissionsone($id);
    if(isset($_POST['edit_permission'])){
        $id = $_GET['id'];
        $name_permission = $_POST['name_permission'];
       $des = $_POST['des'];
       $err = [];

       if ($name_permission == "") {
           $err['name_permission'] = "Bạn chưa nhập tên Phòng";
       }    
       if ($des == "") {
           $err['des'] = "Bạn chưa nhập Giá Phòng";
       }
       if (!$err) {
        $add_room = Update_permissions($name_permission, $des,$id);
        header('location:c_permission.php');
}
    }
    $VIEW_TITLE = "Sửa danh mục";
    $VIEW_CSS = 'admin_add_danhmuc.css';
    $VIEW_ADMIN_NAME = 'edit-permission.php';
}else{
    if (isset($_POST['delete_per'])) {
        if (isset($_POST['permission'])) {
            $choose_cate = $_POST['permission'];
    
            for ($i = 0; $i < count($choose_cate); $i++) {
                $delete_permission = permissions_remove_by_id($choose_cate[$i]);
            }
    
            header('location:c_permission.php');
        }
    }
    $VIEW_TITLE = "Danh sách chức vụ";
    $VIEW_CSS = 'admin_room.css';
    $VIEW_ADMIN_NAME = '../permission/danh-sach.php';
}

include_once '../templates/layout/layout.php';

?>