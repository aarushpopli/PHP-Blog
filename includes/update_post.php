<?php
    require('db.php');

    if(isset($_POST['update_post'])){
        $id = $_POST['post_id'];
        $ptitle = mysqli_real_escape_string($db, $_POST['post_title']);
        $pcontent = mysqli_real_escape_string($db, $_POST['post_content']);
        $query = "UPDATE posts SET title = '$ptitle', content = '$pcontent' WHERE id = $id";
        $run = mysqli_query($db, $query);

        header('location:../admin/manage_posts.php');
    }
?>