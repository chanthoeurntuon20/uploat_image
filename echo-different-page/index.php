<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header text-center">Login</div>
                    <div class="card-body">
                        <form action="process.php" method="POST">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="username" name="username" placeholder="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" placeholder="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Eamil</label>
                                <input type="email" name="email" placeholder="email" class="form-control">
                            </div>
                            <button type="submit" name="login" class="btn btn-primary">Login</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>