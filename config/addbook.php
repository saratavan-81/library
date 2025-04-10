<?php

include 'dbname.php';

$codebook = $_POST['codebook'];
$namebook = $_POST['namebook'];
$mozo = $_POST['mozo'];
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


    $sql = "INSERT INTO book (namebook,mozo,codebook,nevisande,salenteshar,motrjem,jeld,imagebook) VALUES ('$namebook','$mozo','$codebook','$nevisande','$salenteshar','$motrjem','$jeld','$pathimagebook')";
    $result = $conn->query($sql);
    if ($result) {
        move_uploaded_file($imagebook['tmp_name'], '../image/book/' . $namebook . '.jpg');
        die("<script>
        window.alert('کتاب با موفقیت اضافه شد');
        window.location.href='../p-addbook.php';
        </script>");
    } else {
        die("<script>
        window.alert(' کتاب اضافه نشد');
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
