<?php
 function login($username, $password)
{
    $sql = "select * from users where username = '$username' and password = '$password' limit 1";
    $user = pdo_query_all($sql);

        if(is_array($user)){
            $_SESSION['isLogin'] = true;
            $_SESSION['username'] = $user['username'];
            $_SESSION['password'] = $user['password'];
            $_SESSION['id'] = $user['user_id'];
            $_SESSION['id'] = $user['id'];
            header("Location: index.php");
        }
}
function loginforgot($username)
{
    $sql = "select * from users where username = '$username' limit 1";
    $user = pdo_query_all($sql);

        if(is_array($user)){
            header("Location: loginforgot.php");
        }
}
function register($username,$password){
    $query = "Insert into users(username,password) values(?,?)";
    pdo_execute($query,$username,$password);
}
function loadAll_users(){
    $query = "select * from user order by user_id desc";
    $listuser = pdo_query_all($query);
    return $listuser;
}
function loadOne_users($id){
    $query = "select * from user where user_id = ? desc";
    $listuser = pdo_query_all($query,$id);
    return $listuser;
}

function user_remove_by_id($user_id){
    $query = "delete from users where id = ?";
    pdo_execute($query, $user_id);
}
function user_order_by_id($user_id){
    $query = "select * from user order by ? desc";
    $listuser = pdo_query_all($query,$user_id);
    return $listuser;
}
function Insert_user($name,$username,$password,$gender,$email,$images,$address,$phone,$date){
    $query = "Insert into users(name,username,password,gender,email,adress,phone,date) values(?,?,?,?,?,?,?)";
    pdo_execute($query, $name,$username,$password,$gender,$email,$images,$address,$phone,$date);
}
function Update_user($id,$name,$username,$password,$gender,$email,$images,$address,$phone,$date)
{
    $query = "Update users set name = ? , username = ?,password = ?,gender = ?,email = ?, images = ?, address = ?, phone = ?, date = ? where user_id = ?";
    pdo_execute($query, $name,$username,$password,$gender,$email,$images,$address,$phone,$date,$id);
}

?>