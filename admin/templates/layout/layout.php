<?php
if (isset($_GET['admin_logout'])) {
    unset($_SESSION['admin']);
    header("location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $VIEW_TITLE ?></title>

    <!-- TAILWIND -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> -->

    <!-- CSS -->
    <link rel="stylesheet" href="../layout/assets/css/side.css">
    <link rel="stylesheet" href="../layout/assets/css/top.css">
    <link rel="stylesheet" href="../layout/assets/css/bg_dong.css">
    <link rel="stylesheet" href="../layout/assets/css/<?php echo $VIEW_CSS ?>">

    <?php
    if (isset($service) || isset($roomAll)) {
        echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65' crossorigin='anonymous'>";
    } else {
        echo "";
    }
    ?>
    <!-- ICON -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- BIỂU ĐỒ -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head>

<body>
    <div class="bg-dong absolute top-0 bottom-0 left-0 right-0">
        <div class="night">
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
        </div>
    </div>

    <main class="" style="display: flex;">
        <?php include_once "side.php" ?>

        <section class="dashboard">
            <div class="top">
                <i class="uil uil-bars sidebar-toggle"></i>

                <div class="flex items-center gap-[10px]">
                    <img src="../../layout/assets/img/admins/<?= $_SESSION['admin']->thumbnail ?>" alt="">
                    <span class="name"><?= $_SESSION['admin']->name ?></span>
                </div>

                <div></div>
            </div>

            <?php include_once $VIEW_ADMIN_NAME ?>
        </section>

    </main>
    
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="//cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <script src="../../layout/assets/js/main.js"></script>
    <script src="../../layout/assets/js/list-room.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
    
    <script>
        const body = document.querySelector("body"),
            modeToggle = body.querySelector(".mode-toggle");

        let getMode = localStorage.getItem("mode");
        if (getMode && getMode === "dark") {
            body.classList.toggle("dark");
        }

        modeToggle.addEventListener("click", () => {
            body.classList.toggle("dark");
            if (body.classList.contains("dark")) {
                localStorage.setItem("mode", "dark");
            } else {
                localStorage.setItem("mode", "light");
            }
        });
    </script>
</body>

</html>