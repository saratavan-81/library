<?php

include 'dbname.php';

$nameranande = $_POST['nameranande'];
$familyranande = $_POST['familyranande'];

$codemeli = $_POST['codemeli'];
$oldcodemeli = $_POST['oldcodemeli'];

$phone = $_POST['phoneranande'];

$phonesabet = $_POST['phonesabet'];
$roze =  $_POST['roz'];
$mah = $_POST['mah'];
$sal  = $_POST['sal'];
$mahalsdorshenasname = $_POST['mahalsdorshenasname'];
$car = $_POST['car'];
$address = $_POST['address'];
$sheen = $_FILES['sheen'];
$perss = $_FILES['perss'];


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


    // set new pic path: new name+family
    $shpathho = 'image/r-shenasname/' . $nameranande . '-' . $familyranande . '.jpg';
    $imgpathho = 'image/r-profile/' . $nameranande . '-' . $familyranande . '.jpg';

    //do not update code
    if ($codemeli == $oldcodemeli) {

        $query = "UPDATE ranande SET name='$nameranande', family='$familyranande', phone='$phone', phonesabet='$phonesabet', roz='$roze', mah='$mah', sal='$sal', sal='$sal', mahalsdorshenasname='$mahalsdorshenasname', car='$car', address='$address', imgsafheavalvadovom='$shpathho', imgranande='$imgpathho' WHERE codemelii='$oldcodemeli'";
    } else {
        $result_duplicate = $conn->query("SELECT codemelii FROM ranande WHERE codemelii='$codemeli'");
        if ($result_duplicate->num_rows > 0) {
            die("<script>
                window.alert('راننده ای با این کد قبلا در سایت ثبت شده است');
                window.location.href='../hame ranandegan.php'; 
                </script>");
        }
        // update code
        $query = "UPDATE ranande SET codemelii ='$codemeli' name='$nameranande', family='$familyranande', phone='$phone', roz='$roze', mah='$mah', sal='$sal', phonesabet='$phonesabet', mahalsdorshenasname='$mahalsdorshenasname',car='$car', address='$address',imgsafheavalvadovom='$shpathho', imgranande='$imgpathho' WHERE codemelii='$oldcodemeli'";
    }

    //defaullt
    $query_password = "";
    $query_pers = "";
    $query_sh = "";

    if (isset($password) && !empty($password)) { //new password

        $query_password = "UPDATE ranande SET password='$password' WHERE codemelii='$oldcodemeli'";
    }


    // شناسنامه
    if ($sheen['size'] != 0) { //new photo

        //files validation
        $filetype = basename($sheen['type']);
        if (!($filetype == 'jpeg' || $filetype == 'jpg' || $filetype == 'png')) {
            die("<script>
        window.alert('لطفا تصاویر را با پسوند jpg و یا png اپلود کنید');
        history.back();
        </script>");
        }

        move_uploaded_file($sheen['tmp_name'], '../image/r-shenasname/' . $nameranande . '-' . $familyranande . '.jpg');
        $shpathho = 'image/r-shenasname/' . $nameranande . '-' . $familyranande . '.jpg';

        $query_pers = "UPDATE ranande SET safheavalvadvomshenasname ='$shpathho' WHERE codemelii='$oldcodemeli'";
    }


    //select for img path
    $query_select = "SELECT * FROM ranande WHERE codemelii='$oldcodemeli'";
    $result_select = $conn->query($query_select);

    $qrow = $result_select->fetch_array();

    //ادرس مبدا عکس 
    $shmabda = '../image/r-shenasname/' . $qrow['name'] . '-' . $qrow['family'] . '.jpg';

    //ادرس مقصد عکس 
    $shmaqsad = '../image/r-shenasname/' . $nameranande . '-' . $familyranande . '.jpg';

    //rename image to old name
    rename($shmabda, $shmaqsad);

    echo "<script>
       window.alert('راننده با موفقیت ویرایش شد');
         window.location.href='../hame ranandegan.php';
        </script>";

    // پرسنلی شروع
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

        $query_pers = "UPDATE ranande SET imagepersoneli ='$imgpathho' WHERE codemelii='$oldcodemeli'";
    }


    //select for img path
    $query_select = "SELECT * FROM ranande WHERE codemelii='$oldcodemeli'";
    $result_select = $conn->query($query_select);

    $grow = $result_select->fetch_array();

    //ادرس مبدا عکس 
    $persmabda = '../image/r-profile/' . $grow['name'] . '-' . $grow['family'] . '.jpg';

    //ادرس مقصد عکس 
    $persmaqsad = '../image/r-profile/' . $nameranande . '-' . $familyranande . '.jpg';


    //rename image to old name
    rename($persmabda, $persmaqsad);
    // پرسنلی تمام


    $result = $conn->query($query);  //update normal data

    echo "<script>
   window.alert('راننده با موفقیت ویرایش شد');
    window.location.href='../hame ranandegan.php';
         </script>";
} else {
    die("<script>
    window.alert('پر کردن همه فیلد ها الزامی است');
    window.location.href='../hame ranandegan.php';
    </script>");
}

$conn->close();
