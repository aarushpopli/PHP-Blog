<?php
    include_once('../includes/admin_bar.php');
    include_once('../includes/function.php');
?>
    <main id="main" class="main mx-0">
        <div class="pagetitle">
            <h1>Manage Posts</h1>
            <hr>
        </div>
        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-bold fs-5">All Posts</h5>
                    <?php
                        $posts = getAllPosts($db);
                        foreach($posts as $p){
                        ?>
                        <div class="container mx-5">
                            <span class="fs-2"><?=$p['title']?></span>
                            <div style="float: right;">
                                <a type="button" href="update.php?id=<?=$p['id']?>" class="btn btn-warning m-1">Edit</a>
                                <a type="button" href="../includes/remove_post.php?id=<?=$p['id']?>" class="btn btn-danger">Delete</a>
                            </div><br>
                            <span class="text-small text-muted"><?=date('- F jS, Y', strtotime($p['created_at']))?></span>
                            <div class="fs-5 mt-4"><?=$p['content']?></div>
                            <span class="badge bg-primary"><?=getCategory($db, $p['category_id'])?></span>
                        </div>
                        <hr>
                        <?php
                        }
                    ?>
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