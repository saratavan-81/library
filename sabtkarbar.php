<?php
include_once('./header/admin-header.php')

?>


<div class="col-9  ">

    <br><br>

    <div class="container ">
        <div class="row  justify-content-center">
            <div class="col-md-12">
                 

                    <div class="modal fade" id="exampleModal99" tabindex="-1" aria-labelledby="exampleModalLabel99" aria-hidden="true" data-bs-backdrop="static">
                        <div class="modal-dialog modal-lg modal-dialog-centered  modal-dialog-scrollable  ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel99">قوانین اطلاعات کتابخانه</h5>
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

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>


    <div class="sabtp">

        <form action="config/registerkarbar.php" role="form" method="POST" enctype="multipart/form-data" class="p-5 container needs-validation textcolorp border border-warning border-3 rounded" novalidate>

            <div class="row ">
                <div class="  col-md-6 shadow ">
                    <label class="form-label"> نام کاربر </label>
                    <div class="input-group  has-validation ">
                        <input name="namekarbar" type="text" class="form-control" placeholder="نام..." required>
                        <div class="invalid-feedback">
                            لطفا نام را وارد کنید.
                        </div>

                    </div>
                </div>
                <br>
                <div class="  col-md-6 shadow ">
                    <label class="form-label"> نام خانوادگی کاربر </label>
                    <div class="input-group  has-validation ">
                        <input name="familykarbar" type="text" class="form-control" placeholder="نام خانوادگی... " required>
                        <div class="invalid-feedback">
                            لطفا نام خانوادگی را وارد کنید.
                        </div>

                    </div>
                </div>
            </div>
            <br>

            <div class="row ">
                <div class=" col-md-6 shadow ">
                    <label class="form-label">کد ملی </label>
                    <input name="codemeli" pattern='[0-9]{10}' type="password" class="form-control" placeholder="2284561231" required>
                    <div class="invalid-feedback">
                        لطفا کد پرسنل را وارد کنید.
                    </div>

                </div>
                <br>
                <div class="  col-md-6 shadow ">
                    <label class="form-label">ایمیل پرسنل </label>
                    <div class="input-group  has-validation ">
                        <input name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" type="email" class="form-control" placeholder="example@gmail.com" required>
                        <div class="invalid-feedback">
                            لطفا ایمیل را وارد کنید.
                        </div>

                    </div>
                </div>
            </div>
            <br>
            <div class=" shadow">
                <label class="form-label"> رمز عبور </label>
                <input name="password" pattern='[0-9]{10}' type="password" class="form-control" required>
                <div class="invalid-feedback">
                    لطفا رمز عبور را وارد کنید.
                </div>

            </div>

            <label class="form-label">تلفن همراه </label>
            <div class="input-group  has-validation shadow  ">
                <input name="phone1" pattern='[0-9]{9}' type="text" class="text-end form-control" placeholder="059061459" required>
                <span class="input-group-text">09</span>
                <div class="invalid-feedback">
                    لطفا شماره موبایل را وارد کنید.
                </div>
            </div>
            <br>

            <label class="form-label">تلفن ثابت </label>
            <div class="input-group has-validation  shadow ">
                <input name="phonesabet" pattern='[0-9]{7}' type="text" class="text-end form-control" placeholder="7245566" required>
                <span class="input-group-text">3</span>
                <div class="invalid-feedback">
                    لطفا شماره تلفن ثابت را وارد کنید.
                </div>
            </div> <br>

            <div class="row ">
                <div class=" col-4 shadow ">
                    <label class="form-label">روز</label>
                    <input name="roze" class="form-control" list="rozlist" placeholder="انتخاب روز..." required>
                    <datalist id="rozlist">
                        <?php for ($i = 1; $i <= 31; $i++) {
                            echo "<option value='$i'>";
                        } ?>
                    </datalist>
                    <div class="invalid-feedback">
                        لطفا روز تولد را وارد کنید.
                    </div>
                </div>
                <div class=" col-4 shadow ">
                    <label class="form-label"> ماه </label>
                    <input name="mah" class="form-control" list="mahlist" placeholder="انتخاب ماه..." required>
                    <datalist id="mahlist">
                        <?php for ($i = 1; $i <= 12; $i++) {
                            echo "<option value='$i'>";
                        } ?>
                    </datalist>
                    <div class="invalid-feedback">
                        لطفا ماه تولد را وارد کنید.
                    </div>


                </div>
                <div class=" col-4 shadow ">
                    <label class="form-label"> سال </label>
                    <input name="sal" class="form-control" list="sallist" placeholder="انتخاب سال..." required>
                    <datalist id="sallist">
                        <?php for ($i = 1320; $i <= 1401; $i++) {
                            echo "<option value='$i'>";
                        } ?>
                    </datalist>

                    <div class="invalid-feedback">
                        لطفا سال تولد را وارد کنید.
                    </div>
                </div>
            </div>
            <br><br>

            <div class="row">
                <div class=" col  shadow ">
                    <label class="form-label"> محل صدور شناسنامه</label>
                    <input name="mahalsdorshenasname" class="form-control" list="mahallist" placeholder="انتخاب محل صدور شناسنامه..." required>
                    <datalist id="mahallist">
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
                    </datalist>
                    <div class="invalid-feedback">
                        لطفا محل صدور شناسنامه را انتخاب کنید.
                    </div>
                </div>
                <br>

            </div>
            <br><br>

           
            <div class="row">

                <div class="col-md-6 shadow ">
                    <label class="form-label">اپلود عکس صفحه اول  شناسنامه </label>
                    <input name="shenk" type="file" class="form-control" required>
                    <div class="invalid-feedback">
                        لطفا اسکن صفحه اول شناسنامه را انتخاب کنید.
                    </div>
                </div>

                <div class="col-md-6 shadow ">
                    <label class="form-label">اپلود عکس کاربر </label>
                    <input name="persk" type="file" class="form-control" required>
                    <div class="invalid-feedback">
                        لطفا عکس کاربر را انتخاب کنید.
                    </div>
                </div>

                <br><br><br>

                <div class="mb-3 shadow ">
                    <label class="form-label">ادرس منزل</label>
                    <textarea name="address" class="form-control" rows="3" placeholder="..."></textarea>
                    <div class="invalid-feedback">
                        لطفا ادرس منزل را وارد کنید.
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row text-black">
                    <div class="col  bg-light  p-4  border shadow ">
                        <div class="overflow-auto">
                            <p> سایت <mark>کتاب یار</mark>،سایت جامع مدیریت کتاب ها با همکاری کتابخانه کتاب یار با <strong>هدف رفع مشکلات کتابخانه</strong>، به منظور پیاده سازی یک سیستم جامع ، تحت وب ، یکپارچه و متمرکز ،<u> مورد استفاده برای پرسنل کتابخانه و کاربران</u> با حداکثر ظرفیت کتاب ها با موضوعات مختلف ، طرح ریزی و پیاده سازی شده است </p>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" required>
                                <label class="form-check-label">
                                    قوانین را مطالعه کردم.
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br><br>

            <div class="col-12">
                <button type="submit" class="btn btn-primary rounded-pill btn-lg">ثبت</button>
            </div>

        </form>

    </div>

