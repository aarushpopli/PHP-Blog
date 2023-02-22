<?php
    include_once('../includes/admin_bar.php');
    include_once('../includes/function.php');
?>
    <main id="main" class="main mx-0">
        <div class="pagetitle">
            <h1>Manage Categories</h1>
            <hr>
        </div>
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Categories</h5>
                    <?php
                        $categories = getAllCategories($db);
                        foreach($categories as $ct){
                        ?>
                        <span class="badge bg-primary"><?=$ct['name']?></span>
                        <?php
                        }
                    ?>
                    <h5 class="card-title">Add Category</h5>
                    <form role="form" action="../includes/add_cat.php" method="POST">
                        <div class="row">
                            <div class="col-md-10">
                                <input type="text" class="form-control" placeholder="Add Category" name="category" required>
                            </div>
                            <div class="col-md-2">
                                <input type="submit" class="btn btn-primary form-control" name="add_category" value="Add Category">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer id="footer" class="footer">

    </footer>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>