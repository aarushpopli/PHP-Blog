<div class="col-4">
    <?php
        if(isset($_GET['id'])) {
            ?>
            <div class="card mb-3">
                <h5 class="card-header">Comments</h5>
                <hr class="mb-0 text-light">
                <?php
                    $comments = getComments($db, $post_id);
                    if(count($comments) < 1){
                        echo "<div class='card-body'><p class='card-text'>No Comments</p></div>";
                    }
                    foreach($comments as $comment){
                        ?>
                        <div class="card-body">
                            <h5 class="card-title m-0 p-0"><?=$comment['name']?></h5>
                            <p class="card-text m-0"><?=$comment['comment']?></p>
                            <small class="text-muted"><?=date('- F jS, Y', strtotime($post["created_at"]))?></small>
                            <hr class="mb-0">
                        </div>
                        <?php
                    }
                ?>
            </div>
            <?php
        }
    ?>
</div>