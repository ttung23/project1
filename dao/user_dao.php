<?php
 function login($username, $password)
{
    $sql = "select * from users where username = '$username' and password = '$password' limit 1";
    $user = pdo_query_all($sql);

        if(($user != [])){
           foreach($user as $key => $value){
                $_SESSION['username'] = $value->username;
                $_SESSION['id'] = $value->user_id;
                $_SESSION['password'] = $value->password;
                $_SESSION['name'] = $value->name;
                $_SESSION['user_id'] = $value->user_id;
                $_SESSION['gender'] = $value->gender;
                $_SESSION['email'] = $value->email;
                $_SESSION['images'] = $value->images;
                $_SESSION['address'] = $value->address;
                $_SESSION['phone'] = $value->phone;
                $_SESSION['date'] = $value->date;
                $_SESSION['status'] = $value->status;
                $_SESSION['bookingdetail_id'] = $value->bookingdetail_id;
                 header("location:index.php?");
           }
        }else{
            echo "bạn Đã sai tài khoản or mật khẩu";
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
function getinfo($client) {
    $client->setAccessToken($_SESSION['access_token']);
    // $plus = new Google_Service_Plus($client);

    // if ($client->isAccessTokenExpired()) {
    //     //Truy cập bị hết hạn, cần xác thực lại
    //     //Chuyển hướng sang Google để lấy xác thực
    //     $auth_url = $client->createAuthUrl();
    //     header("Location: $auth_url");
    //     die();
    // }
    // $client = new Google_Client();

    $redirecturi = "http://localhost/project1/site/index.php";  // URL này được Google chuyển hướng, khi người dùng đồng ý

    $client->setRedirectUri($redirecturi);

    // Khai báo xin các quyền truy cập: lấy email, tên, ID người dùng ...
    // Tham khảo các quyền khác Scope: https://developers.google.com/identity/protocols/googlescopes
    $client->addScope([
        'https://www.googleapis.com/auth/plus.login',
        'https://www.googleapis.com/auth/userinfo.email'
    ]);



    //Set param google API
    $client->setClientId('238131032596-gru69pjredk5gf5ai1f778skcg1f3eos.apps.googleusercontent.com');
    $client->setClientSecret('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');
    $client->setAccessType('offline');

    //Đây là URL đến Google, bạn cần mở nếu chưa đăng nhập
    $auth_url = $client->createAuthUrl();


    if (isset($_SESSION['access_token']) && $_SESSION['access_token'])
    {
        /*
         * Đã đăng nhập trước rồi do tồn tại access_token trong Session
         * Nên bạn không cần xác thực từ Google nữa mà chỉ việc lấy thông tin
         */

        getinfo($client);

    }
    else
    {
        /**
         * Nếu tồn tại $_GET['code'] trên URL có nghĩa là Google vừa gửi Code truy cập tới cho bạn, bạn cần lấy thông
         * tin này để truy cập.
         */
        if (isset($_GET['code'])) {
            $client->fetchAccessTokenWithAuthCode($_GET['code']);
            //Lấy mã Token và lưu lại tại SESSION
            $_SESSION['access_token'] = $client->getAccessToken();
            getinfo($client);
        }
        else
        {
            //Chuyển hướng sang Google để lấy xác thực
            $auth_url = $client->createAuthUrl();
            header("Location: $auth_url");
            die();
        }
    }
}
?>