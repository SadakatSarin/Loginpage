<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
        }
        .container {
            background: white;
            width: 40%;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"] {
            width: 80%;
            padding: 8px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background: green;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: darkgreen;
        }
        h2 {
            color: #333;
        }
        .result {
            background: #dff0d8;
            color: #3c763d;
            padding: 10px;
            margin-top: 20px;
            border-radius: 5px;
            display: inline-block;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Student Form</h2>

    <form method="post" action="">
        <label for="txtname">Name:</label><br>
        <input type="text" name="txtname"><br><br>

        <label for="txtid">ID:</label><br>
        <input type="text" name="txtid"><br><br>

        <label for="age">Age:</label><br>
        <input type="text" name="age"><br><br>

        <input type="submit" value="Submit" name="submitbtn">
    </form>

    <?php
    if (isset($_POST['submitbtn'])) {
        $name = $_POST['txtname'];
        $id = $_POST['txtid'];
        $age = $_POST['age'];

        echo "<div class='result'>";
        echo "<h3>✔ Registration Successful!</h3>";
        echo "Student Name: $name <br>";
        echo "Student ID: $id <br>";
        echo "Student Age: $age <br>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
