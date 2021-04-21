<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter-Covid CTIS - Welcome</title>
    <!-- Icon -->
    <link rel="icon" href="/images/favicon.webp">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/css/styles.css" />

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/images/favicon.webp" alt="" style="width:32px;">
                <h5 style="display: inline-block;"><b>Counter-Covid</b> CTIS Program</h5>
            </a>
        </div>
        <div class="d-flex button-group">
            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop">REGISTER</button>
            <a href="{{ route('login') }}">
                <button type="button" class="btn btn-outline-danger">LOGIN</button>
            </a>
        </div>
    </nav>
    <!-- Navbar -->
    <!-- Header -->
    <div class="header">
        <div class="logo-wrap text-center">
            <img class=logo src="/images/Counter-Covid Logo.png" alt="">
        </div>
        <h1><span style="font-size: 90px;">Welcome to</span> <br> Counter-Covid <br><span style="font-size: 80px;">CTIS
                Application</span> </h1>
        <div class="button-group">
            <button type="button" class="btn btn-danger btn-lg" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <h3>REGISTER</h3>
            </button>
            <a href="{{ route('login') }}">
                <button type="button" class="btn btn-outline-danger btn-lg">
                    <h3>LOGIN</h3>
                </button>
            </a>
        </div>

    </div>
    <!-- Header -->
    <!-- About -->
    <section class="about">
        <div class="container">
            <h2>About Us</h2><br>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit, debitis ea odit quas alias laudantium
                dolorem, reiciendis perferendis aliquam veritatis in molestiae quae at necessitatibus recusandae facere
                nihil eum? Ullam, dolorum nihil? Repellendus dolorum corporis quidem, esse quibusdam tempora suscipit
                laboriosam earum molestiae velit praesentium quis nesciunt vitae. Incidunt ex blanditiis in molestias
                provident, dicta ullam vel saepe, repellat repudiandae enim dolorem dolorum quidem id doloremque at
                maxime
                rem unde quisquam inventore veritatis. Cumque magni ex, voluptates asperiores eos dolores praesentium
                veritatis quo maxime ipsam distinctio. Voluptates possimus voluptate aut quia sequi tempore? Vero sequi
                at,
                dignissimos soluta rem minima.
            </p>
        </div>
    </section>
    <section class="whyUs">
        <h2>Why Benefits You Will Get?</h2><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <img src="https://img.icons8.com/color/480/ffffff/manager.png" />
                        <div class="card-body">
                            <h5 class="card-title">As a Manager</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <img src="https://img.icons8.com/color/256/ffffff/nurse-male.png" />
                        <div class="card-body">
                            <h5 class="card-title">As a Tester</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <img src="https://img.icons8.com/color/480/ffffff/pharmacistmen.png" />
                        <div class="card-body">
                            <h5 class="card-title">As a Patient</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Register -->
    <section class="register">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center reg">
                    <h2>Register Now!</h2>
                    <div class="d-grid gap-4 col-7 mx-auto mt-5">
                        <a href="{{ route('register') }}">
                            <button class="btn btn-outline-danger" type="button">
                                <h5>Register for Covid-19 Test</h5>
                            </button>
                        </a>
                        <a href="{{ route('registerManager') }}">
                            <button class="btn btn-outline-danger" type="button">
                                <h5>
                                    Register Your Test Center
                                </h5>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="/images/3568984.jpg" alt="">
                </div>
            </div>

        </div>

    </section>
    <!-- Line -->
    <div class="line">
        <h2>Counter-Covid CTIS Application</h2>
    </div>
    <!-- Footer -->
    <footer style="background-color: #f2f5f8;">
        <div class="container py-5">
            <div class="row py-4">
                <div class="col-lg-6 col-md-6 mb-4 mb-lg-0 text-center"><img src="/images/Counter-Covid Logo.png" alt=""
                        width="300" class="mb-3">
                </div>
                <div class="col-lg-3">
                    <h6 class="text-uppercase font-weight-bold mb-4">Counter-Covid CTIS</h6>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><a href="#" class="text-muted">Login</a></li>
                        <li class="mb-2"><a href="#" class="text-muted">Register for Covid-19 Test</a></li>
                        <li class="mb-2"><a href="#" class="text-muted">Register your Test Center</a></li>
                        <li class="mb-2"><a href="#" class="text-muted">Back to Top</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h6 class="text-uppercase font-weight-bold mb-4">Created By:</h6>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><a href="#" class="text-muted">Ignaz Maula Ibrahim (E1800184)
                            </a></li>
                        <li class="mb-2"><a href="#" class="text-muted">Louis Perez Napitupulu (E1800185)</a></li>
                        <li class="mb-2"><a href="#" class="text-muted">BIT302 Software Engineering</a></li>
                        <li class="mb-2"><a href="#" class="text-muted">STIKOM Bali/HELP University</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </footer>
    <div class="copyright text-center pt-2 pb-2">
        &copy; 2021 Copyright <strong>Counter-Covid CTIS</strong>. All Rights Reserved
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">What Registration You Want to Do?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="https://img.icons8.com/color/52/ffffff/pharmacistmen.png" />
                    <p>I'm a patient and I want to take Covid-19 test</p>
                    <a href="{{ route('register') }}">
                        <button type="button" class="btn btn-danger danger1">Register as Patient</button>
                    </a>
                    <hr>
                    <img src="https://img.icons8.com/color/52/ffffff/manager.png" />
                    <p>I'm a manager and I want to register my test center</p>
                    <a href="{{ route('registerManager') }}">
                        <button type="button" class="btn btn-danger danger2">Register as Manager</button>
                    </a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel
                        Registration</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>
