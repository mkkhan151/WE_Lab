<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
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
        <input type="submit" value="Show Data" name="submitData">
    </form>

    <br><br>

    <?php
    include("connect.php");
    if(isset($_REQUEST["chk"]) and $_REQUEST["chk"] == "1"){
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
                    echo "<td>" ,$row["login_id"], "</td>";
                    echo "<td>" ,$row["email"], "</td>";
                    echo "<td>" ,$row["password"], "</td>";
                    echo "</tr>";
                }

        echo "</table>";
    }
    ?>
</body>
</html>