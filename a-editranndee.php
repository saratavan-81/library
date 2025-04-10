<?php
include 'header/admin-header.php';
?>
  
    <div class="col-9">
  
    <br><br>

    <div class="container">
      <div class="row  justify-content-center">
          <div class="col-md-12">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <img src="./image/exclamation-circle-fill.svg" class="img-fluid" alt="..." height="25px" width="25px">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      برای ویرایش کردن اطلاعات  طبق قانون کتابخانه عمل کرده در غیر اینصورت اطلاعات راننده ثبت نخواهد شد. برای نمایش قانون فرم کتابخانه بر روی  <a href="#" class="alert-link"> قانون اطلاعات کتابخانه  </a> کلیک کنید 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    </div>
    </div>
    </div>
    <br><br>
<div class="editranandef">
    <form class="container needs-validation text-warning border border-warning border-3 rounded"novalidate>
      <div class="row ">
            <div class="form-floating mb-3 col-md-6 shadow ">
                <input type="text" class="form-control" id="a" placeholder="فاطمه" required>
                <label for="a">نام راننده </label>
                <div class="valid-feedback">
                 صحیح است
                </div>
              </div>
                  <br>
                  <div class="form-floating mb-3 col-md-6 shadow ">
                    <input type="text" class="form-control" id="b" placeholder="توان" required>
                    <label for="b">نام خانوادگی راننده </label>
                    <div class="valid-feedback">
                      صحیح است
                    </div>
                  </div>
                  </div>
                  <br>
                  <div class="row ">
                    <div class=" col-md-6 shadow ">
                  <label for="c" class="form-label">رمز عبور </label>
                  <input type="password" class="form-control" id="c" placeholder="12345678" required>
                  <div class="invalid-feedback">
                    لطفا رمز عبور را وارد کنید.
                  </div>
                  </div>
                  <br>
                  <div class="  col-md-6 shadow ">
                  <label for="lp" class="form-label">ایمیل راننده  </label>
                  <div class="input-group has-validation ">
                  <span class="input-group-text" id="basic-addon2">gmail.com@</span>
                  <input type="email" class="form-control" placeholder="ایمیل خود را وارد کنید"  aria-describedby="basic-addon2" id="lp"  required>
                  <div class="invalid-feedback">
                    لطفا ایمیل خود را وارد کنید.
                  </div>

</div>
                  </div>
                  </div>
                <br>

              <label for="e" class="form-label">تلفن همراه  </label>
              <div class="input-group   has-validation shadow ">
                <input type="email" class="form-control" placeholder="059061459" aria-label="Username" aria-describedby="basic-addon1" required>
                <input type="email" class="form-control" placeholder="059061459" aria-label="Username" aria-describedby="basic-addon1" id="e" required>
                <span class="input-group-text" id="basic-addon1">09</span>
                <div class="invalid-feedback">
                  لطفا شماره موبایل خود را وارد کنید.
                </div>
              </div>
                            <br>

            <label for="f" class="form-label">تلفن ثابت </label>
            <div class="input-group has-validation shadow ">
              <input type="email" class="form-control" placeholder="7261438" aria-label="Username" aria-describedby="basic-addon1" id="f" required>
              <span class="input-group-text" id="basic-addon1">3</span>
              <div class="invalid-feedback">
                لطفا شماره تلفن ثابت خود را وارد کنید.
              </div>

            </div>            <br>
            <div class="row ">
              <div class=" col-4   shadow ">
                <label for="222" class="form-label">روز</label>
                <input class="form-control" list="datalistOptions" id="222" placeholder="انتخاب روز..." required>
                <datalist id="datalistOptions">
                  <option value="1">
                  <option value="2 ">
                  <option value="3">
                  <option value=" 4">
                  <option value="5">
                    <option value="6">
                      <option value="7">
                        <option value="8">
                          <option value="9">
                            <option value="10">
                              <option value="11">
                                <option value="12">
                                  <option value="13">
                                    <option value="14">
                                      <option value="15">
                                        <option value="16">
                                          <option value="17">
                                            <option value="18">
                                              <option value="19">
                                                <option value="20">
                                                  <option value="21">
                                                    <option value="22">
                                                      <option value="23">
                                                        <option value="24">
                                                          <option value="25">
                                                            <option value="26">
                                                              <option value="27">
                                                                <option value=" 28">
                                                                  <option value="29">
                                                                    <option value="30">
                                                                      <option value="31">
                                                  
                </datalist>
                <div class="invalid-feedback">
                  لطفا روز تولد خود را وارد کنید.
                </div>

</div>
<div class=" col-4 shadow ">
<label for="111" class="form-label"> ماه  </label>
<input class="form-control" list="datalistOptions1" id="111" placeholder="انتخاب ماه..." required>
<datalist id="datalistOptions1">
  <option value="1">
  <option value="2 ">
  <option value="3">
  <option value=" 4">
  <option value="5">
    <option value="6">
      <option value="7">
        <option value="8">
          <option value="9">
            <option value="10">
              <option value="11">
                <option value="12">
                  

