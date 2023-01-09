<html>
<?php
    $nameofstaff = $_REQUEST ["nameofstaff"];
    $roomnumber = $_REQUEST ["roomnumber"]; 
    $conditionroom = $_REQUEST ["conditionroom"];
    $date = $_REQUEST ["date"];
    
    $servername = "ysjcs.net";
    $username = "aurian.foulner";
    $password = "OTSNgDEm5khou71M";
    $dbname = "aurianfoulner_Hotel";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    
    $sql = "INSERT INTO Cleaning (nameofstaff, roomnumber, conditionroom, date) VALUES('$nameofstaff', '$roomnumber', $conditionroom', '$date')";
    
    if (mysqli_connect_errno())
   {
   echo "Failed to connect to the MYSQL server" . mysqli_connect_error();
   }
if (mysqli_query($conn,$sql)) {
    echo "A new record has been added";
    }
mysqli_close($conn);
    
?>
</html>
