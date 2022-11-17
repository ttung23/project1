<?php
 function loginadmin($username, $password)
{
    $sql = "select * from admins where name = ? and password = ? limit 1";
    $admin = pdo_query_all($sql,$username,$password);

        if(is_array($admin)){
            $_SESSION['isLogin'] = true;
            $_SESSION['username'] = $admin['email'];
            $_SESSION['password'] = $admin['password'];
            $_SESSION['id'] = $admin['admin_id'];
            $_SESSION['id'] = $admin['id'];
            header("Location: index.php");
        }
}
function loginforgot($username)
{
    $sql = "select * from admins where email = ? limit 1";
    $user = pdo_query_all($sql,$username);

        if(is_array($user)){
            header("Location: loginforgot.php");
        }
}
function register($username,$password){
    $query = "Insert into admins(email,password) values(?,?)";
    pdo_execute($query,$username,$password);
}
function loadAll_admin(){
    $query = "select * from admins order by admin_id desc";
    $listuser = pdo_query_all($query);
    return $listuser;
}
function loadOne_admins($id){
    $query = "select * from user where admin_id = ? desc";
    $listuser = pdo_query_all($query,$id);
    return $listuser;
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
function Insert_admins($name,$email,$password,$gender,$thumbnail,$address,$phone,$id_permission){
    $query = "Insert into admins(name,email,password,gender,thumbnail,adress,phone,id_permission) values(?,?,?,?,?,?,?)";
    pdo_execute($query, $name,$email,$password,$gender,$thumbnail,$address,$phone,$id_permission);
}
function Update_admins($admin_id,$name,$email,$password,$gender,$thumbnail,$address,$phone,$id_permission)
{
    $query = "Update admins set name = ? , email = ?,password = ?,gender = ?,thumbnail = ?, address = ?, phone = ?, id_permission = ? where user_id = ?";
    pdo_execute($query, $name,$email,$password,$gender,$thumbnail,$address,$phone,$id_permission,$admin_id);
}

?>