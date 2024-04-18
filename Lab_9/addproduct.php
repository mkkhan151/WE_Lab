<?php include("connection.php");
    if(isset($_POST["addProduct"])){
        $product_name = $_POST["prodname"];
        $product_price = $_POST['price'];
        $category = $_POST['category'];

        $query = "INSERT INTO products (product_name, price, category) VALUES ('" . $product_name . "', '" . $product_price . "', '" . $category . "')";
        $result = mysqli_query($connection, $query);
        if(!$result){
            echo "Error in adding product";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
   <form method="post">
        <label >Product name</label>
        <input type="text" name="prodname"><br><br>
        <label >Product Price</label>
        <input type="number" name="price"><br><br>
        <label for="">Select Category</label>
        <select name="category" id="">
            <?php
                $sql = "SELECT name FROM categories";
                $result = mysqli_query($connection, $sql);

                while($row = mysqli_fetch_assoc($result)){
                    echo '<option value="'. $row['name'] . '">' . $row['name'] . '</option>';
                }
            ?>
        </select><br><br>
        <input type="submit" value="Add Product" name="addProduct"><br><br>
        <button><a href="showcategory.php">Show Categories</a></button>
   </form>
</body>
</html>