<?php

function dd(){
    echo "<pre>";
    $args = func_get_args();
    var_dump($args);
    die;
}


const BASE_URL = "http://localhost/duan1/";
const SITE_URL = BASE_URL . "site/index.php";
const ADMIN_BASE = BASE_URL . 'admin/';


?>