<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../layout/assets/css/index.css" />
    <link rel="stylesheet" href="../layout/assets/css/hover-index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container-index">
        <!-- header -->
        <div>
        <?php include_once "header.php" ?>
        <div>
        <!-- content  -->
        <main>
            <?php include_once $VIEW_NAME ?>
        <main>
                <!-- foodted -->
        <div class="footer">
            <?php include_once "footer.php" ?>
        </div>
    </div>
    <script src="../layout/assets/js/main.js"></script>
</body>

</html>