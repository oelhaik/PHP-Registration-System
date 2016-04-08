<!DOCTYPE html>
<html>
     <head>
        <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="CSS/bootstrap-theme.min.css"/>
        <link rel="stylesheet" type="text/css" href="CSS/site.css"/>
        <script src="JS/jquery-1.12.3.min.js"></script>
        <script src="JS/npm.js"></script>
        <script src="JS/bootstrap.min.js"></script>
        
    </head>
<body>
     <h2 align="center">Admin Report</h2>
     <br />
     <?php
     echo "<table style='border: solid 1px black;'>";
     echo "<tr><th>First Name</th><th>Last Name</th>";
     echo "<th>Address1</th><th>Address2</th><th>Country</th>";
     echo "<th>City</th><th>State</th><th>Zip</th><th>Date</th></tr>";
     
     class TableRows extends RecursiveIteratorIterator { 
          function __construct($it) { 
              parent::__construct($it, self::LEAVES_ONLY); 
          }
     
          function current() {
              return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
          }
     
          function beginChildren() { 
              echo "<tr>"; 
          } 
     
          function endChildren() { 
              echo "</tr>" . "\n";
          } 
     } 
     
     $servername = "localhost";
     $username = "dev";
     $password = "password";
     $dbname = "HWDB";
     
     try {
          $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
          $stmt = $conn->prepare("SELECT FIRSTNAME, LASTNAME, ADDRESS1,ADDRESS2,COUNTRY,CITY,STATE, ZIP, DATE_REGISTERED FROM USERS"); 
          $stmt->execute();
     
          // set the resulting array to associative
          $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
          foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
              echo $v;
          }
     }
     catch(PDOException $e) {
          echo "Error: " . $e->getMessage();
     }
     $conn = null;
     echo "</table>";
     ?>  
     <br />
     <a href="Register.php">Register</a>
</body>
</html>