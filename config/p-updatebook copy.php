<?php

include 'dbname.php';

$namebook = $_POST['namebook'];
$mozo = $_POST['mozo'];
$codebook = $_POST['codebook'];
$oldcodebook=$_POST["oldcodebook"];
$nevisande = $_POST['nevisande'];
$salenteshar = $_POST['salenteshar'];
$motrjem = $_POST['motrjem'];
$jeld = $_POST['jeld'];


if (
    isset($codebook) && !empty($codebook) &&
    isset($namebook) && !empty($namebook) &&
    isset($mozo) && !empty($mozo) &&
    isset($nevisande) && !empty($nevisande) &&
    isset($salenteshar) && !empty($salenteshar) &&
    isset($motrjem) && !empty($motrjem) &&
    isset($jeld) && !empty($jeld)

) {

    $pathimagebook = 'image/book/' . $namebook . '.' . '.jpg';



    $query = "UPDATE book SET namebook='$namebook', mozo='$mozo', family='$nevisande', nevisande='$perspath',salenteshar='$salenteshar',motrjem='$motrjem',jeld='$jeld',imagebook='$imagebook',codebook='$codebook' WHERE codebook='$oldcodebook'";

    $query_show = "SELECT * FROM book WHERE codebook='$codebook'";

    $query_code = "";
    $query_pers = "";




   $query = "SELECT * FROM book WHERE namebook = '$namebook' OR codebook = '$codebook'";
    $selectresult = $conn->query($query);
   if ($selectresult->fetch_assoc() > 0) {
        die("<script>
      window.alert('این کتاب قبلا در سایت ثبت شده است');
      history.back();
      </script>");
    }

    $imagebook = $_FILES['imagebook'];
    $filetype = basename($imagebook['type']);
    $pathimagebook = 'image/book/' . $namebook . '.jpg';
    if (!($filetype == 'jpeg' || $filetype == 'jpg' || $filetype == 'png')) {
        die("<script>
        window.alert('لطفا تصاویر را با پسوند jpg و یا png اپلود کنید');
        history.back();
        </script>");
    }

    $queryq = "UPDATE book SET namebook='$namebook', mozo='$mozo', nevisande='$nevisande', salenteshar='$salenteshar', motrjem='$motrjem', jeld='$jeld', imagebook='$pathimagebook' ,codebook='$codebook' WHERE codebook='$oldcodebook' ";
    $result = $conn->query($queryq);
    if ($result) {
        move_uploaded_file($imagebook['tmp_name'], '../image/book/' . $namebook . '.jpg');
        die ("<script>
                window.alert('کتاب با موفقیت ویرایش شد');
                window.location.href='../hamebook.p.php';
                </script>");
    } else {
        die ("<script>
                window.alert('کتاب ویرایش نشد');
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
