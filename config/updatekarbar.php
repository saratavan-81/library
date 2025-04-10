<?php

include 'dbname.php';

$namekarbar  = $_POST['namekarbar'];
$familykarbar = $_POST['familykarbar'];
$password = $_POST['password'];
$codemeli  = $_POST['codemeli'];
$oldcodemeli = $_POST['oldcodemeli'];
$email   = $_POST['email'];
$phone1  = $_POST['phonekarbar'];
$phonesabet  =  $_POST['phonesabet'];
$roze = $_POST['roz'];
$mah = $_POST['mah'];
$sal = $_POST['sal'];
$mahalsdorshenasname  = $_POST['mahalsdorshenasname'];
$address  = $_POST['address'];
$sheeno = $_FILES['sheeno'];
$persso = $_FILES['persso'];


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
    isset($address) && !empty($address) &&
    isset($mahalsdorshenasname) && !empty($mahalsdorshenasname) &&
    isset($address) && !empty($address)
) {

    // set new pic path: new name+family
    $shpathho = 'image/k-shenasname/' . $namekarbar . '-' . $familykarbar . '.jpg';
    $imgpathho = 'image/k-profile/' . $namekarbar . '-' . $familykarbar . '.jpg';

    //do not update code
    if ($codemeli == $oldcodemeli) {
        $query = "UPDATE karbar SET namekarbar ='$namekarbar', familykarbar='$familykarbar', email ='$email ', roze='$roze', mah='$mah', sal='$sal', sal='$sal', phone1 ='$phone1 ', phonesabet ='$phonesabet ', mahalsdorshenasname ='$mahalsdorshenasname ', safheavalvadvomshenasname ='$shpathho', imagekarbar ='$imgpathho',address ='$address' WHERE codemeli='$oldcodemeli'";
    } else {
        print_r($result_duplicate = $conn->query("SELECT codemeli FROM karbar WHERE codemeli='$codemeli'"));
        if ($result_duplicate->num_rows > 0) {
            die("<script>
                window.alert('کاربری با این کد قبلا در سایت ثبت شده است');
                window.location.href='../hame karbarana.php'; 
                </script>");
        }
        // update code
        $query = "UPDATE karbar SET codemeli='$codemeli', namekarbar ='$namekarbar', familykarbar='$familykarbar', email ='$email ', roze='$roze', mah='$mah', sal='$sal', sal='$sal', phone1 ='$phone1 ', phonesabet ='$phonesabet ', mahalsdorshenasname ='$mahalsdorshenasname ', safheavalvadvomshenasname ='$shpathho', imagekarbar ='$imgpathho',address ='$address' WHERE codemeli='$oldcodemeli'";
    }

    //defaullt
    $query_password = "";
    $query_pers = "";
    $query_sh = "";

    if (isset($password) && !empty($password)) { //new password

        $query_password = "UPDATE karbar SET password='$password' WHERE codemeli='$oldcodemeli'";
    }


    // شناسنامه
    if ($sheeno['size'] != 0) { //new photo

        //files validation
        $filetype = basename($sheeno['type']);
        if (!($filetype == 'jpeg' || $filetype == 'jpg' || $filetype == 'png')) {
            die("<script>
        window.alert('لطفا تصاویر را با پسوند jpg و یا png اپلود کنید');
        history.back();
        </script>");
        }

        move_uploaded_file($sheeno['tmp_name'], '../image/k-shenasname/' . $namekarbar . '-' . $familykarbar . '.jpg');
        $shpathho = 'image/k-shenasname/' . $namekarbar . '-' . $familykarbar . '.jpg';

        $query_pers = "UPDATE karbar SET safheavalvadvomshenasname ='$shpathho' WHERE codemeli='$oldcodemeli'";
    }


    //select for img path
    $query_select = "SELECT * FROM karbar WHERE codemeli='$oldcodemeli'";
    $result_select = $conn->query($query_select);

    $row = $result_select->fetch_array();

    //ادرس مبدا عکس 
    $shmabda = '../image/k-shenasname/' . $row['namekarbar'] . '-' . $row['familykarbar'] . '.jpg';

    //ادرس مقصد عکس 
    $shmaqsad = '../image/k-shenasname/' . $namekarbar . '-' . $familykarbar . '.jpg';

    //rename image to old name
    rename($shmabda, $shmaqsad);

    //ok | success
    echo "<script>
        window.alert('کاربر با موفقیت ویرایش شد');
        window.location.href='../hame karbarana.php';
        </script>";

    // پرسنلی شروع
    if ($persso['size'] != 0) { //new photo

        //files validation
        $filetype = basename($persso['type']);
        if (!($filetype == 'jpeg' || $filetype == 'jpg' || $filetype == 'png')) {
            die("<script>
        window.alert('لطفا تصاویر را با پسوند jpg و یا png اپلود کنید');
        history.back();
        </script>");
        }

        move_uploaded_file($persso['tmp_name'], '../image/k-profile/' . $namekarbar . '-' . $familykarbar . '.jpg');
        $imgpathho = 'image/k-profile/' . $namekarbar . '-' . $familykarbar . '.jpg';

        $query_pers = "UPDATE karbar SET imagekarbar ='$imgpathho' WHERE codemeli='$oldcodemeli'";
    }


    //select for img path
    $query_select = "SELECT * FROM karbar WHERE codemeli='$oldcodemeli'";
    $result_select = $conn->query($query_select);

    $grow = $result_select->fetch_array();

    //ادرس مبدا عکس 
    $persmabda = '../image/k-profile/' . $grow['namekarbar'] . '-' . $grow['familykarbar'] . '.jpg';

    //ادرس مقصد عکس 
    $persmaqsad = '../image/k-profile/' . $namekarbar . '-' . $familykarbar . '.jpg';


    //rename image to old name
    rename($persmabda, $persmaqsad);
    // پرسنلی تمام


    $result = $conn->query($query);  //update normal data

    //ok | success
    echo "<script>
        window.alert('کاربر با موفقیت ویرایش شد');
        window.location.href='../hame karbarana.php';
        </script>";


    
} else {
    die ("<script>
    window.alert('پر کردن همه فیلد ها الزامی است');
    window.location.href='../hame karbarana.php';
    </script>");
}

$conn->close();
