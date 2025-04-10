<?php
$localhost="localhost";
$namedb="root";
$passworddb="";
$db="projectwebtavan";

try{
    $conn=new mysqli($localhost,$namedb,$passworddb,$db);
    $conn->set_charset('utf8');

}
catch (\Throwable $th) {
    echo "<script>
    window.alert('خطا در اتصال به دیتابیس');
    history.back();
    </script>";
}

$namekarbar = $_POST['namekarbarr'];
$password = $_POST['passwordd'];

$query = "SELECT * FROM karbar WHERE  namekarbar = '$namekarbar'  AND password = '$password'";
$result = $conn->query($query);
if ($result->fetch_assoc()>0) {
    echo "<script>
    window.alert('خوش امدید.');
    window.location.href='../k-index.php';    
    </script>";

} else {
    echo "<script>
    window.alert('اطلاعات حساب کاربری اشتباه است.');
    history.back();
    </script>";
}