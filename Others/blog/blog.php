<?php
include('nav.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Document</title>
</head>
<?php include('action.php'); ?>

<body>
    <div class="container mt-5">
        <h3 class="text-center">Write your own blog. </h3>
        <form action="action.php" method="POST" class="mt-5">
            <input type="text" name="title" placeholder="Blog Title" class="form-control text-dark my-3 text-center border-dark">
            <textarea name="content" class="form-control text-dark my-3 border-dark" cols="30" rows="10"></textarea>
            <div class="d-flex justify-content-center"> <button name="new_post" class="btn btn-primary">Add Post</button></div>
        </form>
        <a href="add.php" class="text-dark text-decoration-none"><b>List Of Blogs</b></a>
    </div>
    
    <div class="mt-5">
        <?php

        include('footer.php');
        ?>
    </div>



    </body>

</html>