<?php

require_once '../global.php';
require_once '../../dao/pdo.php';
require_once '../../dao/category_dao.php';
if(isset($_GET['add_room'])){
    $VIEW_NAME = 'add-form.php';
}elseif(isset($_GET['edit_room'])){
    $id = $_GET['id'];
    $VIEW_NAME = 'eidt-form.php';
}elseif(isset($_GET['delete_room'])){
    require_once '../../dao/product_dao.php';
    $id = $_GET['id'];
    product_remove_by_cate_id($id);
    category_remove_by_id($id);
    header('location: ' . ADMIN_BASE . '/danh-muc/index.php');
    die;
    // thực hiện hành động xoá
    // điều hướng về danh sách
}else{
    $VIEW_NAME = '../room/danh-sach.php';
}

include_once '../dashboard/layout.php';

?>