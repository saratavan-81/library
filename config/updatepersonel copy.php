<?php

include 'dbname.php';
include "dbname2.php"
;
$namepersonel = $_POST['namepersonel'];
$familypersonel = $_POST['familypersonel'];
$email = $_POST['email'];
$phone1 = $_POST['phone1'];
$phonesabet = $_POST['phonesabet'];
$roze = $_POST['roze'];
$mah = $_POST['mah'];
$sal = $_POST['sal'];
$mahalsdorshenasname = $_POST['mahalsdorshenasname'];
$adamsopishine = $_POST['adamsopishine'];
$address = $_POST['address'];

$codepersoneli = $_POST['codepersoneli'];
$oldcodepersoneli = $_POST['oldcodepersoneli'];


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


























    $shen = $_FILES['shen'];
    $filetype = basename($shen['type']);
    $shpath = 'image/p-shenasname/' . $namepersonel . '-' . $familypersonel . '.jpg';
    if (!($filetype == 'jpeg' || $filetype == 'jpg' || $filetype == 'png')) {
        die("<script>
        window.alert('لطفا تصاویر را با پسوند jpg و یا png اپلود کنید'');
        history.back();
        </script>");
    }


    $pers = $_FILES['pers'];
    $filetype = basename($pers['type']);
    $imgpath = 'image/p-profile/' . $namepersonel . '-' . $familypersonel . '.jpg';
    if (!($filetype == 'jpeg' || $filetype == 'jpg' || $filetype == 'png')) {
        die("<script>
        window.alert('لطفا تصاویر را با پسوند jpg و یا png اپلود کنید'');
        history.back();
        </script>");
    }



    $update=$database->prepare("UPDATE personel SET codepersoneli='$codepersoneli', namepersonel='$namepersonel', familypersonel='$familypersonel', email='$email', phone1='$phone1', phonesabet='$phonesabet', roze='$roze', mah='$mah', sal='$sal', mahalsdorshenasname='$mahalsdorshenasname', adamsopishine='$adamsopishine', address='$address', safheavalvadvomeshenasname='$shpath', imagepersoneli='$imgpath' WHERE codepersoneli='$oldcodepersoneli'");
    $update->execute();
    if ($update->rowCount()>0) {
        move_uploaded_file($shen['tmp_name'], '../image/p-shenasname/' . $namepersonel . '-' . $familypersonel . '.jpg');
        move_uploaded_file($pers['tmp_name'], '../image/p-profile/' . $namepersonel . '-' . $familypersonel . '.jpg');
        die("<script>
                window.alert('پرسنل با موفقیت ویرایش شد');
                window.location.href='../hame personel.aa.php';
                </script>");
    } else {
        die("<script>
                window.alert('کاربر دیگر با این کد پرسنلی وجود دارد');
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
