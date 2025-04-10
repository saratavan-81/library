<?php
$localhost="localhost";
$namedb="root";
$passworddb="";
$db="projectwebtavan";

try{
    $conn=new mysqli($localhost,$namedb,$passworddb,$db);
    $conn->set_charset('utf8');

}
catch (\Throwable $th) {
    echo "<script>
    window.alert('خطا در اتصال به دیتابیس');
    history.back();
    </script>";
}
$namep=$_POST['namep'];
$familyp=$_POST['familyp'];
$passwordp=$_POST['passwordp'];
$emailp=$_POST['emailp'];
$phonep1='09' . $_POST['phonep1'];
$phonep2='09' . $_POST['phonep2'];
$phonesabetp= '3' . $_POST['phonesabetp'];
$rozep=$_POST['rozp'];
$mahp=$_POST['mahp'];
$salp=$_POST['salp'];
$mahalsdorp=$_POST['mahalsdorp'];
$shahrp=$_POST['shahrp'];
$adamp=$_POST['adamp'];
$daragep=$_POST['daragep'];
$addressp=$_POST['addressp'];


//files validation and upload
$safheavalvadvomp = $_FILES['safheavalvadvomp'];
$filetype = basename($safheavalvadvomp['type']);
$certpath = '/image/safheavalvadvomp/' . $namep . '-' . $familyp . '.jpg';
if ($filetype == 'jpeg' || $filetype == 'jpg' || $filetype == 'png') {
    move_uploaded_file($safheavalvadvomp['tmp_name'], '..' . $certpath);
} else {
    echo "<script>
    window.alert('پسوندهای مجاز عکس: png,jpg,jpeg');
    history.back();
    </script>";
}

$profilep = $_FILES['profilep'];
$filetype = basename($profilep ['type']);
$perspath = '/image/profilep/' . $namep . '-' . $familyp . '.jpg';
if ($filetype == 'jpeg' || $filetype == 'jpg' || $filetype == 'png') {
    move_uploaded_file($profilep['tmp_name'], '..' . $perspath);
} else {
    echo "<script>
    window.alert('پسوندهای مجاز عکس: png,jpg,jpeg');
    history.back();
    </script>";
}
//login?true:false
$query = "SELECT * FROM personel WHERE codepersoneli = '$passwordp'";
$selectresult = $conn->query($query);
if($selectresult->fetch_assoc() > 0){
    echo "<script>
    window.alert('کاربر با کد ملی وارد شده قبلا در سایت ثبت نام کرده است');
    history.back();
    </script>";
}


//register
$profilep=$_POST['profilep'];
$query = "INSERT INTO personel (namepersonel,familypersonel,codepersoneli, email ,phone1,phone2,phonesabet,roze,mah,sal,mahalsdorshenasname,shahr,adamsopishine,daraje,safheavalvadvomeshenasname,imagepersoneli,address) VALUES ('$namep','$familyp','$passwordp','$emailp','$phonep1','$phonep2','$phonesabetp','$rozep','$mahp','$salp','$mahalsdorp','$shahrp','$adamp','$daragep','$safheavalvadvomp','$profilep','$addressp')";
$result = $conn->query($query);
if ($result) {
    echo "<script>
    window.alert('ثبت نام شما با موفقیت انجام شد.');
    window.location.href='../index.php';    
    </script>";
} else {
    echo "<script>
    window.alert('ثبت نام با خطا مواجه شد');
    history.back();
    </script>";
}



$conn->close();


