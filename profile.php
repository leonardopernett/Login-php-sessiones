<?php  session_start();

if(isset($_SESSION['user'])){   ?>
  
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>welcome</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header>
                    <h1 class="h3">
                        bienvenido <?= $_SESSION['user'] ?>
                    </h1>
                    <a href="logout.php">salir</a>
                </header>
            </div>
        </div>
    </div>
</body>
</html>

<?php  } else { header('location:login.php'); } ?>

