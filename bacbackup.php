<!DOCTYPE>
<html>
<body>
<?php
$fname = $_POST['fname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$Address = $_POST['Address'];
$pin = $_POST['pin'];
$userlist= $_POST['userlist'];


$host="localhost";

echo "Inside backbackup.php <br>";
echo "Entered values <br>";
if(isset($_POST['userlist'])){
$userlist = $_POST['userlist'];
echo "User List=" . $userlist . "<br>";
}

echo "fname=" . $fname . "<br>";
echo "email=" . $email . "<br>";
echo "PHone=" . $phone . "<br>";
echo "Address=" . $Address . "<br>";
echo "Pincode=" . $pin .  "<br>";
//echo "chicory=". $chicory.  "<br>";

$dbUsername="root";
$dbPassword="root";
$dbname="register";

$conn = new mysqli($host, $dbUsername ,$dbPassword,$dbname);
//echo "DB Conn = " . $conn . "<br>";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$SELECT ="SELECT * FROM user_list where name =$userlist";
echo "SELECT =". $SELECT ."<br>";


$stmt = $conn->prepare($SELECT);
//$stmt->bind_param("ssisissss",$fname,$email,$phone,$Address,$pin,$purecoffee,$coffeeblend10,$coffeemix20,$Tea);
$result=$stmt->execute();
echo "result =". $result ."<br>";

$stmt->close();
$conn->close();
?>
</body>
</html>