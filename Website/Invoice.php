
<?php
    $invoicenumber = $_REQUEST ["invoicenumber"];
    $rentnumber= $_REQUEST ["rentnumber"]; 
    $rentperiod = $_REQUEST ["rentperiod"];
    $paymentdue = $_REQUEST ["paymentdue"];
    $roonumber = $_REQUEST ["roomnumber"];
    $datepaid = $_REQUEST ["datepaid"];
    $methodpayment = $_REQUEST ["methodpayment"];
    
    $servername = "localhost";
    $username = "aurian.foulner";
    $password = "OTSNgDEm5khou71M";
    $dbname = "aurianfoulner_Hotel";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    
    $sql = "INSERT INTO Invoice (invoicenumber, rentnumber, rentperiod, paymentdue, roomnumber, datepaid, methodpayment) VALUES('$invoicenumber', '$rentnumber', $rentperiod', '$paymentdue', $roomnumber', '$datepaid', '$methodpayment')";
    
    if (mysqli_connect_errno())
   {
   echo "This has failed to connect to the MYSQL server" . mysqli_connect_error();
   }
if (mysqli_query($conn,$sql)) {
    echo "A new record has been added";
    }
mysqli_close($conn);
    
?>
