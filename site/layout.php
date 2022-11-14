<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link  rel="stylesheet" href="../style/css/cart.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <nav>
        <ul>
            <li>
                <a href="">Trang chủ</a>
            </li>
            <li>
                <a href="<?= SITE_URL . "?danh-muc"?>">Danh mục</a>
                <a href="<?= SITE_URL . "?chi-tiet"?>">Danh mục</a>
                <a href="<?= SITE_URL . "?cart"?>">Danh mục</a>
                <a href="<?= ADMIN_BASE . "?room"?>">Room</a>
            </li>
        </ul>
    </nav>
    <main class="container">
        <?php include_once $VIEW_NAME ?>
    </main>
    <footer>
        Chân trang
    </footer>
</body>
</html>