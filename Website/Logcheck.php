<html>
<body>

<?php    
    $user = $_REQUEST ["user"];
    $pass = $_REQUEST ["pass"];  
    $servername = "localhost";
    $username = "aurian.foulner";
    $password = "OTSNgDEm5khou71M";
    $dbname = "aurianfoulner_Hotel";
    $sql = "SELECT * FROM Login where email = '$user' and password = '$pass'";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);
    
    if (count > 0){
        header("Location: Rent.html");}
    else{
        header("Location : singup.php");
}

mysqli_close($conn);
?>
</body>    
</html>



