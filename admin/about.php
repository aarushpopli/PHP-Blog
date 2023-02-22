<?php
    include_once('../includes/admin_bar.php');
?>

<main id="main" class="main mx-0">
    <div class="pagetitle">
        <h1>About</h1>
    </div>
    <hr>
    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">
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
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body pt-3">
                        <!-- <ul class="nav nav-tabs nav-tabs-bordered">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#profile-overview">Overview</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#profile-change-password">Change Password</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2"> -->
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

                            <!-- <div class="tab-pane fade pt-3" id="profile-change-password">
                                <form>
                                    <div class="row mb-3">
                                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current
                                            Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="password" type="password" class="form-control"
                                                id="currentPassword">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New
                                            Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="newpassword" type="password" class="form-control"
                                                id="newPassword">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New
                                            Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="renewpassword" type="password" class="form-control"
                                                id="renewPassword">
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Change Password</button>
                                    </div>
                                </form>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>