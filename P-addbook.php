<?php
include 'header/personel-header.php';
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

    <form class="p-5 container needs-validation text-primary border border-warning border-3 rounded" role="form" method="POST" enctype="multipart/form-data" action="./config/pp-addbook.php" novalidate>

      <div class="row gap-3">

        <div class="mb-3 col shadow pb-3">
          <label class="form-label">کد </label>
          <input type="text" class="form-control" name="codebook" required>
        </div>

        <div class="mb-3 col shadow pb-3">
          <label class="form-label">نام </label>
          <input type="text" class="form-control" name="namebook" required>
          <div class="invalid-feedback">
            لطفا نام کتاب را وارد کنید
          </div>
        </div>

        <br><br>

        <div class=" col shadow  ">
          <label class="form-label"> انتخاب موضوع</label>
          <input class="form-control" list="datalistOptions213.1" name="mozo" multiple required>
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
            لطفا موضوع کتاب را وارد کنید.
          </div>
          <br>
        </div>



      </div>
      <br>
      <div class="row gap-3">

        <div class="mb-3 col shadow ">
          <label class="form-label">نویسنده </label>
          <input type="text" class="form-control" name="nevisande" required>
          <div class="invalid-feedback">
            لطفا نام نویسنده کتاب را وارد کنید.
          </div>
        </div>

        <br>

        <div class="mb-3 col shadow pb-3">
          <label class="form-label">سال انتشار </label>
          <input class="form-control" list="salentesharlist" name="salenteshar" required>
          <datalist id="salentesharlist">
            <?php for ($i = 1401; $i >= 1300; $i--) {
              echo "<option value='$i'>";
            } ?>
          </datalist>
          <div class="invalid-feedback">
            لطفا سال انتشار کتاب را وارد کنید.
          </div>
        </div>

        <br>

        <div class="mb-3 col shadow ">
          <label class="form-label"> مترجم </label>
          <input type="text" class="form-control" name="motrjem" required>
          <div class="invalid-feedback">
            لطفا نام مترجم کتاب را وارد کنید.
          </div>
        </div>

      </div>
      <br>
      <div class="row gap-3">

        <div class="mb-3 col shadow pb-3">
          <label class="form-label">شماره چاپ </label>
          <input type="number" class="form-control" name="jeld" required>
          <div class="invalid-feedback">
            لطفا شماره چاپ کتاب را وارد کنید.
          </div>
        </div>

        <br>

        <div class="mb-3 col shadow pb-3">
          <label class="form-label">اپلود تصویر کتاب</label>
          <div class="input-group mb-3">
            <input type="file" class="form-control" name="imagebook" required>
          </div>
        </div>

        <div class="row gap-3 mt-4 pb-0">
          <button type="submit" class="col-2 btn btn-primary"> افزودن </button>
        </div>

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
                              <?php
include 'footer/P-footer.php';
?>
  </body>

  </html>