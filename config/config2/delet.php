<?php
$localhost = "localhost";
$namedb = "root";
$passworddb = "";
$db = "projectwebtavan";

try {
    $conn = new mysqli($localhost, $namedb, $passworddb, $db);
    $conn->set_charset('utf8');
} catch (\Throwable $th) {
    echo "<script>
    window.alert('خطا در اتصال به دیتابیس');
    history.back();
    </script>";
}
if (isset($_POST['deletedcode'])) {
    $codebook = $_POST['deletedcode'];
    $sql = "delete from book where codebook='$codebook' ";
    $result = $conn->query($sql);
    //$result=mysqli_query($conn,$sql);
    if ($result) {
        echo "<script>
        window.alert('کتاب حذف شد');
        history.back();
    
        </script>";
    } else {
        echo "<script>
        window.alert(' کتاب حذف نشد');
        history.back();
        </script>";
    }
}
