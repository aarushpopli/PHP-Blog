<?php
  require('includes/db.php');
  require('includes/function.php')
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="admin/assets/js/main.js" rel="stylesheet">
    <link href="https://pbs.twimg.com/profile_images/1453372321649942533/1GMYwyOX_400x400.jpg" rel="icon">
    <link href="admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="admin/assets/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Blog It | About</title>
</head>

<body class="bg-dark">
    <?php
    include_once('./includes/navbar.php');
?>

    <main id="main" class="main mx-0 bg-dark mt-0">
        <section class="section profile">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                                <img src="https://pbs.twimg.com/profile_images/1453372321649942533/1GMYwyOX_400x400.jpg" alt="Profile" class="rounded-circle">
                                <h2>Aarush Popli</h2>
                                <h3>Web Developer</h3>
                                <div class="social-links mt-2">
                                    <a href="https://github.com/Aarush-Popli" class="github"><i class="bi bi-github"></i></a>
                                    <a href="https://in.linkedin.com/in/aarushpopli" class="linkedin"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body pt-3">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                        <h5 class="card-title fw-bold">About</h5>
                                        <p class="small">I am eager to learn new tools related to coding and designing. I have worked with various languages and tools to create projects related to automation, web development and AI.</p>
                                        <h5 class="card-title fw-bold">Profile Details</h5>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Full Name</div>
                                            <div class="col-lg-9 col-md-8">Aarush Popli</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">College</div>
                                            <div class="col-lg-9 col-md-8">Lovely Professional University</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Email</div>
                                            <div class="col-lg-9 col-md-8">popliaarush00@gmail.com</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </main>
</body>
<script src="admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="admin/assets/js/main.js"></script>
</body>
</html>