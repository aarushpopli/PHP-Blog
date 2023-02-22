<?php
    require('db.php');
    if(isset($_POST['add_category'])){
        $category_name = mysqli_real_escape_string($db, $_POST['category']);
        $query = "INSERT INTO category(name) VALUES('$category_name')";
        mysqli_query($db, $query);
        header('location:../admin/categories.php');
    }
?>