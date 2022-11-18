<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Chi tiết phòng</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
    <link rel="stylesheet" href="../layout/assets/css/index.css" />
    <link rel="stylesheet" href="../layout/assets/css/hover-index.css">
    <link rel="stylesheet" href="../layout/assets/css/header.css">
    <link rel="stylesheet" href="../layout/assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
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
    if(open) {
      window.location.href = $(this).val()
    }
    //set isopen to opposite so next time when use clicked select box
    //it wont trigger this event
    $(this).data("isopen", !open);
  });
    </script>
</body>

</html>