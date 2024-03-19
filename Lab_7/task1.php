<?php
    // Task 1
    include "connect.php";

    // Task 2
    if(isset ($_POST["ck"]) and $_POST["ck"] == 1){
        $name = $_POST["name"];
        $gender = $_POST["gender"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $login = $_POST["login"];
        $pass = $_POST["pass"];

        $query = "INSERT INTO users SET name = '".$name."',
                                gender = '".$gender."',
                                address = '".$address."',
                                email = '".$email."',
                                login_id = '".$login."',
                                password = '".$pass."'";
                                
        if(mysqli_query($connect, $query)){
            echo "<h1>Record has been Successfully inserted into the database</h1>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
</head>

<body>
    <h2>Sign Up Form</h2>
    <form action="" method="post" onSubmit="return validation();">
        <input type="hidden" name="ck" value="1">
        <table>
            <tr>
                <td width="10%">Name:</td>
                <td width="90%"><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><input type="radio" name="gender" value="male" checked>Male <br>
                    <input type="radio" name="gender" value="female">Female
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" id="email"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><textarea name="address" id="add"></textarea></td>
            </tr>
            <tr>
                <td>Login ID:</td>
                <td><input type="text" name="login" id="login"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="pass" id="pass"></td>
            </tr>
            <tr>
                <td>Agreed with<br> Policy:</td>
                <td><input type="checkbox" name="agree" id="chk"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Submit">&nbsp;&nbsp;&nbsp;
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>

    <script language="javascript">
        function validation() {
            if (document.getElementById("name").value == "")
            {
                alert("Please Enter Name");
                return false;
            }
            else if (document.getElementById("email").value == "")
            {
                alert("Please Enter Email");
                return false;
            }
            else if (document.getElementById("add").value == "")
            {
                alert("Please Enter Adrees");
                return false;
            }
            else if (document.getElementById("login").value == "")
            {
                alert("Please Enter Login ID");
                return false;
            }
            else if (document.getElementById("pass").value == "")
            {
                alert("Please Enter Password");
                return false;
            }
            else if (!document.getElementById("chk").checked) {
                alert("Please Agree with Policy");
                return false;
            }
        }
    </script>
</body>

</html>