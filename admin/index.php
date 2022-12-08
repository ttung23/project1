<?php
require_once '../admin/global.php';
session_start();
if (isset($_SESSION['admin'])) {
    header("location: " . ADMIN_BASE);
} else {
    header("location: ".SITE_URL."?login_admin");
}
?>