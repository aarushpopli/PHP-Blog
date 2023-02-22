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
    <title>Blog It</title>
</head>

<body>
    <?php
        include_once('includes/navbar.php');
        if(isset($_GET['page'])) {
            $page = $_GET['page'];
        }
        else {
            $page = 1;
        }
        $paginate = 5;
        $result = ($page - 1)*$paginate;
    ?>
    <div>
        <div class="container m-auto mt-3 row">
            <div class="col">
                <?php
                    if(isset($_GET['search'])){
                        $keyword = $_GET['search'];
                        $postQuery = "SELECT * FROM posts WHERE title LIKE '%$keyword%' ORDER BY id DESC LIMIT $result, $paginate";
                    }
                    else{
                        $postQuery = "SELECT * FROM posts ORDER BY id DESC LIMIT $result, $paginate";
                    }
                    $runPQ = mysqli_query($db, $postQuery);
                    while($post = mysqli_fetch_assoc($runPQ)){
                ?>
                <div class="card mb-3">
                    <a href="./post.php?id=<?=$post["id"]?>" style="text-decoration: none; color: black;">
                        <div class="row g-0">
                            <div class="col-md-3 rounded-start" style="background-image: url('images/<?=getPostThumb($db, $post['id'])?>');background-size: cover"></div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h5 class="card-title"><?=$post["title"]?></h5>
                                    <p class="card-text text-truncate"><?=$post["content"]?></p>
                                    <p class="card-text"><small class="text-muted"><?=date('- F jS, Y', strtotime($post["created_at"]))?></small></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
                    }
                ?>
            </div>
            <?php
                include_once('includes/sidebar.php');
            ?>
        </div>
    </div>
    <?php
        if(isset($_GET['search'])){
            $keyword = $_GET['search'];
            $q = "SELECT * FROM posts WHERE title LIKE '%$keyword%'";
        }
        else{
            $q = "SELECT * FROM posts";
        }
        $r = mysqli_query($db, $q);
        $total_posts = mysqli_num_rows($r);
        $total_pages = ceil($total_posts/$paginate);
    ?>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <?php
                if($page > 1) {
                    $switch = "";
                }
                else {
                    $switch = "disabled";
                }
                if($page < $total_pages) {
                    $nswitch = "";
                }
                else {
                    $nswitch = "disabled";
                }
            ?>
            <li class="page-item <?=$switch?>">
                <a class="page-link" href="?<?php if(isset($_GET['search'])){echo "search=$keyword&";} ?>page=<?=$page - 1?>" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <?php
                for($ppage = 1; $ppage <= $total_pages; $ppage++){
                    ?>
                    <li class="page-item"><a class="page-link" href="?<?php if(isset($_GET['search'])){echo "search=$keyword&";} ?>page=<?=$ppage?>"><?=$ppage?></a></li>
            <?php
                }
            ?>
            <li class="page-item <?=$nswitch?>">
                <a class="page-link" href="?<?php if(isset($_GET['search'])){echo "search=$keyword&";} ?>page=<?=$page + 1?>">Next</a>
            </li>
        </ul>
    </nav>
    <?php
        include_once('includes/footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>