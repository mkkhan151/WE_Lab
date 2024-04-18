<?php
include ("connection.php");
// Delete Category
if (isset($_GET['id'])) {
    $category_id = $_GET['id'];
    $sql = "DELETE FROM categories WHERE id = '$category_id'";
    if (mysqli_query($connection, $sql)) {
        header("Location: showcategory.php");
    } else {
        echo "Error in deleting Category";
    }
}
?>