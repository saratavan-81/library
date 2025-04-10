<?php include './header/admin-header.php' ?>

<?php

include 'config/dbname.php';

if (isset($_GET['edit'])) {

    $codebook = $_GET['edit'];

    $query = "SELECT * FROM book WHERE codebook='$codebook'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {

        $row = $result->fetch_array();

        $namebook = $row['namebook'];
        $mozo = $row['mozo'];

        $codebook = $row['codebook'];
        $oldcodebook = $row['codebook'];

        $nevisande = $row['nevisande'];
        $salenteshar = $row['salenteshar'];
        $motrjem = $row['motrjem'];
        $jeld = $row['jeld'];
        $imagebook = $row['imagebook'];
?>


<div class="col-9 ms-5">
    <br><br>
    <div class="container">
        <div class="row  justify-content-center">
            <div class="col-md-12">
               
            </div>
        </div>
    </div>

    <div class="addbook container">

        <form class="p-5 container needs-validation text-primary border border-warning border-3 rounded" role="form" method="POST" action="config/updatebook.php" enctype="multipart/form-data" novalidate>

            <div class="row gap-3">

                <div class="mb-3 col shadow pb-3">
                    <label class="form-label">کد </label>
                    <input type="text" class="form-control" name="codebook" value="<?= $codebook ?>" required>
                    <input type="hidden" name="oldcodebook" value="<?= $oldcodebook ?>">
                </div>

                <div class="mb-3 col shadow pb-3">
                    <label class="form-label">نام </label>
                    <input type="text" class="form-control" name="namebook" value="<?= $namebook ?>" required>
                    <div class="invalid-feedback">
                        لطفا نام جدید کتاب را وارد کنید
                    </div>
                </div>

                <br><br>

                <div class=" col shadow  ">
                    <label class="form-label"> انتخاب موضوع</label>
                    <input class="form-control" list="datalistOptions213.1" name="mozo" value="<?= $mozo ?>" required>
                    <datalist id="datalistOptions213.1">
                        <option value="ادبیات و فرهنگ">
                        <option value="اجتماعی">
                        <option value="سیاسی">
                        <option value="داستان و رمان">
                        <option value="فلسفه و منطق">
                        <option value="روانشناسی">
                        <option value="مذهبی و دینی">
                        <option value="ریاضی">
                        <option value="فیزیک">
                        <option value="شیمی">
                        <option value="بازی و سرگرمی">
                        <option value="اشپزی">
                        <option value="ورزشی">
                    </datalist>
                    <div class="invalid-feedback">
                        لطفا موضوع جدید کتاب را وارد کنید.
                    </div>
                    <br>
                </div>



            </div>
            <br>
            <div class="row gap-3">

                <div class="mb-3 col shadow ">
                    <label class="form-label">نویسنده </label>
                    <input type="text" class="form-control" name="nevisande" value="<?= $nevisande ?>" required>
                    <div class="invalid-feedback">
                        لطفا نام جدید نویسنده کتاب را وارد کنید.
                    </div>
                </div>

                <br>

                <div class="mb-3 col shadow pb-3">
                    <label class="form-label">سال انتشار </label>
                    <input class="form-control" list="salentesharlist" name="salenteshar" value="<?= $salenteshar ?>" required>
                    <datalist id="salentesharlist">
                        <?php for ($i = 1401; $i >= 1300; $i--) {
                            echo "<option value='$i'>";
                        } ?>
                    </datalist>
                    <div class="invalid-feedback">
                        لطفا سال انتشار جدید کتاب را وارد کنید.
                    </div>
                </div>

                <br>

                <div class="mb-3 col shadow ">
                    <label class="form-label"> مترجم </label>
                    <input type="text" class="form-control" name="motrjem" value="<?= $motrjem ?>" required>
                    <div class="invalid-feedback">
                        لطفا نام مترجم جدید کتاب را وارد کنید.
                    </div>
                </div>

            </div>
            <br>


            <div class="row gap-3">

                <div class="mb-3 col shadow pb-3">
                    <label class="form-label">شماره چاپ </label>
                    <input type="number" class="form-control" name="jeld" value="<?= $jeld ?>" required>
                    <div class="invalid-feedback">
                        لطفا شماره چاپ جدید کتاب را وارد کنید.
                    </div>
                </div>

                <br>

                <div class="mb-3 col shadow pb-3">
                    <label class="form-label">اپلود تصویر جدید</label>
                    
                    <div class="input-group mb-3">

                        <input type="file" class="form-control" name="imagebook" value="<?= $imagebook ?>">
                        &nbsp;&nbsp;&nbsp;
                        <button type="button" data-bs-toggle="modal" data-bs-target="#imgmodal" class="btn btn-outline-secondary">تصویر فعلی</button>

                        <div class="modal fade" id="imgmodal" tabindex="-1" aria-labelledby="imgmodal" aria-hidden="true">
                            <div class="modal-dialog" style="max-width: fit-content;">
                                <div class="modal-content">
                                    <div class="modal-body p-0">
                                        <img src="<?= $imagebook ?>" width="400px" height="400px">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
                <div class="row gap-3 mt-4 pb-0">
                    <button type="submit" class="col-2 btn btn-primary">ویرایش اطلاعات</button>
                    <button type="button" class="col-2 btn btn-danger" onclick="javascript:history.back()"> بازگشت </button>
                </div>
        </form>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script>
        (function() {
            'use strict'

            var forms = document.querySelectorAll('.needs-validation')

            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>

<?php }
} else {
    die("<script>
    window.alert('لطفا کتابی را جهت ویرایش انتخاب کنید');
    window.location.href='p-hamebook.php';
    </script>");
}
?>

<?php
include 'footer/a-footer.php';
?>
</body>
