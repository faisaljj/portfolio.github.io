<?php
include("connection.php");

?>

<!DOCTYPE html>
<html>

<head>
    <title>portfolio website</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet" href="https://fonts.gstatic.com">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&dispaly=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark nav">
        <div class="container-fluid navbar">
            <a class="navbar-brand" href="#">Port <span>Folio</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav2" id="navbarNavDropdown">
                <ul class="navbar-nav nav3">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="portfolio.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.html">Products</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="skills.html" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Skills
                        </a>
                        <ul class="dropdown-menu dropdown1">
                            <li><a class="dropdown-item" href="#">Web Desgining</a></li>
                            <li><a class="dropdown-item" href="#">Web Development</a></li>
                            <li><a class="dropdown-item" href="#">Android App</a></li>
                            <li><a class="dropdown-item" href="#">PC Build</a></li>
                            <li><a class="dropdown-item" href="#">CCTV Installation</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="about.html">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<div class="contact-form">

    <div class="container-fluid ctn-form">
        <form class="row g-3 toy">
            <div class="col-md-6 inp">
                <label for="inputEmail4" class="form-label inp2">Email</label>
                <input type="email" class="form-control inp3" name="email" id="inputEmail4">
            </div>
            <div class="col-md-6 inp">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="inputPassword4">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Apt ">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Address 2</label>
                <input type="text" class="form-control" name="address2" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" name="city" id="inputCity">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select name="state" id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>Arunachal Pradesh </option>
                    <option>Andhra Pradesh </option>
                    <option>Assam </option>
                    <option>Bihar </option>
                    <option>Chhattisgarh </option>
                    <option>Goa Panaji </option>
                    <option>Gujarat </option>
                    <option>Haryana </option>
                    <option>Himachal Pradesh </option>
                    <option>Jharkhand </option>
                    <option>Karnataka </option>
                    <option>kerala </option>
                    <option>Madhya Pradesh </option>
                    <option>Maharashtra </option>
                    <option>Manipur </option>
                    <option>Meghalaya</option>
                    <option>Mizoram</option>
                    <option>Nagaland </option>
                    <option>Odisha</option>
                    <option>Punjab</option>
                    <option>Rajasthan</option>
                    <option>Sikkim</option>
                    <option>Tamil Nadu</option>
                    <option>Telangana</option>
                    <option>Tripura</option>
                    <option>Uttar Pradesh</option>
                    <option>Uttarakhand</option>
                    <option>Gairsain</option>
                    <option>West Bengal</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" name="zip" id="inputZip">
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>
    </div>

</div>
    
</body>

</html>