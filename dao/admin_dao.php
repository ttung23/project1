<?php
 function loginadmin($username, $password)
{
    $sql = "select * from admins where email = ? and password = ?";
    $admin = pdo_query_one_person($sql,$username,$password);
    return $admin;
}

function logout_admin () {
    unset($_SESSION['admin']);
}
// function loginforgot($username)
// {
//     $sql = "select * from admins where email = ? limit 1";
//     $user = pdo_query_all($sql,$username);

//         if(is_array($user)){
//             header("Location: loginforgot.php");
//         }
// }
// function register($username,$password){
//     $query = "Insert into admins(email,password) values(?,?)";
//     pdo_execute($query,$username,$password);
// }
function loadAll_admin(){
    $query = "SELECT ad.*, per.name as name_permission FROM `admins` ad LEFT JOIN permissions per ON ad.id_permission = per.permission_id;";
    $listuser = pdo_query_all($query);
    return $listuser;
}

function loadOne_admins($id){
    $query = "select * from admins where admin_id = ?";
    $listuser = pdo_query_one($query,$id);
    return $listuser;
}

function load_Admin ($id_user) {
    $query = "select * from admins where admin_id = ?";
    $listuser = pdo_query_one_person($query,$id_user);
    return $listuser;
}

function load_admin_by_permission ($per) {
    $sql = "SELECT ad.*, per.name as name_permission FROM `admins` ad LEFT JOIN permissions per ON ad.id_permission = per.permission_id where id_permission = ?";
    $admin = pdo_query_all($sql, $per);
    return $admin;
}

function admin_remove_by_id($user_id){
    $query = "delete from admins where admin_id = ?";
    pdo_execute($query, $user_id);
}
function admin_order_by_id($user_id){
    $query = "select * from admin order by ? desc";
    $listuser = pdo_query_all($query,$user_id);
    return $listuser;
}
function Insert_admins($name_admin,$email,$password,$gender,$image_name,$address,$phone, $id_permission){
    $query = "Insert into admins(name,email,password,gender,thumbnail,address,phone,id_permission) values(?,?,?,?,?,?,?,?)";
    pdo_execute($query, $name_admin, $email, $password, $gender, $image_name, $address, $phone, $id_permission);
}
function Update_admins($name_admin,$email,$password,$gender,$image,$address,$phone,$id_permission,$id)
{
    $query = "UPDATE admins set name = ?, email = ?, password = ?, gender = ?, thumbnail = ?, address = ?, phone = ?, id_permission = ?, updated_at = current_timestamp() where admin_id = ?";
    pdo_execute($query,$name_admin,$email,$password,$gender,$image,$address,$phone,$id_permission,$id);
}

?>