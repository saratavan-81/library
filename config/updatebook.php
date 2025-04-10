<?php

include 'dbname.php';

$namebook = $_POST['namebook'];
$mozo = $_POST['mozo'];
$codebook = $_POST['codebook'];
$oldcodebook = $_POST["oldcodebook"];
$nevisande = $_POST['nevisande'];
$salenteshar = $_POST['salenteshar'];
$motrjem = $_POST['motrjem'];
$jeld = $_POST['jeld'];
$imagebook = $_FILES['imagebook'];


if (
    isset($codebook) && !empty($codebook) &&
    isset($namebook) && !empty($namebook) &&
    isset($mozo) && !empty($mozo) &&
    isset($nevisande) && !empty($nevisande) &&
    isset($salenteshar) && !empty($salenteshar) &&
    isset($motrjem) && !empty($motrjem) &&
    isset($jeld) && !empty($jeld)

) {

    $pathimagebook = 'image/book/' . $namebook . '.jpg';

    if ($codebook == $oldcodebook) {
        $query = "UPDATE book SET namebook='$namebook', mozo='$mozo', nevisande='$nevisande', salenteshar='$salenteshar', motrjem='$motrjem', jeld='$jeld', imagebook='$pathimagebook' WHERE codebook='$oldcodebook' ";
    } else {
        $result_duplicate = $conn->query("SELECT * FROM book WHERE codebook='$codebook'");
        if ($result_duplicate->num_rows > 0) {
            die("<script>
            window.alert('کتابی با این کد قبلا در سایت ثبت شده است');
            window.location.href='../hamebook.p.php'; 
            </script>");
        }
        $query = "UPDATE book SET namebook='$namebook', mozo='$mozo', nevisande='$nevisande', salenteshar='$salenteshar', motrjem='$motrjem', jeld='$jeld', imagebook='$pathimagebook', codebook='$codebook' WHERE codebook='$oldcodebook' ";
    }

    $query_pers = "";

    if ($imagebook['size'] != 0) {

        $filetype = basename($imagebook['type']);
        if (!($filetype == 'jpeg' || $filetype == 'jpg' || $filetype == 'png')) {
            die("<script>
            window.alert('لطفا تصاویر را با پسوند jpg و یا png اپلود کنید');
            history.back();
            </script>");
        }

        move_uploaded_file($imagebook['tmp_name'], '../image/book/' . $namebook . '.jpg');
        $pathimagebook = 'image/book/' . $namebook . '.jpg';

        $query_pers = "UPDATE book SET imagebook='$pathimagebook' WHERE codebook='$oldcodebook'";
    }

    $query_select = "SELECT * FROM book WHERE codebook='$oldcodebook'";
    $result_select = $conn->query($query_select);

    $row = $result_select->fetch_array();

    $perssource = '../image/book/' . $row['namebook'] . '.jpg';

    $persdest = '../image/book/' . $namebook . '.jpg';

    rename($perssource, $persdest);

    $result = $conn->query($query);

    die("<script>
    window.alert('کتاب با موفقیت ویرایش شد');
    window.location.href='../hame bookaa.php'; 
    </script>");


    if (!empty($query_pers)) {
        $conn->query($query_pers);
        die("<script>
        window.alert('کتاب با موفقیت ویرایش شد');
        window.location.href='../hame bookaa.php'; 
        </script>");
    }
} else {
    die("<script>
    window.alert('لطفا فیلد ها را به درستی تکمیل  کنید');
    history.back();
    </script>");
}


$conn->close();
