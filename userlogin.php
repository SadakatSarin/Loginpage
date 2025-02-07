<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
        }
        .container {
            background: white;
            width: 30%;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background: #007bff;
            color: white;
        }
        td input {
            width: 95%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"], input[type="reset"] {
            background: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 5px;
        }
        input[type="reset"] {
            background: #dc3545;
        }
        input[type="submit"]:hover {
            background: darkgreen;
        }
        input[type="reset"]:hover {
            background: darkred;
        }
        .error {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Login Form</h2>

    <form method="post" action="">
        <table border="1">
            <tr>
                <th>User Name</th>
                <td><input type="text" name="txtuser" required></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" name="txtpass" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Submit" name="submitbtn">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['submitbtn'])) {  

        
        $user = $_POST['txtuser'];
        $pass = $_POST['txtpass'];

        if (strcmp($user, "sarin") == 0 && strcasecmp($pass, "admin") == 0) {
            header("location:insertEmp.php");
        } else {
            echo "<p class='error'>❌ Login Failed</p>";
        }
    }
    ?>
</div>

</body>
</html>
