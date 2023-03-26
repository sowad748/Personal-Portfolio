<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <p>Click on the following link to go to the profile.</p>
        <a href="/profile/{{auth()->user()->id}}">View Profile</a>
    </div>
</body>
</html>
