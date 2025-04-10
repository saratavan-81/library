<?php

include 'dbname.php';

$nameranande = $_POST['nameranande'];
$familyranande= $_POST['familyranande'];
$codemeli = $_POST['codemeli'];
$phone = $_POST['phoneranande'];
$phonesabet =  $_POST['phonesabet'];
$roze = $_POST['roz'];
$mah = $_POST['mah'];
$sal = $_POST['sal'];
$mahalsdorshenasname = $_POST['mahalsdorshenasname'];
$car = $_POST['car'];
$address = $_POST['address'];
$oldcodemeli = $_POST['oldcodemeli'];
$sheen=$_POST['sheen'];
$perss=$_POST['perss'];


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
/*    $query = "SELECT * FROM ranande WHERE codemelii = '$codemeli'";
    $selectresult = $conn->query($query);
    if ($selectresult->fetch_assoc() > 0) {
        echo "<script>
    window.alert('راننده با کد ملی وارد شده قبلا در سایت ثبت نام شده است');
    history.back();
    </script>";
    }
*/

$shpathho = 'image/r-shenasname/' . $nameranande  . '-' . $familyranande . '.jpg';
$imgpathho = 'image/r-profile/' . $nameranande . '-' . $familyranande . '.jpg';

//do not updasyr code
if ($codemeli == $oldcodemeli) {
$query = "UPDATE ranande SET name  ='$nameranande', family ='$familyranande', codemelii  ='$codemeli ',phone ='$phone',phonesabet ='$phonesabet', roz='$roze ', mah='$mah', sal ='$sal ', mahalsdorshenasname ='$$mahalsdorshenasname',car='$car ', imgsafheavalvadovom ='$shpathho', imgranande  ='$imgpathho',address='$address' WHERE codemelii='$oldcodemeli'";

} else {
$result_duplicate = $conn->query("SELECT * FROM ranande WHERE codemelii='$oldcodemeli'");
if ($result_duplicate->num_rows > 0) {
    die("<script>
    window.alert('راننده با این کد قبلا در سایت ثبت شده است');
    window.location.href='../hame ranandegan.php'; 
    </script>");
}
// uosate normla 
$query = "UPDATE ranande SET name  ='$nameranande', family ='$familyranande', codemelii  ='$codemeli ',phone ='$phone',phonesabet ='$phonesabet', roz='$roze ', mah='$mah', sal ='$sal ', mahalsdorshenasname ='$$mahalsdorshenasname',car='$car ', imgsafheavalvadovom ='$shpathho', imgranande  ='$imgpathho',address='$address' WHERE codemelii='$oldcodemeli'";
}

$query_password = "";
    $query_pers = "";
    $query_sh = "";

    if (isset($password) && !empty($password)) { //new password

        $query_password = "UPDATE ranande SET password='$password' WHERE codemeli='$oldcodemeli'";
    }


    // شناسنامه
    if ($sheen['size'] != 0) { //new photo

        //files validation
        $filetype = basename($sheen['type']);
        if (!($filetype == 'jpeg' || $filetype == 'jpg' || $filetype == 'png')) {
           /* die("<script>
        window.alert('لطفا تصاویر را با پسوند jpg و یا png اپلود کنید');
        history.back();
        </script>"); */
        echo 'formnatax';
        }

        move_uploaded_file($sheen['tmp_name'], '../image/r-shenasname/' . $nameranande . '-' . $familyranande . '.jpg');
        $shpathho = 'image/k-shenasname/' . $nameranande . '-' . $familyranande . '.jpg';

        $query_pers = "UPDATE ranande SET imgsafheavalvadovom='$shpathho' WHERE codemelii='$oldcodemeli'";
    }


    //select for img path
    $query_select = "SELECT * FROM ranande WHERE codemelii='$oldcodemeli'";
    $result_select = $conn->query($query_select);

    $row = $result_select->fetch_array();

    //ادرس مبدا عکس 
    $shmabda = '../image/r-shenasname/' . $row['name'] . '-' . $row['family'] . '.jpg';

    //ادرس مقصد عکس 
    $shmaqsad = '../image/r-shenasname/' . $nameranande . '-' . $familyranande . '.jpg';

    //rename image to old name
    rename($shmabda, $shmaqsad);

    $result = $conn->query($query);  //update normal data

    echo 'first ok';

    // پرسنلی
    if ($perss['size'] != 0) { //new photo

        //files validation
        $filetype = basename($perss['type']);
        if (!($filetype == 'jpeg' || $filetype == 'jpg' || $filetype == 'png')) {
            die("<script>
        window.alert('لطفا تصاویر را با پسوند jpg و یا png اپلود کنید');
        history.back();
        </script>");
        }

        move_uploaded_file($perss['tmp_name'], '../image/r-profile/' . $nameranande . '-' . $familyranande . '.jpg');
        $imgpathho = 'image/r-profile/' . $nameranande . '-' . $familyranande . '.jpg';

        $query_pers = "UPDATE ranande SET  	imgranande ='$imgpathho' WHERE codemelii='$oldcodemeli'";
    }


    //select for img path
    $query_select = "SELECT * FROM ranande WHERE codemelii='$oldcodemeli'";
    $result_select = $conn->query($query_select);

    $row = $result_select->fetch_array();

    //ادرس مبدا عکس 
    $persmabda = '../image/r-profile/' . $row['name'] . '-' . $row['family'] . '.jpg';

    //ادرس مقصد عکس 
    $persmaqsad = '../image/r-profile/' . $nameranande . '-' . $familyranande . '.jpg';

    //rename image to old name
    rename($persmabda, $persmaqsad);

    $result = $conn->query($query);  //update normal data

    //ok | success
    /*echo "<script>
        window.alert('کاربر با موفقیت ویرایش شد');
        window.location.href='../hame karbarana.php';
        </script>";*/
        echo 'ok 2';
    } else {
        // die("<script>
        // window.alert('کد ملی قبلا توسط کاربر دیگری انتخاب شده است');
        // history.back();
        // </script>");
        echo 'ridi';
    }
    
    $conn->close();
    


/*
    $sheen = $_FILES['sheen'];
    $filetype = basename($sheen['type']);
    $shpathh = 'image/r-shenasname/' . $nameranande . '-' . $familyranande . '.' . $filetype;
    if (!($filetype == 'jpeg' || $filetype == 'jpg' || $filetype == 'png')) {
        die("<script>
    window.alert('لطفا تصاویر را با پسوند jpg و یا png اپلود کنید');
    history.back();
    </script>");
    }

    $perss = $_FILES['perss'];
    $filetype = basename($perss['type']);
    $imgpathh = 'image/r-profile/' . $nameranande . '-' . $familyranande . '.' . $filetype;
    if (!($filetype == 'jpeg' || $filetype == 'jpg' || $filetype == 'png')) {
        die("<script>
    window.alert('لطفا تصاویر را با پسوند jpg و یا png اپلود کنید');
    history.back();
    </script>");
    }

   

    $query = "UPDATE ranande SET codemelii='$codemeli', name='$nameranande', family='$familyranande', phone='$phone', phonesabet='$phonesabet', roz='$roze', mah='$mah', sal='$sal', sal='$sal', mahalsdorshenasname='$mahalsdorshenasname', car='$car', imgsafheavalvadovom='$shpathh', imgranande='$imgpathh', address='$address' WHERE codemelii='$oldcodemeli' ";
    $result = $conn->query($query);
    if ($result) {
        move_uploaded_file($sheen['tmp_name'], '../image/r-shenasname/' . $nameranande . '-' . $familyranande . '.' . $filetype);
        move_uploaded_file($perss['tmp_name'], '../image/r-profile/' . $nameranande . '-' . $familyranande . '.' . $filetype);
        die("<script>
                window.alert('راننده با موفقیت ویرایش شد');
                window.location.href='../hame ranandegan.php';
                </script>");
                die();
    } else {
        die("<script>
                window.alert('راننده ویرایش نشد');
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
*/