<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Data</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        td{
            padding: 4px;
            text-align: center;
        }
        th{
            padding: 4px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
    <input type="hidden" name="chk" value="1">
    Enter Login ID: &nbsp; <input type="text" name="login" id="login">
    &nbsp;&nbsp; <input type="submit" value="Delete Record" name="deleteRecord"> <br><br>
    </form>

    <?php
    include("connect.php");
    if(isset($_REQUEST["chk"]) and $_REQUEST["chk"] == "1"){
        $id = $_REQUEST['login'];
        $delete_query = "DELETE FROM users WHERE login_id = '".$id."'";
        if(mysqli_query($connect, $delete_query)){
            echo "<h2>Record has been successfully deleted from database</h2>";
        }
    }
        $query = "SELECT * FROM users";
        $result = mysqli_query($connect, $query);
        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Login ID</th>
                    <th>Password</th>
                </tr>";

                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>" ,$row["id"] ,"</td>";
                    echo "<td>" ,$row["name"] ,"</td>";
                    echo "<td>" ,$row["gender"], "</td>";
                    echo "<td>",$row["address"] ,"</td>";
                    echo "<td>" ,$row["email"], "</td>";
                    echo "<td>" ,$row["login_id"], "</td>";
                    echo "<td>" ,$row["password"], "</td>";
                    echo "</tr>";
                }
        echo "</table>";
    ?>
</body>
</html>