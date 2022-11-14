<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../layout/assets/css/admin_cmt.css">
    <link rel="stylesheet" href="../layout/assets/css/index-admin.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <main class="containers" style="display: flex;">
        <nav>
            <div class="logo-name">
                <div class="logo-image">
                    <img src="img/logo.jpg" alt="">
                </div>

                <span class="logo_name">StayyInn Hotel</span>
            </div>

            <div class="menu-items">
                <ul class="nav-links">
                    <li><a href="#">
                            <i class="uil uil-estate"></i>
                            <span class="link-name">Trang chủ</span>
                        </a></li>
                    <li><a href="#">
                            <i class="uil uil-comment-alt-dots"></i>
                            <span class="link-name">Quản lý comment</span>
                        </a></li>
                    <li><a href="#">
                            <i class="uil uil-apps"></i>
                            <span class="link-name">quản Lý Service</span>
                        </a></li>
                    <li><a href="#">
                            <i class="uil uil-bed-double"></i>
                            <span class="link-name">quản Lý room</span>
                        </a></li>
                    <li><a href="#">
                            <i class="uil uil-book-medical"></i>
                            <span class="link-name">quản lý booking</span>
                        </a></li>
                    <li><a href="#">
                            <i class="uil uil-list-ui-alt"></i>
                            <span class="link-name">quản Lý Category</span>
                        </a></li>

                    <li><a href="#">
                            <i class="uil uil-bitcoin"></i>
                            <span class="link-name">Quản Lý Dịch Vu</span>
                        </a></li>

                    <li><a href="#">
                            <i class="uil uil-feedback"></i>
                            <span class="link-name">quản Lý Feedbacks</span>
                        </a></li>

                    <li><a href="#">
                            <i class="uil uil-chart-pie"></i>
                            <span class="link-name">Quản Lý Thống Kê</span>
                        </a></li>

                    <li><a href="#">
                            <i class="uil uil-head-side"></i>
                            <span class="link-name">Quản Lý admin</span>
                        </a></li>

                </ul>

                <ul class="logout-mode">
                    <li><a href="#">
                            <i class="uil uil-signout"></i>
                            <span class="link-name">Logout</span>
                        </a></li>

                    <li class="mode">
                        <a href="#">
                            <i class="uil uil-moon"></i>
                            <span class="link-name">Dark Mode</span>
                        </a>

                        <div class="mode-toggle">
                            <span class="switch"></span>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="content">
            <?php include_once $VIEW_NAME ?>
        </div>

    </main>
    <script src="../layout/assets/js/index-admin.js"></script>
</body>

</html>