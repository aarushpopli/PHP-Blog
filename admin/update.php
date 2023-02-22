<?php
    include_once('../includes/admin_bar.php');
    $post_id = $_GET['id'];
    $postQuery = "SELECT * FROM posts WHERE id = $post_id";
    $runPQ = mysqli_query($db, $postQuery);
    $post = mysqli_fetch_assoc($runPQ);
?>
    <main id="main" class="main mx-0">
        <div class="pagetitle">
            <h1>Update Post</h1>
            <hr>
        </div>
        <section class="section dashboard">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <form action="../includes/update_post.php" method="POST" enctype="multipart/form-data">
                                <h5 class="card-title">Update Title</h5>
                                <div>
                                    <input type="text" class="form-control" value="<?=$post["title"]?>" placeholder="Title" name="post_title" required>
                                </div>
                                <h5 class="card-title">Update Content</h5>
                                <div>
                                    <textarea class="form-control" id="body" name="post_content" rows="5" placeholder="Content" required><?=$post["content"]?></textarea>
                                </div>
                                <input type="hidden" name="post_id" value="<?=$_GET['id']?>">
                                <div class="pt-4">
                                    <input type="submit" class="btn btn-primary" name="update_post" value="Update">
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