<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form method=post action="">

 id:<input type="text" name="txtid">
 <br>
 name:<input type="text" name="txtname">
 <br>
salary:<input type="text" name="txtsal">
<br>
dept:<input type="text" name="txtdept">
<br>

<input type="submit" value="submit" name="btnsubmit">



</form>


<?php

if(isset($_POST['btnsubmit'])){
    $eid=$_POST['txtid'];
    $ename=$_POST['txtname'];
    $esal=$_POST['txtsal'];
    $edept=$_POST['txtdept'];


    

$mycon = mysqli_connect("localhost", "root", "", "mynewdata");

echo "connection success";

$sql = "insert into emp values(?,?,?,?)";

$ps = $mycon->prepare($sql);

$ps->bind_param("isis", $eid, $ename, $esal, $edept);

$ps->execute();

echo "Record inserted successfully";


}





?>
    
</body>
</html>