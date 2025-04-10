<?php
session_start();
include 'dbname.php';

$name = $_POST['name'];
$family = $_POST['family'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone1 = '09' . $_POST['phone1'];
$phonesabet = '3' . $_POST['phonesabet'];
$codemeli = $_POST['codemeli'];
$roze = $_POST['roze'];
$mah = $_POST['mah'];
$sal = $_POST['sal'];
$datevalidateozviat = $_POST['datevalidateozviat'];
$mahalsdorshenasname = $_POST['mahalsdorshenasname'];
$address = $_POST['address'];

if (
    isset($name) && !empty($name) &&
    isset($family) && !empty($family) &&
    isset($password) && !empty($password) &&
    isset($email) && !empty($email) &&
    isset($phone1) && !empty($phone1) &&
    isset($phonesabet) && !empty($phonesabet) &&
    isset($codemeli) && !empty($codemeli) &&
    isset($roze) && !empty($roze) &&
    isset($mah) && !empty($mah) &&
    isset($sal) && !empty($sal) &&
    isset($mahalsdorshenasname) && !empty($mahalsdorshenasname) &&
    isset($address) && !empty($address)
) {
    $query = "SELECT * FROM karbar WHERE codemeli = '$codemeli'";
    $selectresult = $conn->query($query);
    if ($selectresult->fetch_assoc() > 0) {
        die("<script>
    window.alert('حساب دیگری با کد ملی وارد شده قبلا در سایت ثبت نام کرده است');
    history.back();
    </script>");
    }

    $shenasname = $_FILES['safheavalvadvomshenasname'];
    $filetype = basename($shenasname['type']);
    $shpath = 'image/k-shenasname/' . $name . '-' . $family . '.jpg';
    if (!($filetype == 'jpeg' || $filetype == 'jpg' || $filetype == 'png')) {
        die("<script>
    window.alert('لطفا تصاویر را با پسوند jpg و یا png اپلود کنید');
    history.back();
    </script>");
    }

    $imagekarbar = $_FILES['imagekarbar'];
    $filetype = basename($imagekarbar['type']);
    $imgpath = 'image/k-profile/' . $name . '-' . $family . '.jpg';
    if (!($filetype == 'jpeg' || $filetype == 'jpg' || $filetype == 'png')) {
        die("<script>
    window.alert('لطفا تصاویر را با پسوند jpg و یا png اپلود کنید');
    history.back();
    </script>");
    }


    $query = "INSERT INTO karbar (namekarbar,familykarbar,password,email,phone1,phonesabet,roze,mah,sal,mahalsdorshenasname,safheavalvadvomshenasname,imagekarbar,address,codemeli,datevalidateozviat) VALUES ('$name','$family','$password','$email','$phone1','$phonesabet','$roze','$mah','$sal','$mahalsdorshenasname','$shpath','$imgpath','$address','$codemeli','$datevalidateozviat')";
    $result = $conn->query($query);
    if ($result) {
        $_SESSION["login"]="true";
        $_SESSION["codemeli"]=$codemeli;
        $_SESSION["name"]=$name;
        $_SESSION["family"]=$family;
        move_uploaded_file($shenasname['tmp_name'], '../image/k-shenasname/' . $name . '-' . $family . '.jpg');
        move_uploaded_file($imagekarbar['tmp_name'], '../image/k-profile/' . $name . '-' . $family . '.jpg');
        echo "<script>
    window.alert('ثبت نام شما با موفقیت انجام شد.');
    window.location.href='../index.php';    
    </script>";
    } else {
        die("<script>
    window.alert('ثبت نام با خطا مواجه شد');
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