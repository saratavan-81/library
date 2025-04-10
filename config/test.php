<?php
//get inputs' values
    $name = $_POST['name'];
    $family = $_POST['family'];

    $nationalcode = $_POST['nationalcode'];
    $oldnationalcode = $_POST['oldnationalcode'];

    $password = $_POST['password'];
    $personalphoto = $_FILES['personalphoto'];

    //isset & !empty
    if (
        isset($nationalcode) && !empty($nationalcode)
    ) {

        //save pic with new name+family
        $perspath = 'img/personalphoto/admins/' . $name . '-' . $family . '.jpg';

        //normal data query
        $query = "UPDATE admins SET nationalcode='$nationalcode', name='$name', family='$family', personalphoto='$perspath' WHERE nationalcode='$oldnationalcode'";

        //get record for update session
        $query_show = "SELECT * FROM admins WHERE nationalcode='$oldnationalcode'";

        //defaullt
        $query_password = "";
        $query_pers = "";

        if (isset($password) && !empty($password)) { //new password

            //encrypt password
            $encrypted_password = md5($password);

            $query_password = "UPDATE admins SET password='$encrypted_password' WHERE nationalcode='$oldnationalcode'";
        }

        if ($personalphoto['size'] != 0) { //new photo

            //files validation
            $filetype = basename($personalphoto['type']);
            if (!($filetype == 'jpeg' || $filetype == 'jpg' || $filetype == 'png')) {
                die("<script>
            window.alert('پسوندهای مجاز عکس: png,jpg,jpeg');
            history.back();
            </script>");
            }

            move_uploaded_file($personalphoto['tmp_name'], '../img/personalphoto/admins/' . $name . '-' . $family . '.jpg');
            $perspath = 'img/personalphoto/admins/' . $name . '-' . $family . '.jpg';

            $query_pers = "UPDATE admins SET personalphoto='$perspath' WHERE nationalcode='$oldnationalcode";
        }


        //select for img path
        $query_select = "SELECT * FROM admins WHERE nationalcode='$oldnationalcode'";
        $result_select = $conn->query($query_select);

        $row = $result_select->fetch_array();

        //ادرس مبدا عکس 
        $perssource = '../img/personalphoto/admins/' . $row['name'] . '-' . $row['family'] . '.jpg';

        //ادرس مقصد عکس 
        $persdest = '../img/personalphoto/admins/' . $name . '-' . $family . '.jpg';

        //rename image to old name
        rename($perssource, $persdest);

        session_name('panel');
        session_start();


        $result = $conn->query($query);  //update normal data

        //get new infos
        $result_show = $conn->query($query_show);
        $row_show = $result_show->fetch_assoc();

        //ok | success
        $_SESSION['name'] = $row_show['name'];
        $_SESSION['family'] = $row_show['family'];
        echo "<script>
        window.alert('اطلاعات با موفقیت ویرایش شد');
        window.location.href='../admin-info.php'; 
        </script>";


        if (isset($query_password) && !empty($query_password)) {  //update password
            $conn->query($query_password);
            $result_show = $conn->query($query_show);
            $row_show = $result_show->fetch_assoc();
            //ok | success
            $_SESSION['password'] = $row_show['password'];
            echo "<script>
            window.alert('اطلاعات با موفقیت ویرایش شد');
            window.location.href='../admin-info.php'; 
            </script>";
        }



        if (!empty($query_pers)) {  //update pers img
            $conn->query($query_pers);
            $result_show = $conn->query($query_show);
            $row_show = $result_show->fetch_assoc();
            //ok | success
            $_SESSION['personalphoto'] = $row_show['personalphoto'];
            echo "<script>
            window.alert('اطلاعات با موفقیت ویرایش شد');
            window.location.href='../admin-info.php'; 
            </script>";
        }

        //session_name('panel');
        //session_start();
        //session_unset();
        //session_destroy();
        //session_reset();
    } else {
        die("<script>
            window.alert('تکمیل همه فیلدها اجباری است');
            history.back();
            </script>");
    }