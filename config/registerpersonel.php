<?php

include 'dbname.php';

$namepersonel = $_POST['namepersonel'];
$familypersonel = $_POST['familypersonel'];
$codepersoneli = $_POST['codepersoneli'];
$email = $_POST['email'];
$phone1 = '09' . $_POST['phone1'];
$phonesabet = '3' . $_POST['phonesabet'];
$roze = $_POST['roze'];
$mah = $_POST['mah'];
$sal = $_POST['sal'];
$mahalsdorshenasname = $_POST['mahalsdorshenasname'];
$adamsopishine = $_POST['adamsopishine'];
$address = $_POST['address'];

if (
    isset($namepersonel) && !empty($namepersonel) &&
    isset($familypersonel) && !empty($familypersonel) &&
    isset($codepersoneli) && !empty($codepersoneli) &&
    isset($email) && !empty($email) &&
    isset($phone1) && !empty($phone1) &&
    isset($phonesabet) && !empty($phonesabet) &&
    isset($roze) && !empty($roze) &&
    isset($mah) && !empty($mah) &&
    isset($sal) && !empty($sal) &&
    isset($mahalsdorshenasname) && !empty($mahalsdorshenasname) &&
    isset($adamsopishine) && !empty($adamsopishine) &&
    isset($address) && !empty($address)
) {
    $query = "SELECT * FROM personel WHERE codepersoneli = '$codepersoneli'";
    $selectresult = $conn->query($query);
    if ($selectresult->fetch_assoc() > 0) {
        echo "<script>
    window.alert('کاربر با کد پرسنلی وارد شده قبلا در سایت ثبت نام شده است');
    history.back();
    </script>";
    }


    $shen = $_FILES['shen'];
    $filetype = basename($shen['type']);
    $shpath = 'image/p-shenasname/' . $namepersonel . '-' . $familypersonel . '.jpg';
    if (!($filetype == 'jpeg' || $filetype == 'jpg' || $filetype == 'png')) {
        die("<script>
    window.alert('لطفا تصاویر را با پسوند jpg و یا png اپلود کنید');
    history.back();
    </script>");
    }

    $pers = $_FILES['pers'];
    $filetype = basename($pers['type']);
    $imgpath = 'image/p-profile/' . $namepersonel . '-' . $familypersonel . '.jpg';
    if (!($filetype == 'jpeg' || $filetype == 'jpg' || $filetype == 'png')) {
        die("<script>
    window.alert('لطفا تصاویر را با پسوند jpg و یا png اپلود کنید');
    history.back();
    </script>");
    }

   


    $sql = "INSERT INTO personel (namepersonel,familypersonel,codepersoneli, email ,phone1,phonesabet,roze,mah,sal,mahalsdorshenasname,adamsopishine,safheavalvadvomeshenasname,imagepersoneli,address) VALUES ('$namepersonel','$familypersonel','$codepersoneli','$email','$phone1','$phonesabet','$roze','$mah','$sal','$mahalsdorshenasname','$adamsopishine','$shpath','$imgpath','$address')";
    $result = $conn->query($sql);
    if ($result) {
        move_uploaded_file($shen['tmp_name'], '../image/p-shenasname/' . $namepersonel . '-' . $familypersonel . '.jpg');
        move_uploaded_file($pers['tmp_name'], '../image/p-profile/' . $namepersonel . '-' . $familypersonel . '.jpg');
        die("<script>
        window.alert('ثبت نام پرسنل با موفقیت انجام شد.');
        window.location.href='../hame%20personel.aa.php';    
        </script>");
    } else {
        die("<script>
        window.alert('ثبت نام پرسنل با خطا مواجه شد');
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