<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    
    <ul class="list-group">
        <li class="list-group-item">First item: <?php echo $username?></li>
        <li class="list-group-item">Second item: <?php echo $password?></li>
        <li class="list-group-item">Third item: <?php echo $email?></li>
    </ul>

</body>
</html>