<?php
    include_once('../includes/admin_bar.php');
?>
    <main id="main" class="main mx-0">
        <div class="pagetitle">
            <h1>Add Post</h1>
            <hr>
        </div>
        <section class="section dashboard">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <form action="../includes/add_post.php" method="POST" enctype="multipart/form-data">
                                <h5 class="card-title">Add Title</h5>
                                <div>
                                    <input type="text" class="form-control" placeholder="Title" name="post_title" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="card-title">Select Category</h5>
                                        <div>
                                            <select class="form-select" name="post_category" aria-label="Default select example" required>
                                                <option disabled selected value="">Choose a category</option>
                                                <?php
                                                    $categories = getAllCategories($db);
                                                    foreach($categories as $ct){
                                                    ?>
                                                        <option value="<?=$ct['id']?>"><?=$ct['name']?></option>
                                                    <?php
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="card-title">Upload Image</h5>
                                        <div>
                                            <input class="form-control" type="file" id="formFile" name="post_image[]" accept="image/*" multiple required>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="card-title">Add Content</h5>
                                <div>
                                    <textarea class="form-control" id="body" name="post_content" rows="5" placeholder="Content" required></textarea>
                                </div>
                                <div class="pt-4">
                                    <input type="submit" class="btn btn-primary" name="add_post" value="Add Post">
                                </div>
                            </form>
                        </div>
                    </div>
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