</datalist>
<div class="invalid-feedback">
  لطفا ماه تولد خود را وارد کنید.
</div>


          </div>
          <div class=" col-4  shadow ">
            <label for="333" class="form-label"> سال  </label>
            <input class="form-control" list="datalistOptions2" id="333" placeholder="انتخاب سال..." required>
            <datalist id="datalistOptions2">
              <option value="1320">
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
            
            
            
            
            
            </datalist>
            <div class="invalid-feedback">
              لطفا سال تولد خود را وارد کنید.
            </div>
            </div>
            </div>
            <br><br>
            <div class="row">
<div class="col col-md-6 shadow ">
          <label for="1333" class="form-label"> محل صدور شناسنامه</label>
          <input class="form-control" list="datalistOptions133" id="1333" placeholder="انتخاب محل صدور شناسنامه..." required>
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
<div class="col col-md-6 shadow ">
          <label for="exampleDataList1" class="form-label"> شهر / شهرستان  </label>
          <input class="form-control" list="datalistOptions155" id="exampleDataList1" placeholder="انتخاب شهر..." required>
          <datalist id="datalistOptions155">
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
            لطفا نام شهر خود را انتخاب کنید .
          </div>
          </div>
          </div>
          <br><br>
          <div class="col shadow ">
            <label for="exampleDataList1245" class="form-label"> نوع وسیله حمل و نقل</label>
            <input class="form-control" list="datalistOptions154" id="exampleDataList1245" placeholder="انتخاب وسیله حمل و نقل..." required>
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
        <label for="22" class="form-label">اپلود عکس صفحه اول و دوم  شناسنامه </label>
        <div class="input-group mb-3">
          <input type="file" class="form-control" id="22" multiple required>
          <label class="input-group-text" for="inputGroupFile01" >Upload</label>
          <div class="invalid-feedback">
    لطفا اسکن صفحه اول و دوم شناسنامه خود را  انتخاب کنید.
          </div>
</div>
        </div>
      <div class="col-md-6 shadow ">
        <label for="11" class="form-label">اپلود عکس راننده </label>
        <div class="input-group mb-3">
          <input type="file" class="form-control" id="11" multiple required>
          <label class="input-group-text" for="inputGroupFile01" >Upload</label>
          <div class="invalid-feedback">
            لطفا عکس خود را انتخاب کنید.
          </div>

        </div>      </div>
     
<br><br>
    <div class="mb-3 shadow ">
        <label for="o" class="form-label">ادرس منزل</label>
        <textarea class="form-control" id="o" rows="3" placeholder="ابتدای بلوار مدرس کوچه 59 فرعی 59/1/2 پلاک 270" ></textarea>
        <div class="invalid-feedback">
          لطفا ادرس منزل خود را خود را وارد کنید.
        </div>
      </div>
            </div>
      <div class="container">
        <div class="row text-black">
          <div class="col  bg-light  p-4  border shadow ">
            <div class="overflow-auto">
              <p> سایت <mark>سارا</mark>،سایت جامع مدیریت کتاب ها با همکاری کتابخانه سارا با <strong>هدف رفع مشکلات کتابخانه</strong>، به منظور پیاده سازی یک سیستم جامع ، تحت وب ، یکپارچه و متمرکز ،<u> مورد استفاده برای پرسنل کتابخانه و کاربران</u> با حداکثر ظرفیت کتاب ها با موضوعات مختلف ، طرح ریزی و پیاده سازی شده است ......................................................................................................................................................................................................................................................................................................................................................................................... </p></div>
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
      <div class="col-12 col-md-6 ps-6 justify-content-end">
        <button type="submit" class="btn btn-primary  rounded-pill btn-lg" data-bs-toggle="collapse" href="#collapseExample"id="liveToast">  ویرایش راننده</button>
        <div class="toast-container position-fixed bottom-0 start-0 p-4 ">
          <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header" dir="ltr">
              <img src="./image/p.png " class="rounded me-2" alt="..." height="40px" width="40px">
              <strong class="me-auto">تایید</strong>
              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
              Hello, world! This is a toast message.
            </div>
          </div>
        </div>
        <br><br>
        <div class="collapse" id="collapseExample">
          <div class="card card-body">
            اطلاعات شما با موفقیت ثبت شد.
          </div>
        </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      
      </div>
      
      
    </form>


    <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
     crossorigin="anonymous">
    </script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
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
        document.getElementById('liveToast').onclick = function () {
            var toastElList = [].slice.call(document.querySelectorAll('.toast'))
            var toastList = toastElList.map(function (toastEl) {
                return new bootstrap.Toast(toastEl, {
                    animation: true,
                    autohide: true,
                    delay: 3000
                })
            })
            toastList.forEach(function (toast) {
                toast.show();
            });
        };
    </script>
</body>
</html>