<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $_TITLE ?></title>
    <title>Chi tiết phòng</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../layout/assets/css/index.css" />
    <link rel="stylesheet" href="../layout/assets/css/cart.css" />
    <link rel="stylesheet" href="../layout/assets/css/hover-index.css">
    <link rel="stylesheet" href="../layout/assets/css/header.css">
    <link rel="stylesheet" href="../layout/assets/css/thanhtoan_nganhang.css">
    <link rel="stylesheet" href="../layout/assets/css/chi-tiet.css">
    <link rel="stylesheet" href="../layout/assets/css/list-product.css">
    <link rel="stylesheet" href="../layout/assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../layout/assets/owlcarousel/assets/owl.carousel.min.css" />
    <link
      rel="stylesheet"
      href="../layout/assets/owlcarousel/assets/owl.theme.default.min.css"
    />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="../layout/assets/owlcarousel/owl.carousel.min.js"></script>
    <script src="../layout/assets/js/slider.js"></script>
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
            <script src="../layout/assets/js/list-room.js"></script>
            <script src="jquery-3.6.0.min.js"></script>
            <script>
                $("select").click(function() {
                    var open = $(this).data("isopen");
                    if (open) {
                        window.location.href = $(this).val()
                    }
                    //set isopen to opposite so next time when use clicked select box
                    //it wont trigger this event
                    $(this).data("isopen", !open);
                });
            </script>

            <script src="../layout/assets/js/main.js"></script>
</body>

</html>