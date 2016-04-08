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

$regex = '/^[A-Za-z0-9-]+$/';
if (!isset($fname,$lname, $address1,$country,$city,$state,$zip))
{
    echo "Validation unsuccessful. Empty field found. Returning to registration page";
    sleep(2);
    header("Location: registration.php");
}
if(preg_match($regex, $fname) || preg_match($regex, $lname) || preg_match($regex, $address1) ||
   preg_match($regex, $country) || preg_match($regex, $city)  || preg_match($regex, $state) || preg_match($regex, $zip) ) {
    echo "Validation successful, sending to database";
    sleep(2);
}
else {
    echo "Validation unsuccessful, returning to registrations page";
    sleep(3);
    header("Location: registration.php");
}  

try {
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $sql = "INSERT INTO USERS (FIRSTNAME, LASTNAME, ADDRESS1,ADDRESS2,COUNTRY,CITY,STATE, ZIP, DATE_REGISTERED)
    VALUES ('$fname', '$lname', '$address1', '$address2', '$country', '$city', '$state', '$zip', SYSDATE())";
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