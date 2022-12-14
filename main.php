<?php 
session_start();
if (!isset($_SESSION['user'])){
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css?<?php echo time() ?>">
    <!-- font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
    <h1>
        Hello <?php echo $_SESSION['user']?>
    </h1>
    <a href="method/logout.php">
        Log out
    </a>
    </div>
    <script src="js/index.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>