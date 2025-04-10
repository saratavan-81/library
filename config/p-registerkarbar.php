<?php

include 'dbname.php';

$namekarbar = $_POST['namekarbar'];
$familykarbar = $_POST['familykarbar'];
$codemeli = $_POST['codemeli'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone1 = '09' . $_POST['phone1'];
$phonesabet = '3' . $_POST['phonesabet'];
$roze = $_POST['roze'];
$mah = $_POST['mah'];
$sal = $_POST['sal'];
$mahalsdorshenasname = $_POST['mahalsdorshenasname'];
$address = $_POST['address'];

if (
    isset($namekarbar) && !empty($namekarbar) &&
    isset($familykarbar) && !empty($familykarbar) &&
    isset($codemeli) && !empty($codemeli) &&
    isset($email) && !empty($email) &&
    isset($password) && !empty($password) &&
    isset($phone1) && !empty($phone1) &&
    isset($phonesabet) && !empty($phonesabet) &&
    isset($roze) && !empty($roze) &&
    isset($mah) && !empty($mah) &&
    isset($sal) && !empty($sal) &&
    isset($mahalsdorshenasname) && !empty($mahalsdorshenasname) &&
    isset($address) && !empty($address)
) {
    $query = "SELECT * FROM karbar WHERE codemeli = '$codemeli' OR password ='$password' ";
    $selectresult = $conn->query($query);
    if ($selectresult->fetch_assoc() > 0) {
        echo "<script>
    window.alert('کاربر با کد ملی و رمز عبور وارد شده قبلا در سایت ثبت نام شده است');
    history.back();
    </script>";
    }


    $shenk = $_FILES['shenk'];
    $filetype = basename($shenk['type']);
    $shpathk = 'image/k-shenasname/' . $namekarbar . '-' . $familykarbar . '.jpg';
    if (!($filetype == 'jpeg' || $filetype == 'jpg' || $filetype == 'png')) {
        die("<script>
    window.alert('لطفا تصاویر را با پسوند jpg و یا png اپلود کنید');
    history.back();
    </script>");
    }

    $persk = $_FILES['persk'];
    $filetype = basename($persk['type']);
    $imgpathk = 'image/k-profile/' . $namekarbar . '-' . $familykarbar . '.jpg';
    if (!($filetype == 'jpeg' || $filetype == 'jpg' || $filetype == 'png')) {
        die("<script>
    window.alert('لطفا تصاویر را با پسوند jpg و یا png اپلود کنید');
    history.back();
    </script>");
    }

   


    $sql = "INSERT INTO karbar (namekarbar,familykarbar,password, email ,phone1,phonesabet,roze,mah,sal,mahalsdorshenasname,safheavalvadvomshenasname,imagekarbar,address,codemeli) VALUES ('$namekarbar','$familykarbar','$password','$email','$phone1','$phonesabet','$roze','$mah','$sal','$mahalsdorshenasname','$shpathk','$imgpathk','$address','$codemeli')";
    $result = $conn->query($sql);
    if ($result) {
        move_uploaded_file($shenk['tmp_name'], '../image/k-shenasname/' . $namekarbar . '-' . $familykarbar . '.jpg');
        move_uploaded_file($persk['tmp_name'], '../image/k-profile/' . $namekarbar . '-' . $familykarbar . '.jpg');
        die("<script>
        window.alert('ثبت نام کاربر با موفقیت انجام شد.');
        window.location.href='../hame karbaran.p.php';    
        </script>");
    } else {
        die("<script>
        window.alert('ثبت نام کاربر با خطا مواجه شد');
        history.back();
        </script>");
    }
} else {
    die("<script>
        window.alert('لطفا فیلد ها را به درستی تکمیل  کنید');
        history.back();
        </script>");
}


$conn->close();