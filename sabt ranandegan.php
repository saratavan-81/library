<?php
include_once('./header/admin-header.php')

?>

<div class="col-9">

  <br><br>

  <div class="container">
    <div class="row  justify-content-center">
      <div class="col-md-12">
       
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          <div class="modal fade" id="exampleModal999" tabindex="-1" aria-labelledby="exampleModalLabel999" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog modal-lg modal-dialog-centered  modal-dialog-scrollable text-black ">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel999">قوانین اطلاعات کتابخانه</h5>
                </div>
                <div class="modal-body">
                  <h6 class="fw-bold" style="color:#6610f2 ;"> مزایای کتابخوانی برای کودکان از نظر روانی:</h6>
                  کودکانی که از سنین کودکی با کتاب و کتابخوانی بزرگ می شوند دید وسیعی به زندگی دارند. کودکان به فضای کتابخانه در منزل خود عادت دارند و از این رو ذهن باز و خلاق تری دارند. کودکانی که جملات مختلفی از کتاب را می شنوند حس آرامش بیشتری دارند. بررسی ها نشان می دهد که این دسته از کودکان کمتر دچار شب ادراری شده و همینطور موضوع حرف زدن در خواب،هراس خوابی و ترس از تاریکی کودکان در این افراد برطرف می شود.
                  <br><br>
                  <h6 class="fw-bold" style="color:#6610f2 ;">مزایای کتابخوانی برای کودکان از نظر جسمی:</h6>
                  کتاب غذای روح است و وقتی روح سالم باشد جسم نیز در مسیر درستی پیش می رود. اینکه کودک از خوردن غذا امتناع می کند و بعد در کتاب خرس مورد علاقه خود را در حال خوردن غذا می بیند به صورت ناخودآگاه دست از لجبازی کودکانه بر می دارد، این در حالی است که اگر بارها به او می گفتید که غذا بخورد با شما لجبازی می کرد. به طور کلی کتاب و کتاب خوانی سبب می شود که کودک موقعیت خود را از نظر یادگیری به شکل اصولی دنبال کند.
                  <br><br>
                  <h6 class="fw-bold" style="color:#6610f2 ;">مزایای کتابخوانی برای کودکان از نظر رشد و شکوفایی و استعداد:</h6>
                  فواید کتاب خوانی برای کودکانی که در سن رشد هستند بسیار زیاد است. کودکان باید از سنین کودکی استعداد خود را پیدا کنند و کتاب کمک می کند تا این رویکرد شکل بگیرد. در واقع کتاب خوانی برای کودک سبب می شود که ایده های تازه را بشوند و با خلاقیت، خود را به جای کاراکترهای داخل کتاب بگذارد به این ترتیب می تواند فضای مختلفی را تجربه کند و این تجربه سبب گسترش یک استعداد عمیق در او می شود. کودکان دنیای پر از رنگ و طرح دارند و کتابخوانی برای کودکان سبب می شود تا طرح و رنگ مخصوص خود را به سادگی پیدا کنند.
                  <br><br>











                </div>

                <div class="modal-footer align-items-start justify-content-start d-flex">
                  <button type="submit" class="btn btn-warning  rounded-pill btn-lg " data-bs-toggle="modal" data-bs-target="#exampleModal" href="#collapseExample" id="liveToast" name="submit"> بازگشت</button>

                </div>


              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <br><br>
  <div class="sabtranandef">
    <form class="p-5 container needs-validation textranandecolor border border-warning border-3 rounded" action="./config/registerranande.php" role="form" method="POST" enctype="multipart/form-data" novalidate>
      <div class="row ">
        <div class=" col-md-6 shadow ">
          <label for="c" class="form-label">نام راننده </label>
          <input type="text" class="form-control" id="c" placeholder="نام..." name="nameranande" required>
          <div class="invalid-feedback">
            لطفا نام راننده را وارد کنید.
          </div>
        </div>
        <br>
        <div class=" col-md-6 shadow ">
          <label for="c" class="form-label"> نام خانوادگی راننده </label>
          <input type="text" class="form-control" id="c" placeholder="نام خانوادگی..." name="familyranande" required>
          <div class="invalid-feedback">
            لطفا نام خانوادگی راننده را وارد کنید.
          </div>
        </div>
      </div>
      <br>
      <br>
      <div class=" col shadow ">
          <label for="c1" class="form-label">کد ملی </label>
          <input type="password" class="form-control" id="c1" placeholder="نام..." name="codemeli" required>
          <div class="invalid-feedback">
            لطفا کد ملی راننده را وارد کنید.
          </div>
        </div>
