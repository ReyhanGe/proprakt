<link rel="stylesheet" href="style.css">

<?php

$sql = "SELECT * FROM recensie";

$result = mysqli_query($conn, $sql);



$row = ""; 
    while ($record = mysqli_fetch_assoc($result)){
        $row .= "<tr>
                     <td>{$record[`firstname`]}</td>
                     <td>{$record[`lastname`]}</td>
                     <td>{$record[`phone`]}</td>
                     <td>{$record[`email`]}</td>
                     <td>{$record[`subjectt`]}</td>
                 </tr>";
    }















include("./connect_db.php");

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$tphone = $_POST["tphone"];
$email = $_POST["email"];
$subjectt = $_POST["subjectt"];


$sql = "INSERT INTO recensie (`firstname`, `lastname`, `phone`, `email`, `subjectt`)
VALUES ('$fname', '$lname', '$tphone', '$email', '$subjectt');";

mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    







</body>
</html>