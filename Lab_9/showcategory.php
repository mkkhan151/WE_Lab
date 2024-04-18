<?php
session_start();
include ("connection.php");
if (!isset($_SESSION['ADMIN'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Category Page</title>
</head>

<body>
    <h2>Categories</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Number of Products</th>
            <th>Thumbnail</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php

        $sql = "SELECT * FROM categories";
        $result = mysqli_query($connection, $sql);
        while ($category = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo $category['id']; ?></td>
                <td><?php echo $category['name']; ?></td>
                <!-- You can get number of products for each category using a separate SQL query -->
                <td><?php
                $query = "SELECT COUNT(*) AS nums FROM products WHERE category = '{$category['name']}'";
                $counts = mysqli_query($connection, $query);
                echo mysqli_fetch_assoc($counts)['nums'];
                ?></td>
                <td>
                    <?php
                    echo "<img src='{$category['thumbnail']}' alt='Thumbnail' width='100px' >";
                    ?>
                </td>
                <td><a <?php echo "href=edit.php?id={$category['id']}" ?>>Edit</a></td>
                <td><a <?php echo "href=delete.php?id={$category['id']}" ?>>Delete</a></td>
            </tr>
        <?php endwhile; ?>
    </table> <br><br>
    <button><a href="addcategory.php">Add Category</a></button>
    <button><a href="addproduct.php">Add Product</a></button>
</body>
</html>