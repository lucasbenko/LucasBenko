<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact - Lucas Benko</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/5e1f571de9.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="res/script.js"></script>
    <link rel="icon" href="res/favicon.png">
    <link href="res/style.css" rel="stylesheet">
    <style>
        .form-control::placeholder {
            /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #71797E;
            opacity: 1;
            /* Firefox */
        }

        .form-control:-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: #71797E;
        }

        .form-control::-ms-input-placeholder {
            /* Microsoft Edge */
            color: #71797E;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <div id="particles-js"></div>

    <div class="container">
        <header class="text-center mt-4">
            <h1 class="display-4">Lucas Benko</h1>
        </header>

        <nav class="navbar-expand-lg mb-4">
            <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link" href="index">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="portfolio">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link" href="resume">Resume</a></li>
                <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
            </ul>
        </nav>

        <main>

            <div class="row justify-content-center">
                <div class="col-md-6 justify-content-center">
                    <p class="lead text-center">
                        Have a question or want to work together? Feel free to reach out to me using the form below.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form id="contactForm">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                style="background-color:#302c2c; color:#fff; border-color: #302c2c;" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                style="background-color:#302c2c; color:#fff; border-color: #302c2c;" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="message" name="message" placeholder="Message" rows="4"
                                style="background-color:#302c2c; color:#fff; border-color: #302c2c; resize: none;" required></textarea>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 p-2 d-flex justify-content-center">
                                <button type="submit" class="btn"
                                    style="background-color: #e6615a; border-color: #e6615a; color: #fff;">Submit</button>
                            </div>
                        </div>
                        
                        <div id="notification" class="notification d-none p-2">
                            <div class="notification-content">
                                <p class="text-center">Your message was sent successfully, thank you!</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>



    <footer class="text-center mt-auto w-100" style="background-color: #302c2c">
        <div class="container">
            <div class="row justify-content-center mt-2">
                <div class="col-md-6 d-flex justify-content-center p-0 mt-2">
                    <a href="https://github.com/lucasbenko"><i class="fa-brands fa-github fa-3x"
                            style="color: #ffffff;"></i></a>
                    <a href="https://www.linkedin.com/in/lucas-benko/"><i class="fa-brands fa-linkedin fa-3x ms-4"
                            style="color: #ffffff;"></i></a>
                </div>
            </div>

            <div class="row justify-content-center my-2" style="color: #ffffff;">&copy;
                <script>
                    document.write(/\d{4}/.exec(Date())[0])
                </script> Lucas Benko
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="res/submit.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="res/particles-js.js"></script>
</body>

</html>