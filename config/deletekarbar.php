<?php

include 'dbname.php';

if (isset($_GET['delete'])) {

    $codemeli = $_GET['delete'];

    $query = "DELETE FROM karbar WHERE codemeli='$codemeli'";
    $result = $conn->query($query);

    if ($result) {
        echo "<script>
        window.alert('کاربر حذف شد');
        </script>";
        header('Location: ../hame karbarana.php');
    } else {
        echo "<script>
        window.alert(' کاربر حذف نشد');
        </script>";
        header('Location: ../hame karbarana.php');
    }
}




