<?php
$servername = "localhost";
$username = "dev";
$password = "password";
$dbname = "HWDB";
$fname = $_POST["firstName"];
$lname = $_POST["lastName"];
$address1 = $_POST["Address1"];
$address2 = $_POST["Address2"];
$country = $_POST["Country"];
$city = $_POST["City"];
$state = $_POST["State"];
$zip = $_POST["Zip"];


try {
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $sql = "INSERT INTO USERS (FIRSTNAME, LASTNAME, ADDRESS1,ADDRESS2,COUNTRY,CITY,STATE, ZIP, DATE_REGISTERED)
    VALUES ('$fname', '$lname', '$address1', '$address2', '$country', '$city', '$state', '$zip', SYSDATE())";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Insert Successful";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
header("Location: ListAddresses.php");
?>