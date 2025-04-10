<?php

include 'dbname.php';

if (isset($_GET['delete'])) {

    $codebook = $_GET['delete'];

    $query = "DELETE FROM book WHERE codebook='$codebook'";
    $result = $conn->query($query);

    if ($result) {
        echo "<script>
        window.alert('کتاب حذف شد');
        </script>";
        header('Location: ../p-hamebook.php');
    } else {
        echo "<script>
        window.alert(' کتاب حذف نشد');
        </script>";
        header('Location: ../p-hamebook.php');
    }
}




