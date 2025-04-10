<?php
session_start();
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sara</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">

  <link rel="stylesheet" href="./style/style.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

  <link rel="stylesheet" href="../assest/css/kamadatepicker.min.css">

       <link rel="stylesheet" href="../style/font.css">

</head>

<body>
  <header class="shadow ">
    <nav class="navbar navbar-expand-lg  " style="background-color: #240351;">
      <div class="container">
        <img src="./image/141.svg" alt="" width="50" height="50" class="d-inline-block align-text-top">

        <a class="navbar-brand " href="#" style="color: white">bookstor</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          

              <?php
              if(!empty($_SESSION["login"])){
                  ?>
                  <li class="nav-item dropdown">
                      <a class="nav-link active dropdown-toggle" aria-current="page" href="#" data-bs-toggle="dropdown" style="color: white"><?php echo $_SESSION["name"]." ".$_SESSION["family"]; ?></a>

                      <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item " href="config/logout.php">خروج</a></li>
                      </ul>
                  </li>
              <?php
              }else{
              ?>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle  " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" data-bs-offset="10,20" style="color: white">
                ورود
              </a>
              <form class="dropdown-menu p-4 text-primary border border-warning border-3 rounded" action="config/login.php" method="POST" style="width: 300px;">
                <div class="mb-3 ">
                  <div class="form-floating  ">
                    <input type="text" class="form-control shadow" id="sara" placeholder="فاطمه" required name="namekarbarr">
                    <label for="sara"> نام </label>
                  </div>
                </div>

                <div class="mb-3">
                  <div class="form-floating  ">
                    <input type="text" class="form-control shadow" id="sara" placeholder="فاطمه" required name="passwordd">
                    <label for="sara"> رمز عبور </label>
                  </div>
                </div>
                
                <div class="row">
                  <div class="form-floating mb-6 col-md-6  ">
                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal">
                      ورود
                    </button>
                  </div>
                </div>

                <div class="dropdown-divider"></div>
                حساب کاربری ندارید؟ <span class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">ثبت نام</span>

              </form>
            </li>
          
            <li class="nav-item">
              <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color: white">
                ثبت نام
              </button>

              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
                <div class="modal-dialog modal-lg modal-dialog-centered  modal-dialog-scrollable  ">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel"> ثبت نام کاربران </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">


                      
                    <form class=" navbar-nav-scroll   container needs-validation  rounded  " style="--bs-scroll-height: 3000px;" role="form" action="config/registeruser.php" method="POST" enctype="multipart/form-data" novalidate>
                       
                    <div class="row ">
                          <div class=" col-md-6 shadow ">
                            <label for="c" class="form-label"> نام کاربر </label>
                            <input type="text" class="form-control" id="c" placeholder="فاطمه" required name="name">
                            <div class="invalid-feedback">
                              لطفا رمز عبور را وارد کنید.
                            </div>
                          </div>
                          <br>
                          <div class="  col-md-6 shadow ">
                            <label for="lp" class="form-label">نام خانوادگی کاربر </label>
                            <div class="input-group has-validation ">
                              <input type="text" class="form-control" placeholder="توان"   required name="family">
                              <div class="invalid-feedback">
                                لطفا ایمیل خود را وارد کنید.
                              </div>

                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="row ">
                          <div class=" col-md-6 shadow ">
                            <label for="c" class="form-label">رمز عبور </label>
                            <input type="password"pattern='[0-9]{10}' class="form-control" id="c" placeholder="1234567894" required name="password">
                            <div class="invalid-feedback">
                              لطفا رمز عبور را وارد کنید.
                            </div>
                          </div>
                          <br>
                          <div class="  col-md-6 shadow ">
                            <label for="lp" class="form-label">ایمیل کاربر </label>
                            <div class="input-group has-validation ">
                              <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" placeholder="saratavan81@gmail.com" aria-label="Recipient's username" aria-describedby="basic-addon2" id="lp" required name="email">
                              <div class="invalid-feedback">
                                لطفا ایمیل خود را وارد کنید.
                              </div>

                            </div>
                          </div>
                        </div>
                        <br>

                        <label for="e" class="form-label">تلفن همراه </label>
                        <div class="input-group   has-validation shadow ">
                          <input type="text" pattern='[0-9]{9}' class="form-control" placeholder="059061459" aria-label="Username" aria-describedby="basic-addon1" required name="phone1">
                          <span class="input-group-text" id="basic-addon1">09</span>
                          <div class="invalid-feedback">
                            لطفا شماره موبایل خود را وارد کنید.
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-6 shadow">
                            <label for="f" class="form-label">تلفن ثابت </label>
                            <div class="input-group has-validation shadow ">
                              <input type="text" pattern='[0-9]{7}' class="form-control" placeholder="7261438" aria-label="Username" aria-describedby="basic-addon1" id="f" required name="phonesabet">
                              <span class="input-group-text" id="basic-addon1">3</span>
                              <div class="invalid-feedback">
                                لطفا شماره تلفن ثابت خود را وارد کنید.
                              </div>

                            </div> <br>
                          </div>
                          <div class="col-6 shadow">
                            <label for="f" class="form-label"> کد ملی </label>
                            <div class="input-group has-validation shadow ">
                              <input type="text" class="form-control" placeholder="2283434726" aria-label="Username" aria-describedby="basic-addon1" id="f" required name="codemeli">
                              <div class="invalid-feedback">
                                لطفا کد ملی خود را وارد کنید.
                              </div>

                            </div> <br>
                          </div>
                        </div>
                        <div class="row ">
                          <div class=" col-4   shadow ">
                            <label for="222" class="form-label">روز</label>
                            <input class="form-control" list="datalistOptions" id="222" placeholder="انتخاب روز..." required name="roze">
                            <datalist id="datalistOptions">
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
                            <input class="form-control" list="datalistOptions1" id="111" placeholder="انتخاب ماه..." required name="mah">
                            <datalist id="datalistOptions1">
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
                            <input class="form-control" list="datalistOptions2" id="333" placeholder="انتخاب سال..." required name="sal">
                            <datalist id="datalistOptions2">
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
         
                        <div class="  shadow ">
                            <label for="sabz" class="form-label"> تاریخ اعتبار عضویت </label>
                            <input type="text" name="date" class="form-control" id="sabz" required  >
                            <div class="invalid-feedback">
                              لطفا رمز عبور را وارد کنید.
                            </div>
                          </div>
                        <br><br>
                        <div class="row">
                          <div class="col shadow ">
                            <label for="369" class="form-label"> محل صدور شناسنامه</label>
                            <input class="form-control" list="datalistOptions369" id="369" placeholder="انتخاب محل صدور شناسنامه..." required name="mahalsdorshenasname">
                            <datalist id="datalistOptions369">
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
                        <div class="row">
                          <div class="col-md-6 shadow ">
                            <label for="22" class="form-label">اپلود عکس صفحه اول شناسنامه </label>
                            <div class="input-group mb-3">
                              <input type="file" class="form-control" id="22" multiple required name="safheavalvadvomshenasname">
                              <label class="input-group-text" for="inputGroupFile01">Upload</label>
                              <div class="invalid-feedback">
                                لطفا اسکن صفحه اول و دوم شناسنامه خود را انتخاب کنید.
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 shadow ">
                            <label for="11" class="form-label">اپلود عکس کاربر </label>
                            <div class="input-group mb-3">
                              <input type="file" class="form-control" id="11" multiple required name="imagekarbar">
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
                              <div class="overflow-auto">
                                <p> سایت <mark>کتاب یار</mark>،سایت جامع مدیریت کتاب ها با همکاری کتابخانه کتاب یار با <strong>هدف رفع مشکلات کتابخانه</strong>، به منظور پیاده سازی یک سیستم جامع ، تحت وب ، یکپارچه و متمرکز ،<u> مورد استفاده برای پرسنل کتابخانه و کاربران</u> با حداکثر ظرفیت کتاب ها با موضوعات مختلف ، طرح ریزی و پیاده سازی شده است . </p>
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
                        <br><br><br><br>
                        <div class="col-12 col-md-6 ps-6 justify-content-end">
                          <button type="submit" class="btn btn-primary  rounded-pill btn-lg"> ثبت</button>
                          <button type="button" class="btn btn-secondary   rounded-pill" data-bs-dismiss="modal">بستن</button>

                          <!-- <div class="toast-container position-fixed bottom-0 start-0 p-3">
                              <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header " dir="ltr">
                                  <img src="./image/p.png" class="rounded me-2" alt="..." height="40px" width="40px">
                                  <strong class="me-auto">Bootstrap</strong>
                                  <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                  Hello, world! This is a toast message.
                                </div>
                              </div>
                            </div> -->

                          <br><br>
                          <!-- <div class="collapse" id="collapseExample">
                              <div class="card card-body">
                                اطلاعات شما با موفقیت ثبت شد.
                              </div>
                            </div> -->
                        </div>
                    </div>
                  </div>

                </div>


                </form>
                <br><br><br><br>
                  <?php
                  }
                  ?>





              </div>
        </div>
      </div>
    </nav>


    </div>

    </div>
    </div>
    </div>


    </li>
    </ul>

    </div>
    </div>
    </nav>
  </header>

  </body>
  <script src="../assest/js/jquery.js"></script>
  <script src="../assest/js/kamadatepicker.min.js">
 
</script>
<script>
kamaDatepicker('sabz');
</script>
</html>