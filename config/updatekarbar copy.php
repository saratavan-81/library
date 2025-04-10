<?php

include 'dbname.php';

$namekarbar  = $_POST['namekarbar'];
$familykarbar = $_POST['familykarbar']; 	 
$password = $_POST['password'];
$codemeli  = $_POST['codemeli'];
$email   = $_POST['email'];
$phone1  = $_POST['phonekarbar'];
$phonesabet  =  $_POST['phonesabet'];
$roze = $_POST['roz'];
$mah = $_POST['mah'];
$sal = $_POST['sal'];
$mahalsdorshenasname  = $_POST['mahalsdorshenasname'];
$address  = $_POST['address'];
$oldcodemeli = $_POST['oldcodemeli'];

if (
    isset($namekarbar) && !empty($namekarbar) &&
    isset($familykarbar) && !empty($familykarbar) &&
    isset($password) && !empty($password) &&
    isset($codemeli) && !empty($codemeli) &&
    isset($email) && !empty($email) &&
    isset($phone1) && !empty($phone1) &&
    isset($phonesabet) && !empty($phonesabet) &&
    isset($roze) && !empty($roze) &&
    isset($mah) && !empty($mah) &&
    isset($sal) && !empty($sal) &&
    isset($address) && !empty($address)&&
    isset($mahalsdorshenasname) && !empty($mahalsdorshenasname)&&
    isset($address) && !empty($address)
) {
   /* $query = "SELECT * FROM karbar WHERE codemeli = '$codemeli' OR password ='$password' ";
    $selectresult = $conn->query($query);
    if ($selectresult->fetch_assoc() > 0) {
        echo "<script>
    window.alert('کاربر با کد ملی و رمز عبور وارد شده قبلا در سایت ثبت نام شده است');
    history.back();
    </script>";
    }
*/
    $sheeno = $_FILES['sheeno'];
    $filetype = basename($sheeno['type']);
    $shpathho = 'image/k-shenasname/' . $namekarbar . '-' . $familykarbar . '.jpg';
    if (!($filetype == 'jpeg' || $filetype == 'jpg' || $filetype == 'png')) {
        die("<script>
    window.alert('لطفا تصاویر را با پسوند jpg و یا png اپلود کنید');
    history.back();
    </script>");
    }

    $persso = $_FILES['persso'];
    $filetype = basename($persso['type']);
    $imgpathho = 'image/k-profile/' . $namekarbar . '-' . $familykarbar . '.jpg';
    if (!($filetype == 'jpeg' || $filetype == 'jpg' || $filetype == 'png')) {
        die("<script>
    window.alert('لطفا تصاویر را با پسوند jpg و یا png اپلود کنید');
    history.back();
    </script>");
    }

   

    $query = "UPDATE karbar SET codemeli='$codemeli', namekarbar ='$namekarbar', familykarbar='$familykarbar', password ='$password',email ='$email ', roze='$roze', mah='$mah', sal='$sal', sal='$sal', phone1 ='$phone1 ', phonesabet ='$phonesabet ', mahalsdorshenasname ='$mahalsdorshenasname ', safheavalvadvomshenasname ='$shpathho', imagekarbar ='$imgpathho',address ='$address' WHERE codemeli='$oldcodemeli' ";
    $result = $conn->query($query);
    if ($result) {
        move_uploaded_file($sheeno['tmp_name'], '../image/k-shenasname/' . $namekarbar . '-' . $familykarbar . '.jpg');
        move_uploaded_file($persso['tmp_name'], '../image/k-profile/' . $namekarbar . '-' . $familykarbar . '.jpg');
        die("<script>
                window.alert('کاربر با موفقیت ویرایش شد');
                window.location.href='../hame karbarana.php';
                </script>");
                die();
    } else {
        die("<script>
                window.alert('کاربر ویرایش نشد');
                history.back();
                </script>");
    }
    
} else {
    die("<script>
    window.alert('کد ملی قبلا توسط کاربر دیگری انتخاب شده است');
    history.back();
    </script>");
}

$conn->close();


