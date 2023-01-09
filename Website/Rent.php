
<?php
    $rentnumber = $_REQUEST["rentnumber"]; 
    $duration = $_REQUEST["duration"];
    $firstname = $_REQUEST["firstname"];
    $lastname = $_REQUEST["lastname"];
    $roomnumber = $_REQUEST["roomnumber"];
    $address = $_REQUEST["address"];
    $entrydate = $_REQUEST["entrydate"];
    $exitdate = $_REQUEST["exitdate"];
    
    $servername = "localhost";
    $username = "aurian.foulner";
    $password = "OTSNgDEm5khou71M";
    $dbname = "aurianfoulner_Hotel";
    
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    $sql="INSERT INTO RentDB(RentNumber, Duration, FirstName, LastName, RoomNumber, Address, EntryDate, ExitDate) VALUES ('$rentnumber','$duration','$firstname','$lastname','$roomnumber','$address','$entrydate','$exitdate')";
if (mysqli_connect_errno())
   {
   echo "This action has failed to connect to my SQL " . mysqli_connect_error();
   }
if (mysqli_query($conn,$sql)) {
    echo "Record has been added to the database";
    }
mysqli_close($conn);
?>   
