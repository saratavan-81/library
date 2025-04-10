<?php

include 'dbname.php';

if (isset($_GET['delete'])) {

    $codemeli = $_GET['delete'];

    $query = "DELETE FROM ranande WHERE codemelii='$codemeli'";
    $result = $conn->query($query);

    if ($result) {
        echo "<script>
        window.alert('راننده حذف شد');
        </script>";
        header('Location: ../hame ranandegan.php');
    } else {
        echo "<script>
        window.alert(' راننده حذف نشد');
        </script>";
        header('Location: ../hame ranandegan.php');
    }
}




