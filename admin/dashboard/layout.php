<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
                <a href="<?= ADMIN_BASE . "?room"?>">Room</a>
            </li>
        </ul>
    </nav>
    <main>
        <?php include_once $VIEW_NAME ?>
    </main>
    <footer>
        Chân trang
    </footer>
</body>
</html>