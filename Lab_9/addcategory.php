<?php
include ("connection.php");

if (isset($_POST['submitbtn'])) {
    $category_name = $_POST['catname'];

    $thumbnail_path = '';
    if ($_FILES['thumbnail']['size'] > 0) {
        $target_dir = "category_thumbnails/";
        $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]);
        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) {
            $thumbnail_path = $target_file;
        }
    }

    $sql = "INSERT INTO categories (name, thumbnail) VALUES ('$category_name', '$thumbnail_path')";
    $result = mysqli_query($connection, $sql);
    if (!$result) {
        echo "Not successfull";
    }
}
?>

<html>
<body>
    <form method="post" enctype="multipart/form-data">
        Category Name: <input type="text" name="catname"> <br><br>
        Tumbnail: <input type="file" name="thumbnail"> <br>
        <hr>
        <input type="submit" name="submitbtn" value="Add Category">
    </form>
    <button><a href="showcategory.php">Show Categories</a></button>
</body>
</html>