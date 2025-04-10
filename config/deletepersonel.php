<?php

include 'dbname.php';

if (isset($_GET['delete'])) {

    $codepersoneli = $_GET['delete'];

    $query = "DELETE FROM personel WHERE codepersoneli='$codepersoneli'";
    $result = $conn->query($query);

    if ($result) {
        echo "<script>
        window.alert('پرسنل حذف شد');
        </script>";
        header('Location: ../hame personel.aa.php');
    } else {
        echo "<script>
        window.alert(' پرسنل حذف نشد');
        </script>";
        header('Location: ../hame personel.aa.php');
    }
}




