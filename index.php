<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - Log in or sign up</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css?<?php echo time() ?>">
    <!-- font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
</head>

<body style="background-color: #f0f2f5; height: 100vh; cursor: default; user-select: none;" class="py-4">
    <div class="container-fluid d-flex flex-column flex-lg-row align-items-center justify-content-center"
        style="height: 100%;">

        <div class="title text-center text-lg-start">
            <h1 class="text-primary">
                facebook
            </h1>
            <p>
                Facebook helps you connect and share <br> with the people in your life.
            </p>
        </div>

        <div class="main d-flex flex-column justify-content-center align-items-center ms-md-5">
            <div class="form" style="width: 380px;padding: 1rem; border-radius: 10px; background-color:white">
                <form class="d-flex flex-column" action="method/login.php" method="post">
                    <input required type="email" class="form-control mb-3 py-2" placeholder="Email Address" name="email">
                    <input required type="password" class="form-control mb-2 py-2" placeholder="Password" name="password">
                    <button name="login" type="submit" class="btn btn-primary mb-2" style="font-weight: bold; font-size:17px;">Log
                        in</button>
                </form>
                <hr>
                <div class="register d-flex flex-row justify-content-center">
                    <button class="btn my-2" style="background-color: #42b72a; color:white; font-weight:bold;"
                        data-bs-toggle="modal" data-bs-target="#registerModal">Create New Acount</button>
                    <!-- Modal -->
                    <div class="modal fade" id="registerModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog d-flex flex-row justify-content-center align-items-center"
                            style="height: 100%;">
                            <div class="modal-content" style="width: 360px;">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="registerModalabel">Sign Up</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="registerform" action="method/register.php" method="post">
                                        <div class="fullname d-flex flex-row mb-2">
                                            <input id="firstname" type="text" placeholder="Firstname"
                                                class="w-50 form-control me-2" required name="firstname">
                                            <input id="lastname" type="text" placeholder="Lastname"
                                                class="w-50 form-control" required name="lastname">
                                        </div>
                                        <input id="email" type="email" placeholder="Email Address"
                                            class="form-control mb-2" required name="email">
                                        <input id="password" type="password" placeholder="Password"
                                            class="form-control mb-2" required name="password">
                                        <input id="verifypassword" type="password" placeholder="Verify Password"
                                            class="form-control mb-2" required>
                                        <button type="submit" name="register" id="register"
                                            class="btn btn-success px-3 py-2 fw-bold w-100">Sign
                                            up</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p style="font-size: 12px;" class="mt-3">
                <b> Create a Page </b> for a celebrity, brand or business.
            </p>
        </div>
    </div>
    <script src="js/index.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>