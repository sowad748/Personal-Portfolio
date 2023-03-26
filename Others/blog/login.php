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

<body>
    <form class="mt-4 p-4" action="action.php" method="POST">
        <div class="form-group p-2">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control border border-dark" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else......probably.</small>
        </div>
        <div class="form-group p-2">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control border border-dark" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group form-check p-2">
            <input type="checkbox" class="form-check-input ms-1" id="exampleCheck1">
            <label class="form-check-label " for="exampleCheck1"> Remember me!</label>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
    <div style="margin-top: 120px;">
        <?php

        include('footer.php');
        ?>
    </div>
</body>

</html>