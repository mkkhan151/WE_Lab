<?php
include("connection.php");

$category_id = $_GET['id'];

if(isset($_POST['submitbtn'])){
    $new_category_name = $_POST['catname'];
    
    $thumbnail_path = $category_thumbnail;
    
    if ($_FILES['thumbnail']['size'] > 0) {
        $target_dir = "category_thumbnails/";
        $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]);
        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) {
            $thumbnail_path = $target_file;
        }
    }

    // Prepare an SQL statement
    $sql = "UPDATE `categories` SET `name` = ?, `thumbnail`= ? WHERE `category`.`id` = ?";
    
    // Initialize a statement
    $stmt = mysqli_stmt_init($connection);
    
    // Prepare the SQL statement
    if (mysqli_stmt_prepare($stmt, $sql)) {
        // Bind parameters
        mysqli_stmt_bind_param($stmt, "ssi", $new_category_name, $thumbnail_path, $category_id);
        
        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            header("Location: showcategory.php");
            exit();
        } else {
            echo "Not successful";
        }
        
        // Close the statement
        mysqli_stmt_close($stmt);
    }
}
?>

<html>
<body>
    <form method="post" enctype="multipart/form-data">
        Category Name: <input type="text" value="<?php echo $category_name ?>" name="catname"> <br><br>
        Thumbnail: <input type="file" name="thumbnail"> <br>
        <hr>
        <input type="submit" name="submitbtn" value="Update Category">
    </form>
    <button><a href="/showcategory.php">Cancel</a></button>
</body>
</html>
