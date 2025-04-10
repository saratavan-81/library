<?php

include 'dbname.php';

$nameranande = $_POST['nameranande'];
$familyranande= $_POST['familyranande'];
$codemeli = $_POST['codemeli'];
$phone = '09' . $_POST['phoneranande'];
$phonesabet = '3' . $_POST['phonesabet'];
$roze = $_POST['roz'];
$mah = $_POST['mah'];
$sal = $_POST['sal'];
$mahalsdorshenasname = $_POST['mahalsdorshenasname'];
$car = $_POST['car'];
$address = $_POST['address'];

if (
    isset($nameranande) && !empty($nameranande) &&
    isset($familyranande) && !empty($familyranande) &&
    isset($codemeli) && !empty($codemeli) &&
    isset($phone) && !empty($phone) &&
    isset($phonesabet) && !empty($phonesabet) &&
    isset($roze) && !empty($roze) &&
    isset($mah) && !empty($mah) &&
    isset($sal) && !empty($sal) &&
    isset($mahalsdorshenasname) && !empty($mahalsdorshenasname) &&
    isset($car) && !empty($car) &&
    isset($address) && !empty($address)
) {
    $query = "SELECT * FROM ranande WHERE codemelii = '$codemeli'";
    $selectresult = $conn->query($query);
    if ($selectresult->fetch_assoc() > 0) {
        echo "<script>
    window.alert('راننده با کد ملی وارد شده قبلا در سایت ثبت نام شده است');
    history.back();
    </script>";
    }


    $sheen = $_FILES['sheen'];
    $filetype = basename($sheen['type']);
    $shpathh = 'image/r-shenasname/' . $nameranande . '-' . $familyranande . '.jpg';
    if (!($filetype == 'jpeg' || $filetype == 'jpg' || $filetype == 'png')) {
        die("<script>
    window.alert('لطفا تصاویر را با پسوند jpg و یا png اپلود کنید');
    history.back();
    </script>");
    }

    $perss = $_FILES['perss'];
    $filetype = basename($perss['type']);
    $imgpathh = 'image/r-profile/' . $nameranande . '-' . $familyranande . '.jpg';
    if (!($filetype == 'jpeg' || $filetype == 'jpg' || $filetype == 'png')) {
        die("<script>
    window.alert('لطفا تصاویر را با پسوند jpg و یا png اپلود کنید');
    history.back();
    </script>");
    }

   


    $sqll = "INSERT INTO ranande (name,family,codemelii,phone,phonesabet,roz,mah,sal,mahalsdorshenasname,car,imgsafheavalvadovom,imgranande,address) VALUES ('$nameranande','$familyranande','$codemeli','$phone','$phonesabet','$roze','$mah','$sal','$mahalsdorshenasname','$car','$shpathh','$imgpathh','$address')";
    $result = $conn->query($sqll);
    if ($result) {
        move_uploaded_file($sheen['tmp_name'], '../image/r-shenasname/' . $nameranande . '-' . $familyranande . '.jpg');
        move_uploaded_file($perss['tmp_name'], '../image/r-profile/' . $nameranande . '-' . $familyranande . '.jpg');
        die("<script>
        window.alert('ثبت نام راننده با موفقیت انجام شد.');
        window.location.href='../hame ranandegan.php';    
        </script>");
    } else {
        die("<script>
        window.alert('ثبت نام راننده با خطا مواجه شد');
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