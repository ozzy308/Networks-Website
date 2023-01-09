<html>
<?php
    
    $user = $_REQUEST['user'];
    $pass = $_RREAUEST['pass'];
    
    $servername = "localhost";
    $username = "aurian.foulner";
    $password = "OTSNgDEm5khou71M";
    $dbname = "aurianfoulner_Hotel";
    $sql = "INSERT INTO Login (Email, password)VALUES('$user', '$pass')";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if(mysqli_query($conn,$sql)){
        echo "New record has been aded";
    }
    mysqli_close($conn);
?>
</html>