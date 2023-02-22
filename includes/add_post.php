<?php
    require('db.php');

    if(isset($_POST['add_post'])){
        $ptitle = mysqli_real_escape_string($db, $_POST['post_title']);
        $pcontent = mysqli_real_escape_string($db, $_POST['post_content']);
        $pcategory = $_POST['post_category'];
        $query = "INSERT INTO posts (title, content, category_id) VALUES('$ptitle', '$pcontent', $pcategory)";
        $run = mysqli_query($db, $query);
        $post_id = mysqli_insert_id($db);
        $image_name = $_FILES['post_image']['name'];
        $img_temp = $_FILES['post_image']['tmp_name'];
        foreach($image_name as $index=>$img){
            if(move_uploaded_file($img_temp[$index], "../images/$img")){
                $query = "INSERT INTO images (post_id, image) VALUES($post_id, '$img')";
                $run = mysqli_query($db, $query);
            }
        }
        header('location:../admin/admin.php');
    }
?>