</div>



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

</body>

</html>
<!--
<div class="col-9  ">

  <br><br>
  <div class="container ">
    <div class="row  justify-content-center">
      <div class="col-md-12">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <img src="./image/exclamation-triangle-fill.svg" class="img-fluid" alt="..." height="25px" width="25px">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          برای وارد کردن اطلاعات طبق قانون کتابخانه عمل کرده در غیر اینصورت اطلاعات شما ثبت نخواهد شد. برای نمایش قانون فرم کتابخانه بر روی <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal99">قوانین اطلاعات کتابخانه
              </button> کلیک کنید
      

              <div class="modal fade" id="exampleModal99" tabindex="-1" aria-labelledby="exampleModalLabel99" aria-hidden="true" data-bs-backdrop="static">
                <div class="modal-dialog modal-lg modal-dialog-centered  modal-dialog-scrollable  ">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel99">قوانین اطلاعات کتابخانه</h5>
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

          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
    </div>
  </div>
  <br><br>

  <div class="sabtp">
    <form class="p-5 container  needs-validation textcolorp border border-warning border-3 rounded " method="POST" enctype="multipart/form-data" action="./config/registerpersonel.php" role="form"  novalidate >
      <div class="row ">
      <div class="  col-md-6 shadow ">
          <label for="lpp" class="form-label"> نام پرسنل </label>
          <div class="input-group  has-validation ">
            <input type="text" class="form-control" placeholder="نام..." aria-label="Recipient's username" aria-describedby="basic-addon2" id="lpp" required>
            <div class="invalid-feedback">
              لطفا نام پرسنل را وارد کنید.
            </div>

          </div>
        </div>
        <br>
        <div class="  col-md-6 shadow ">
          <label for="lpp" class="form-label"> نام خانوادگی پرسنل </label>
          <div class="input-group  has-validation ">
            <input type="text" class="form-control" placeholder="نام خانوادگی... " aria-label="Recipient's username" aria-describedby="basic-addon2" id="lpp" required>
            <div class="invalid-feedback">
              لطفا نام خانوادگی پرسنل را وارد کنید.
            </div>

          </div>
        </div>
      </div>
      <br>

      <div class="row ">
        <div class=" col-md-6 shadow ">
          <label for="cc" class="form-label">کد پرسنلی </label>
          <input type="password" class="form-control" id="cc" placeholder="12345678" required>
          <div class="invalid-feedback">
            لطفا کد پرسنل خود را وارد کنید.
          </div>

        </div>
        <br>
        <div class="  col-md-6 shadow ">
          <label for="lpp" class="form-label">ایمیل پرسنل </label>
          <div class="input-group  has-validation ">
            <input type="email" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2" id="lpp" required>
            <div class="invalid-feedback">
              لطفا ایمیل خود را وارد کنید.
            </div>

          </div>
        </div>
      </div>
      <br>

      <label for="ee" class="form-label">تلفن همراه </label>
      <div class="input-group  has-validation shadow  ">
        <input type="text" class="form-control" placeholder="059061459" required>
        <span class="input-group-text" id="basic-addon1">09</span>
        <div class="invalid-feedback">
          لطفا شماره موبایل خود را وارد کنید.
        </div>
      </div>
      <br>

      <label for="ff" class="form-label">تلفن ثابت </label>
      <div class="input-group has-validation  shadow ">
        <input type="text" class="form-control" placeholder="7261438" required>
        <span class="input-group-text" id="basic-addon1">3</span>
        <div class="invalid-feedback">
          لطفا شماره تلفن ثابت خود را وارد کنید.
        </div>
      </div> <br>

      <div class="row ">
        <div class=" col-4 shadow ">
          <label for="2222" class="form-label">روز</label>
          <input class="form-control" list="datalistOptions1" id="2222" placeholder="انتخاب روز..." required>
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
          <label for="1111" class="form-label"> ماه </label>
          <input class="form-control" list="datalistOptions2" id="1111" placeholder="انتخاب ماه..." required>
          <datalist id="datalistOptions2">
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
        <div class=" col-4 shadow ">
          <label for="333" class="form-label"> سال </label>
          <input class="form-control" list="datalistOptions3" id="333" placeholder="انتخاب سال..." required>
          <datalist id="datalistOptions3">
            <option value="1381">
            <option value="1382 ">
            <option value="1383">
            <option value=" 1384">
            




          </datalist>

          <div class="invalid-feedback">
            لطفا سال تولد خود را وارد کنید.
          </div>
        </div>
      </div>
      <br><br>

      <div class="row">
        <div class=" col  shadow ">
          <label for="exampleDataList1" class="form-label"> محل صدور شناسنامه</label>
          <input class="form-control" list="0" id="exampleDataList1" placeholder="انتخاب محل صدور شناسنامه..." required>
          <datalist id="0">
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





          </datalist>
          <div class="invalid-feedback">
            لطفا محل صدور شناسنامه خود را انتخاب کنید.
          </div>
        </div>
        <br>
      
      </div>
      <br><br>
      <div class="col shadow ">
        <label for="x0" class="form-label"> عدم سو پیشینه </label>
        <input class="form-control" list="x" id="x0" placeholder=" ..." required>
        <datalist id="x">
          <option value="بله">
          <option value="خیر ">
        </datalist>
        <div class="invalid-feedback">
          لطفا سو پیشنه ی خود را تعیین کنید.
        </div>

      </div>
      <br>
   
      <br>
      <div class="row">
        <div class="col-md-6 shadow ">
          <label for="q" class="form-label">اپلود عکس صفحه اول و دوم شناسنامه </label>
          <div class="input-group mb-3  ">
            <input type="file" class="form-control" id="q" multiple required>
            <label class="input-group-text" for="inputGroupFile01">Upload</label>
            <div class="invalid-feedback">
              لطفا اسکن صفحه اول و دوم شناسنامه خود را انتخاب کنید.
            </div>
          </div>
        </div>
        <div class="col-md-6 shadow ">
          <label for="qq" class="form-label">اپلود عکس پرسنل </label>
          <div class="input-group mb-3">
            <input type="file" class="form-control" id="qq" multiple required>
            <label class="input-group-text" for="inputGroupFile01">Upload</label>
            <div class="invalid-feedback">
              لطفا عکس خود را انتخاب کنید.
            </div>
          </div>
        </div>
        <br><br><br>

        <div class="mb-3 shadow ">
          <label for="oo" class="form-label">ادرس منزل</label>
          <textarea class="form-control" id="oo" rows="3" placeholder="ابتدای بلوار مدرس کوچه 59 فرعی 59/1/2 پلاک 270"></textarea>
          <div class="invalid-feedback">
            لطفا ادرس منزل خود را خود را وارد کنید.
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row text-black">
          <div class="col  bg-light  p-4  border shadow ">
            <div class="overflow-auto">
              <p> سایت <mark>سارا</mark>،سایت جامع مدیریت کتاب ها با همکاری کتابخانه سارا با <strong>هدف رفع مشکلات کتابخانه</strong>، به منظور پیاده سازی یک سیستم جامع ، تحت وب ، یکپارچه و متمرکز ،<u> مورد استفاده برای پرسنل کتابخانه و کاربران</u> با حداکثر ظرفیت کتاب ها با موضوعات مختلف ، طرح ریزی و پیاده سازی شده است ...................................................................................................................................................................................................................................................................................................................................................................................................... </p>
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
      </div>
        <br><br>

        <div class="col-12">
          <button type="submit" class="btn btn-primary rounded-pill btn-lg" data-bs-toggle="collapse" href="#collapseExample" id="liveToast">ثبت</button>
    
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
-->
<?php
include 'footer/a-footer.php';
?>
</body>

</html>