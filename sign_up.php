<?php
 
 @include 'config.php'

 if(isset($_POST['submit'])){

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $ = mysqli_real_escape_string($conn, $_POST['']);
    
 };
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Mercedez-Benz car online shopping</title>
</head>

<body style="overflow: hidden;">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand text-light" href="#"><img src="imags/merc-logo/изображение-removebg-preview.png"
                        alt="" width="100"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav text-center fs-5 fw-normal">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="about" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cars.html">Cars</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="basket.html" class="nav-link text-dark"><i class="fa-solid fa-basket-shopping"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-danger"><i class="fa-solid fa-heart"></i></a>
                        </li>
                    </ul>
                    <a href="sign_in.html" class="btn btn-primary rounded-pill active">Sign up</a>
                </div>
            </div>
        </nav>
    </header>
    <section class="py-5">
        <div class="container mt-5">
            <div class="row mt-5">
                <div class="col-4"></div>
                <div class="col-4 mt-5">
                        <div class="form-container">
                            <form action="./sign_up.php" method="post">
                                <div class="mb-3">
                                  <input type="text" class="form-control mb-4" id="username" name="username" require placeholder="Enter your usernmae...">
                                </div>
                                <div class="mb-3">
                                  <input type="email" class="form-control my-3" id="email"  name="email" require placeholder="Enter your email...">
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control mb-4" id="password" require name="password" placeholder="Enter your password...">
                                  </div>
                                  <div class="mb-3">
                                    <input type="password" class="form-control my-3" id="" placeholder="Confirm your password...">
                                    <a href="sign_in.php" class="text-decoration-none">Sign in</a>
                                  </div>
                                <button type="submit" class="btn btn-primary col-md-12">Sign up</button>
                              </form>
                        </div>
                    </div>
                </div>
                <div class="col-4"></div>
    
            </div>
        </div>
    </section> 
    <footer class="footer">
        <div class="footer-bottom bg-dark fixed-bottom b-0 l-0 ">
            <p class="text-center text-light mt-3 fs-5">
                Mercedez-Benz
            </p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>

</body>

</html>