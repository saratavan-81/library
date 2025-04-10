<?php

include 'dbname.php';
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
$sheen = $_FILES['shen'];
$perss = $_FILES['pers'];


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


    // set new pic path: new name+family
    $shpathho = 'image/p-shenasname/' . $namepersonel . '-' . $familypersonel . '.jpg';
    $imgpathho = 'image/p-profile/' . $namepersonel . '-' . $familypersonel . '.jpg';

    //do not update code
    if ($codepersoneli == $oldcodepersoneli) {
    
        $query = "UPDATE personel SET namepersonel='$namepersonel', familypersonel='$familypersonel', email='$email', phone1='$phone1', roze='$roze', mah='$mah', sal='$sal', sal='$sal', phonesabet='$phonesabet', mahalsdorshenasname='$mahalsdorshenasname', adamsopishine='$adamsopishine', address='$address',safheavalvadvomeshenasname='$shpathho', imagepersoneli='$imgpathho' WHERE codepersoneli='$oldcodepersoneli'";
    
    } else {
        print_r($result_duplicate = $conn->query("SELECT codepersoneli FROM personel WHERE codepersoneli='$codepersoneli'"));
        if ($result_duplicate->num_rows > 0) {
            die("<script>
                window.alert('کاربری با این کد قبلا در سایت ثبت شده است');
                window.location.href='../hame%20personel.aa.php'; 
                </script>");
        }
        // update code
        $query = "UPDATE personel SET codepersoneli ='$codepersoneli' namepersonel='$namepersonel', familypersonel='$familypersonel', email='$email', phone1='$phone1', roze='$roze', mah='$mah', sal='$sal', sal='$sal', phonesabet='$phonesabet', mahalsdorshenasname='$mahalsdorshenasname', adamsopishine='$adamsopishine', address='$address',safheavalvadvomeshenasname='$shpathho', imagepersoneli='$imgpathho' WHERE codepersoneli='$oldcodepersoneli'";
    }

    //defaullt
    $query_password = "";
    $query_pers = "";
    $query_sh = "";

    if (isset($password) && !empty($password)) { //new password

        $query_password = "UPDATE personel SET password='$password' WHERE codepersoneli='$oldcodepersoneli'";
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

        move_uploaded_file($sheen['tmp_name'], '../image/p-shenasname/' . $namepersonel . '-' . $familypersonel . '.jpg');
        $shpathho = 'image/p-shenasname/' . $namepersonel . '-' . $familypersonel . '.jpg';

        $query_pers = "UPDATE personel SET safheavalvadvomshenasname ='$shpathho' WHERE codepersoneli='$oldcodepersoneli'";
    }


    //select for img path
    $query_select = "SELECT * FROM personel WHERE codepersoneli='$oldcodepersoneli'";
    $result_select = $conn->query($query_select);

    $row = $result_select->fetch_array();

    //ادرس مبدا عکس 
    $shmabda = '../image/p-shenasname/' . $row['namepersonel'] . '-' . $row['familypersonel'] . '.jpg';

    //ادرس مقصد عکس 
    $shmaqsad = '../image/p-shenasname/' . $namepersonel . '-' . $familypersonel . '.jpg';

    //rename image to old name
    rename($shmabda, $shmaqsad);

    echo "<script>
       window.alert('کاربر با موفقیت ویرایش شد');
         window.location.href='../hame%20personel.aa.php';
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

        move_uploaded_file($perss['tmp_name'], '../image/p-profile/' . $namepersonel . '-' . $familypersonel . '.jpg');
        $imgpathho = 'image/p-profile/' . $namepersonel . '-' . $familypersonel . '.jpg';

        $query_pers = "UPDATE personel SET imagepersoneli ='$imgpathho' WHERE codepersoneli='$oldcodepersoneli'";
    }


    //select for img path
    $query_select = "SELECT * FROM personel WHERE codepersoneli='$oldcodepersoneli'";
    $result_select = $conn->query($query_select);

    $grow = $result_select->fetch_array();

    //ادرس مبدا عکس 
    $persmabda = '../image/p-profile/' . $grow['namepersonel'] . '-' . $grow['familypersonel'] . '.jpg';

    //ادرس مقصد عکس 
    $persmaqsad = '../image/p-profile/' . $namepersonel . '-' . $familypersonel . '.jpg';


    //rename image to old name
    rename($persmabda, $persmaqsad);
    // پرسنلی تمام


    $result = $conn->query($query);  //update normal data

  echo "<script>
   window.alert('کاربر با موفقیت ویرایش شد');
    window.location.href='../hame%20personel.aa.php';
         </script>";


    
} else {
    die ("<script>
    window.alert('پر کردن همه فیلد ها الزامی است');
    window.location.href='../hame%20personel.aa.php';
    </script>");
}

$conn->close();
