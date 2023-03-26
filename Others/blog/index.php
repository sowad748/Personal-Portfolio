<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php
    include('nav.php');

    ?>

    <h2 class="text-center mt-4">Recent Blogs</h2>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="card" style="height: 350px; width: 300px;">
                    <img src="Images/blog1.jpg" alt="blog1" style="height: 300px; width: 300px;">
                    <h3 class="text-center">Blog 1</h3>
                    <p class="text-center">This blog is from Switzerland</p>
                </div>
            </div>
            <div class="col">
                <div class="card" style="height: 350px; width: 300px;">
                    <img src="Images/blog2.jpg" alt="blog2" style="height: 300px; width: 300px;">
                    <h3 class="text-center">Blog 2</h3>
                    <p class="text-center">This blog is from New Zealand</p>
                </div>
            </div>
            <div class="col">
                <div class="card" style="height: 350px; width: 300px;">
                    <img src="Images/blog3.jpg" alt="blog3" style="height: 300px; width: 300px;">
                    <h3 class="text-center">Blog 3</h3>
                    <p class="text-center">This blog is from sweden. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5">
        <?php

        include('footer.php');
        ?>
    </div>

</body>

</html>