<?php
    if (empty($_POST)) {
        header("Location: ./index.php");
        exit();
    }
?>

<link rel="stylesheet" href="style.css">


<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename= "reynzen";

$conn = mysqli_connect($servername, $username, $password, $databasename);


$firstname = $_POST["firstname"];
$lastname =  $_POST["lastname"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$subjectt = $_POST["subjectt"];

$sql = "INSERT INTO `recensie` (`firstname`, `lastname`, `phone`, `email`, `subjectt`)
VALUES ('$firstname','$lastname', '$phone', '$email', '$subjectt');";


mysqli_query($conn, $sql);


$sql = "SELECT * FROM `recensie`";

$result = mysqli_query($conn, $sql);


$row = ""; 
    while ($record = mysqli_fetch_assoc($result)){
        $row .= "<tr>
                     <td>{$record['firstname']}</td>
                     <td>{$record['lastname']}</td>
                     <td>{$record['phone']}</td>
                     <td>{$record['email']}</td>
                     <td>{$record['subjectt']}</td>
                 </tr>";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>RecentiePagina</title>
</head>
<body>

    <header>
        <nav>
            <ul>
                <li> <a href="homepage.html"><img src="img/horizontal_on_white_by_logaster.png" alt="logo" style="width:79%"></a></li> 
                <li> <a href="">Categorie </a>  
                    <ul> 
                        <li> <a href="homepage.html"> TV </a> </li>
                        <li> <a href="homepage.html"> Computer, Laptops, Monitoren </a> </li>
                        <li> <a href="homepage.html"> Mobiel Telephone </a> </li>
                    </ul>  
                </li>       
                <li> <a href="overons.html">Over Ons</a></li> 
                <li> <a href="recentie.html">Recentiepagina </a> </li>
                <li> <a href="contact.html ">Contact </a>  </li>
                <li> <input type="text-search" placeholder="Search.."> </li>               
            </ul>
        </nav>
    </header>


    <div class="container">
        <div class="row">
            <div class="col-12">
             <!-- de tabel met gegevens uit de databse komt hier -->

                <table >
                    <thead>
                        <tr >
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>TelephoneNummer</th>
                            <th>E-mail</th>
                            <th>Bericht</th>
                        </tr>     
                    </thead>
                    <tbody>                     
                    <?php echo $row; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>