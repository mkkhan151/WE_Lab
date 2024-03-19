<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="enter" value="1">
        <input type="file" name="file" id="file"> <br><br>
        <input type="submit" value="Upload File"> <br><br>
    </form>

    <?php
        include("connect.php");
        if(isset($_POST["enter"]) and $_POST["enter"] == "1"){
            echo "<h2>File has been successfully uploaded</h2>";
            $file_name = $_FILES['file']['name'];
            $file_location = $_FILES['file']['tmp_name'];

            $file_future_path = "uploads/";
    
            move_uploaded_file($file_location,$file_future_path.$file_name);
        }
    ?>
</body>
</html>