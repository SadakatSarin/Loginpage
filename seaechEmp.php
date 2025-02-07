<head>
    <link rel="stylesheet" type="text/css" href="searchEmp.css">
</head>


<?php


$mycon = mysqli_connect("localhost", "root", "", "mynewdata");

echo "connection success";

$sql = "select * from emp";

$record=$mycon->query($sql);

$n = mysqli_num_rows($record);

echo "<br> total record $n <br>";
if ($n > 0) {
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr>
            <th>id</th>
            <th>name</th>
            <th>salary</th>
            <th>Department</th>
          </tr>";

    while ($row = mysqli_fetch_assoc($record)) {
        echo "<tr>
                <td>{$row['empid']}</td>
                <td>{$row['empname']}</td>
                <td>{$row['salary']}</td>
                <td>{$row['dept']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "<font color=red size=5>Record not found</font>";
}


$mycon->close();


?>