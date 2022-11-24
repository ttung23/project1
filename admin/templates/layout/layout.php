<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $VIEW_TITLE ?></title>

    <!-- TAILWIND -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../layout/assets/css/side.css">
    <link rel="stylesheet" href="../layout/assets/css/<?php echo $VIEW_CSS ?>">
    
    <!-- ICON -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- BIỂU ĐỒ -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    
</head>

<body>
    <main class="container" style="display: flex;">
        <?php include_once "side.php" ?>    

        <?php include_once $VIEW_ADMIN_NAME ?>

    </main>

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


        new Morris.Donut({
            // ID of the element in which to draw the chart.
            element: 'myfirstchart',
            // Chart data records -- each entry in this array corresponds to a point on
            // the chart.
            data: [{
                    year: '2008',
                    value: 20
                },
                {
                    year: '2009',
                    value: 10
                },
                {
                    year: '2010',
                    value: 5
                },
                {
                    year: '2011',
                    value: 5
                },
                {
                    year: '2012',
                    value: 20
                }
            ],
            // The name of the data record attribute that contains x-values.
            xkey: 'year',
            // A list of names of data record attributes that contain y-values.
            ykeys: ['value'],
            // Labels for the ykeys -- will be displayed when you hover over the
            // chart.
            labels: ['Value']
        });
    </script>



</body>

</html>