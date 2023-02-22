<?php
  require('includes/db.php');
  require('includes/function.php');
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

    <title>Blog It | Posts</title>
</head>

<body>
    <?php
        include_once('includes/navbar.php');
    ?>
    <div>
        <div class="container m-auto mt-3 row">
            <div class="col-8">
                <?php
                    $post_id = $_GET['id'];
                    $postQuery = "SELECT * FROM posts WHERE id = $post_id";
                    $runPQ = mysqli_query($db, $postQuery);
                    $post = mysqli_fetch_assoc($runPQ);
                ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title fs-4"><?=$post["title"]?></h5>
                        <span class="badge bg-primary "><?=date('- F jS, Y', strtotime($post["created_at"]))?></span>
                        <span class="badge bg-danger"><?=getCategory($db, $post['category_id'])?></span>
                        <div class="border-bottom mt-3"></div>
                        <?php
                            $post_images = getImages($db, $post['id'])
                        ?>
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php
                                    $c = 1;
                                    foreach($post_images as $image){
                                        if($c > 1){
                                            $sw = "";
                                        }
                                        else {
                                            $sw = "active";
                                        }
                                        ?>
                                        <div class="carousel-item <?=$sw?>">
                                            <img src="images/<?=$image['image']?>" class="d-block w-100" alt="...">
                                        </div>
                                        <?php
                                        $c++;
                                    }
                                ?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <p class="card-text pt-3"><?=$post["content"]?></p>
                        <div class="mb-2 mx-1">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Comment</button>
                        </div>
                        <div class="addthis_inline_share_toolbox"></div>
                    </div>
                </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add your comment to this post</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="includes/add_comment.php" method="POST">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="name" name="name" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Comment</label>
                                        <input type="text" name="comment" class="form-control">
                                    </div>
                                    <input type="hidden" name="post_id" value="<?=$post_id?>">
                                    <button type="submit" name="addcomment" class="btn btn-primary">Add Comment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h4>Related Posts</h4>
                    <?php
                        $pquery = "SELECT * FROM posts WHERE category_id = {$post['category_id']} ORDER BY id DESC";
                        $prun = mysqli_query($db, $pquery);
                        while($rpost = mysqli_fetch_assoc($prun)){
                            if($rpost['id'] == $post_id){
                                continue;
                            }
                            ?>
                            <a href="./post.php?id=<?=$rpost["id"]?>" style="text-decoration: none; color: black;">
                                <div class="card mb-3" style="max-width: 700px;">
                                    <div class="row g-0">
                                        <div class="col-md-5"
                                            style="background-image: url('images/<?=getPostThumb($db, $rpost['id'])?>');background-size: cover">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h5 class="card-title"><?=$rpost['title']?></h5>
                                                <p class="card-text text-truncate"><?=$rpost['content']?></p>
                                                <p class="card-text"><small class="text-muted"><?=date('- F jS, Y', strtotime($rpost["created_at"]))?></small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <?php
                        }
                    ?>
                </div>

            </div>
            <?php
                include_once('includes/sidebar.php');
            ?>
        </div>
        <?php
            include_once('includes/footer.php');
        ?>
    </div>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6232ea635a66df40"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>