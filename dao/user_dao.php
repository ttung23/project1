<?php
 function login($username, $password)
{
    $sql = "select * from users where username = '$username' and password = '$password' limit 1";
    $user = pdo_query_one_person($sql);

        if(($user != [])){
            $_SESSION['user'] = $user;

            header("location:index.php?");
        //    foreach($user as $key => $value){
        //         $_SESSION['username'] = $value->username;
        //         $_SESSION['password'] = $value->password;
        //         $_SESSION['name'] = $value->name;
        //         $_SESSION['user_id'] = $value->user_id;
        //         $_SESSION['gender'] = $value->gender;
        //         $_SESSION['email'] = $value->email;
        //         $_SESSION['images'] = $value->images;
        //         $_SESSION['address'] = $value->address;
        //         $_SESSION['phone'] = $value->phone;
        //         $_SESSION['date'] = $value->date;
        //         $_SESSION['status'] = $value->status;
                
        //    }
        } else {
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

function forgot_user ($name, $username, $date, $email, $phone) {
    $query = "select * from users where name = ? and username = ? and email = ? and date = ? and phone = ?";
    $user = pdo_query_one($query, $name, $username, $date, $email, $phone);
    return $user;
}

function update_pass ($pass, $user_id) {
    $query = "update users set password = ? where user_id = ?";
    pdo_execute($query, $pass, $user_id);
}

function register($username,$password){
    $query = "Insert into users(username,password) values(?,?)";
    pdo_execute($query,$username,$password);
}

function loadAll_users() {
    $query = "select * from users";
    $listuser = pdo_query_all($query);
    return $listuser;
}

function loadOne_user($id){
    $query = "select * from users where user_id = ?";
    $user = pdo_query_one($query, $id);
    return $user;
}

function load_one_user ($id) {
    $query = "select * from users where user_id = ?";
    $user = pdo_query_one_person($query, $id);
    return $user;
}

function load_user_by_status ($status) {
    $query = "select * from users where status = ?";
    $listuser = pdo_query_all($query, $status);
    return $listuser;
}

function load_sum_users () {
    $query = "select count(*) as tong_user from users";
    $listuser = pdo_query_one_person($query);
    return $listuser;
}

function load_thongke_user_by_month ($month) {
    $sql = "SELECT COUNT(*) as tong_user FROM `users` WHERE month(created_at) = ?";
    $user = pdo_query_one_person($sql, $month);
    return $user;
}

function set_status_user ($user_id, $status){
    $query = "UPDATE users set status = ?, updated_at = current_timestamp() where user_id = ?";
    pdo_execute($query, $user_id, $status);
}

function list_user_block () {
    $query = "select * from users where status = 0";
    $listuser = pdo_query_all($query);
    return $listuser;
}

function signUp($name, $username, $password, $gender, $email, $images, $address, $phone, $date){
    $query = "INSERT into users (name, username, password, gender, email, images, address, phone, date) 
    VALUES (?,?,?,?,?,?,?,?,?)";
    pdo_execute($query, $name, $username, $password, $gender, $email, $images, $address, $phone, $date);
}

function delete_user ($id_user) {
    $sql = "DELETE FROM users where user_id = ?";
    pdo_execute($sql, $id_user);
}

function Update_user($name, $username, $gender, $email, $images, $address, $phone, $date, $id)
{
    $query = "UPDATE users SET name = ? , username = ?, gender = ?, email = ?, images = ?, address = ?, phone = ?, date = ?, updated_at = current_timestamp() where user_id = ?";
    pdo_execute($query, $name, $username, $gender, $email, $images, $address, $phone, $date, $id);
}
function Update_users($name, $username,$password, $email, $images, $address, $phone, $date, $id)
{
    $query = "UPDATE users SET name = ? , username = ?,password = ? , email = ?, images = ?, address = ?, phone = ?, date = ?, updated_at = current_timestamp() where user_id = ?";
    pdo_execute($query ,$name, $username,$password, $email, $images, $address, $phone, $date, $id);
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
