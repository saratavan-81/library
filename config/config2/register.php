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
$name=$_POST['name'];
$family=$_POST['family'];
$password=$_POST['password'];
$email=$_POST['email'];
$phone1='09' . $_POST['phone1'];
$phone2='09' . $_POST['phone2'];
$phonesabet= '3' . $_POST['phonesabet'];
$codemeli=$_POST['codemeli'];
$roze=$_POST['roze'];
$mah=$_POST['mah'];
$sal=$_POST['sal'];
$mahalsdorshenasname=$_POST['mahalsdorshenasname'];
$shahr=$_POST['shahr'];
$address=$_POST['address'];


//files validation and upload
$safheavalvadvomshenasname = $_FILES['safheavalvadvomshenasname'];
$filetype = basename($safheavalvadvomshenasname['type']);
$certpath = '/image/safheavalvadvomshenasname/' . $name . '-' . $family . '.jpg';
if ($filetype == 'jpeg' || $filetype == 'jpg' || $filetype == 'png') {
    move_uploaded_file($safheavalvadvomshenasname['tmp_name'], '..' . $certpath);
} else {
    echo "<script>
    window.alert('پسوندهای مجاز عکس: png,jpg,jpeg');
    history.back();
    </script>";
}

$imagekarbar = $_FILES['imagekarbar'];
$filetype = basename($imagekarbar['type']);
$perspath = '/image/imagekarbar/' . $name . '-' . $family . '.jpg';
if ($filetype == 'jpeg' || $filetype == 'jpg' || $filetype == 'png') {
    move_uploaded_file($imagekarbar['tmp_name'], '..' . $perspath);
} else {
    echo "<script>
    window.alert('پسوندهای مجاز عکس: png,jpg,jpeg');
    history.back();
    </script>";
}
//login?true:false
$query = "SELECT * FROM karbar WHERE codemeli = '$codemeli'";
$selectresult = $conn->query($query);
if($selectresult->fetch_assoc() > 0){
    echo "<script>
    window.alert('کاربر با کد ملی وارد شده قبلا در سایت ثبت نام کرده است');
    history.back();
    </script>";
}


//register
$query = "INSERT INTO karbar (namekarbar,familykarbar,password, email ,phone1,phone2,phonesabet,roze,mah,sal,mahalsdorshenasname,shahr,safheavalvadvomshenasname,imagekarbar,address,codemeli) VALUES ('$name','$family','$password','$email','$phone1','$phone2','$phonesabet','$roze','$mah','$sal','$mahalsdorshenasname','$shahr','$safheavalvadvomshenasname','$imagekarbar','$address','$codemeli')";
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


