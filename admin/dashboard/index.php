<?php
        require_once '../global.php';

        if(isset($_GET['chi-tiet'])){
            
        }elseif(isset($_GET['service'])){
            $VIEW_NAME = '../service/danh-sach.php';
        }else{
            $VIEW_NAME = '../room/danh-sach.php';
        }
        include_once '../dashboard/layout.php';
    ?>