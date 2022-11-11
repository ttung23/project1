<?php
        require_once '../global.php';

        if(isset($_GET['chi-tiet'])){
            
        }elseif(isset($_GET['danh-muc'])){
           
        }else{
            $VIEW_NAME = '../room/danh-sach.php';
            include_once '../dashboard/layout.php';
        }
    ?>