<?php
  
// Server name must be localhost
$servername = "localhost";
  
// In my case, user name will be root
$username = "root";
  
// Password is empty
$password = "";
$dbname="geekdata";
  
// Creating a connection
$conn = new mysqli($servername, 
            $username, $password);
  
// Check connection
if ($conn->connect_error) {
    die("Connection failure: " 
        . $conn->connect_error);
} 
  
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$BName=$_POST["BName"];
    $PUBName=$_POST["PUBName"];
    $Price=$_POST["Price"];
    $Qty=$_POST["Qty"];

$sql = "INSERT INTO tb_book (Id, BookName, Publiser, Price, Quatity)
VALUES ('0','$BName','$PUBName',' $Price', '$Qty')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>

?>
<html>
    <head>
        <title>
            Book Information</title>
</head>
<body>
    <?php
    $BName=$_POST["BName"];
    $PUBName=$_POST["PUBName"];
    $Price=$_POST["Price"];
    $Qty=$_POST["Qty"];
    ?>
    <center>
        <h3> Book Data</h3>
        <table border==1>
<tr>
                <th>Book Name</th>
                <th>Publiser</th>
                <th>Price</th>
                <th>Quatity</th>
              
</tr>
<tr>
    <td> <?php print("$BName");?> </td>
    <td> <?php print("$PUBName");?> </td>
    <td> <?php print("$Price");?> </td>
    <td> <?php print("$Qty");?> </td>
</tr>
</table>
</center>
</body>
</html>
