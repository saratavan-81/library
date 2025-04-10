<?php
session_start();
//session_name('dashboard');


$_SESSION['user-dashboard'] = false;
$_SESSION['admin-dashboard'] = false;
$_SESSION['personel-dashboard'] = false;

include 'dbname.php';

$namekarbar = $_POST['namekarbarr'];
$password = $_POST['passwordd'];

$user = "SELECT * FROM karbar WHERE  namekarbar = '$namekarbar'  AND password = '$password'";
$user_res = $conn->query($user);

$admin = "SELECT * FROM admin WHERE  nameadmin = '$namekarbar'  AND password = '$password'";
$admin_res = $conn->query($admin);

$personel = "SELECT * FROM personel WHERE  namepersonel = '$namekarbar'  AND codepersoneli = '$password'";
$personel_res = $conn->query($personel);


if ($user_res->num_rows > 0) {
    $_SESSION['user-dashboard'] = true;
    $info = $user_res->fetch_all();
    $_SESSION['namekarbar'] = $info[0][0];
    $_SESSION['familykarbar'] = $info[0][1];
    $_SESSION['name'] = $info[0][0];
    $_SESSION['family'] = $info[0][1];
    $_SESSION['email'] = $info[0][3];
    $_SESSION['phone1'] = $info[0][4];
    $_SESSION['phonesabet'] = $info[0][5];
    $_SESSION['roze'] = $info[0][6];
    $_SESSION['mah'] = $info[0][7];
    $_SESSION['sal'] = $info[0][8];
    $_SESSION['mahalsdorshenasname'] = $info[0][9];
    $_SESSION['imagekarbar'] = $info[0][11];
    $_SESSION['address'] = $info[0][12];
    $_SESSION['codemeli'] = $info[0][13];
    $_SESSION["login"]="true";
    echo "<script>
    window.alert('خوش امدید.');
    window.location.href='../k-index.php';    
    </script>";
} else if ($admin_res->num_rows > 0) {
    $_SESSION['admin-dashboard'] = true;
    $info = $admin_res->fetch_all();
    $_SESSION['nameadmin'] = $info[0][0];
    $_SESSION['familyadmin'] = $info[0][1];
    $_SESSION["login"]="true";
    $_SESSION['name'] = $info[0][0];
    $_SESSION['family'] = $info[0][1];
    $_SESSION['admin'] = "true";
    echo "<script>
    window.alert('خوش امدید.');
    window.location.href='../a-index.php';    
    </script>";
} else if ($personel_res->num_rows > 0) {
    $_SESSION['personel-dashboard'] = true;
    $_SESSION['admin'] = "true";
    $info = $personel_res->fetch_all();
    $_SESSION["login"]="true";
    $_SESSION['name'] = $info[0][0];
    $_SESSION['family'] = $info[0][1];
    $_SESSION['namepersonel'] = $info[0][0];
    $_SESSION['familypersonel'] = $info[0][1];
    $_SESSION['codepersoneli '] = $info[0][2];
    $_SESSION['email'] = $info[0][3];
    $_SESSION['phone1'] = $info[0][4];
    $_SESSION['phonesabet'] = $info[0][5];
    $_SESSION['roze'] = $info[0][6];
    $_SESSION['mah'] = $info[0][7];
    $_SESSION['sal'] = $info[0][8];
    $_SESSION['mahalsdorshenasname'] = $info[0][9];
    $_SESSION['adamsopishine'] = $info[0][10];
    $_SESSION['imagepersoneli'] = $info[0][12];
    $_SESSION['address '] = $info[0][13];
    echo "<script>
    window.alert('خوش امدید.');
    window.location.href='../p-index.php';    
    </script>";
} else {
    die("<script>
    window.alert('عدم تطابق نام کاربری و رمز عبور');
    history.back();
    </script>");
}