<br><br>

      <label for="e" class="form-label">تلفن همراه </label>
      <div class="input-group   has-validation shadow ">
        <input type="text" class="form-control" placeholder="059061459" aria-label="Username" aria-describedby="basic-addon1" id="e" name="phoneranande" pattern='[0-9]{9}' required>
        <span class="input-group-text" id="basic-addon1">09</span>
        <div class="invalid-feedback">
          لطفا شماره موبایل خود را وارد کنید.
        </div>
      </div>
      <br>

      <label for="f" class="form-label">تلفن ثابت </label>
      <div class="input-group has-validation shadow ">
        <input type="text" class="form-control" placeholder="7261438" aria-label="Username" aria-describedby="basic-addon1" id="f" pattern='[0-9]{7}' name="phonesabet" required>
        <span class="input-group-text" id="basic-addon1">3</span>
        <div class="invalid-feedback">
          لطفا شماره تلفن ثابت خود را وارد کنید.
        </div>

      </div> <br>
      <div class="row ">
        <div class=" col-4   shadow ">
          <label for="222" class="form-label">روز</label>
          <input class="form-control" list="ranande-roz" id="222" placeholder="انتخاب روز..." name="roz" required>
          <datalist id="ranande-roz">
            <?php for ($i = 1; $i <= 31; $i++) {
              echo "<option value='$i'>";
            } ?>
          </datalist>
          <div class="invalid-feedback">
            لطفا روز تولد خود را وارد کنید.
          </div>

        </div>
        <div class=" col-4 shadow ">
          <label for="111" class="form-label"> ماه </label>
          <input class="form-control" list="ranande-mah" id="111" placeholder="انتخاب ماه..." name="mah" required>
          <datalist id="ranande-mah">
            <?php for ($i = 1; $i <= 12; $i++) {
              echo "<option value='$i'>";
            } ?>
          </datalist>
          <div class="invalid-feedback">
            لطفا ماه تولد خود را وارد کنید.
          </div>


        </div>
        <div class=" col-4  shadow ">
          <label for="333" class="form-label"> سال </label>
          <input class="form-control" list="ranande-sal" id="333" placeholder="انتخاب سال..." name="sal" required>
          <datalist id="ranande-sal">
          <?php for ($i = 1320; $i <= 1401; $i++) {
              echo "<option value='$i'>";
            } ?>
          </datalist>
          <div class="invalid-feedback">
            لطفا سال تولد خود را وارد کنید.
          </div>
        </div>
      </div>
      <br><br>
      <div class="row">
        <div class="col shadow ">
          <label for="1333" class="form-label"> محل صدور شناسنامه</label>
          <input class="form-control" list="datalistOptions133" id="1333" placeholder="انتخاب محل صدور شناسنامه..." name="mahalsdorshenasname" required>
          <datalist id="datalistOptions133">
            <option value="تهران">
            <option value="اصفهان ">
            <option value="شیراز">
            <option value=" بوشهر">
            <option value="یزد">
            <option value="کرمان">
            <option value="مشهد">
            <option value="کرج">
            <option value="ارومیه">
            <option value="سمنان">
            <option value="تبریز">
            <option value="بندرعباس">
            <option value="هرمز">
            <option value="قشم">
            <option value="رشت">
            <option value="کرمانشاه">
            <option value="ایلام">
            <option value="گیلان">
            <option value="همدان">
            <option value="زاهدان">
            <option value="اردبیل">
            <option value="قزوین">
            <option value="اراک">
            <option value="اسلامشهر">
            <option value="بهارستان">
            <option value="بابل">
            <option value="زنجان">
            <option value="خرم اباد">
            <option value="ساری">
            <option value="سنندج">
            <option value="گرگان">
            <option value="نیشابور">
            <option value="دزفول">
            <option value="امل">
            <option value="ملارد">
            <option value="کاشان">
            <option value="پاکدشت">
            <option value="کازرون">
            <option value="لار">
            <option value="مرودشت">
            <option value="جهرم">
            <option value="ابادان">
            <option value="البرز">
            <option value="زرقان">
            <option value="میناب">
            <option value="استارا">
            <option value="لرستان">











          </datalist>
          <div class="invalid-feedback">
            لطفا محل صدور شناسنامه خود را انتخاب کنید.
          </div>
        </div>
        <br>

      </div>
      <br><br>
      <div class="col shadow ">
        <label for="exampleDataList1245" class="form-label"> نوع وسیله حمل و نقل</label>
        <input class="form-control" list="datalistOptions154" id="exampleDataList1245" placeholder="انتخاب وسیله حمل و نقل..." name="car" required>
        <datalist id="datalistOptions154">
          <option value="موتور">
          <option value="پراید ">
          <option value="پژو">
          <option value=" 206">
          <option value="ساینا">
          <option value="سمند">
          <option value="وانت">
          <option value="زامیاد">
          <option value="پارس">
          <option value="دنا">
          <option value="تیبا">
          <option value="هاچ بگ">
          <option value="رنو">
          <option value="405">






        </datalist>
        <div class="invalid-feedback">
          لطفا نام شهر خود را انتخاب کنید .
        </div>
      </div>
      <br><br>
      <div class="row">
        <div class="col-md-6 shadow ">
          <label for="22" class="form-label">اپلود عکس صفحه اول شناسنامه </label>
          <div class="input-group mb-3">
            <input type="file" class="form-control" id="22" name="sheen" multiple required>
            <label class="input-group-text" for="inputGroupFile01">Upload</label>
            <div class="invalid-feedback">
              لطفا اسکن صفحه اول و دوم شناسنامه خود را انتخاب کنید.
            </div>
          </div>
        </div>
        <div class="col-md-6 shadow ">
          <label for="11" class="form-label">اپلود عکس راننده </label>
          <div class="input-group mb-3">
            <input type="file" class="form-control" id="11" name="perss" multiple required>
            <label class="input-group-text" for="inputGroupFile01">Upload</label>
            <div class="invalid-feedback">
              لطفا عکس خود را انتخاب کنید.
            </div>

          </div>
        </div>

        <br><br>
        <div class="mb-3 shadow ">
          <label for="o" class="form-label">ادرس منزل</label>
          <textarea class="form-control" id="o" rows="3" placeholder="ابتدای بلوار مدرس کوچه 59 فرعی 59/1/2 پلاک 270" name="address" required></textarea>
          <div class="invalid-feedback">
            لطفا ادرس منزل خود را خود را وارد کنید.
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row text-black">
          <div class="col  bg-light  p-4  border shadow ">
            <div class="overflow-auto" style="height: 100px; ">
              <p> سایت <mark>کتاب یار</mark>،سایت جامع مدیریت کتاب ها با همکاری کتابخانه کتاب یار با <strong>هدف رفع مشکلات کتابخانه</strong>، به منظور پیاده سازی یک سیستم جامع ، تحت وب ، یکپارچه و متمرکز ،<u> مورد استفاده برای پرسنل کتابخانه و کاربران</u> با حداکثر ظرفیت کتاب ها با موضوعات مختلف ، طرح ریزی و پیاده سازی شده است  </p>
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                <label class="form-check-label" for="gridCheck">
                  قوانین را مطالعه کردم.
                </label>
              </div>
            </div>
          </div>
        </div>



        <br><br>
        <div class="col-12">
          <button type="submit" class="btn btn-primary  rounded-pill btn-lg" > ثبت </button>
        </div>
      </div>
  </div>
</div>

</div>


</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
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
<script>
  document.getElementById('liveToast').onclick = function() {
    var toastElList = [].slice.call(document.querySelectorAll('.toast'))
    var toastList = toastElList.map(function(toastEl) {
      return new bootstrap.Toast(toastEl, {
        animation: true,
        autohide: true,
        delay: 3000
      })
    })
    toastList.forEach(function(toast) {
      toast.show();
    });
  };
</script>
<?php
include 'footer/a-footer.php';
?>
</body>

</html>