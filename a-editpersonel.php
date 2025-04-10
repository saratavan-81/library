<?php include './header/admin-header.php'; ?>

<?php

include 'config/dbname.php';

if (isset($_GET['edit'])) {

    $codepersoneli = $_GET['edit'];

    $query = "SELECT * FROM personel WHERE codepersoneli ='$codepersoneli'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {

        $row = $result->fetch_array();

        $namepersonel = $row['namepersonel'];
        $familypersonel = $row['familypersonel'];

        $codepersoneli = $row['codepersoneli'];
        $oldcodepersoneli = $row['codepersoneli'];

        $email = $row['email'];
        $phone1 =  $row['phone1'];
        $phonesabet = $row['phonesabet'];
        $roze = $row['roze'];
        $mah = $row['mah'];
        $sal = $row['sal'];
        $mahalsdorshenasname = $row['mahalsdorshenasname'];
        $adamsopishine = $row['adamsopishine'];
        $address = $row['address'];
        $shen = $row['safheavalvadvomeshenasname'];
        $pers = $row['imagepersoneli'];

?>
     

        <div class="col-9">
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

                <form action="config/updatepersonel.php" role="form" method="POST" enctype="multipart/form-data" class="p-5 container needs-validation textcolorp border border-warning border-3 rounded" novalidate>

                    <div class="row ">
                        <div class="  col-md-6 shadow ">
                            <label class="form-label"> نام پرسنل </label>
                            <div class="input-group  has-validation ">
                                <input name="namepersonel" type="text" class="form-control" value="<?= $namepersonel ?>" required>
                                <div class="invalid-feedback">
                                    لطفا نام را وارد کنید.
                                </div>

                            </div>
                        </div>
                        <br>
                        <div class="  col-md-6 shadow ">
                            <label class="form-label"> نام خانوادگی پرسنل </label>
                            <div class="input-group  has-validation ">
                                <input name="familypersonel" type="text" class="form-control" value="<?= $familypersonel ?>" required>
                                <div class="invalid-feedback">
                                    لطفا نام خانوادگی را وارد کنید.
                                </div>

                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row ">
                        <div class=" col-md-6 shadow ">
                            <label class="form-label">کد پرسنلی </label>
                            <input name="codepersoneli" pattern='[0-9]{10}' type="password" class="form-control" value="<?= $codepersoneli ?>" required>
                            <input type="hidden" name="oldcodepersoneli" value="<?= $oldcodepersoneli ?>">
                            <div class="invalid-feedback">
                                لطفا کد پرسنل را وارد کنید.
                            </div>

                        </div>
                        <br>
                        <div class="  col-md-6 shadow ">
                            <label class="form-label">ایمیل پرسنل </label>
                            <div class="input-group  has-validation ">
                                <input name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" type="email" class="form-control" value="<?= $email ?>" required>
                                <div class="invalid-feedback">
                                    لطفا ایمیل را وارد کنید.
                                </div>

                            </div>
                        </div>
                    </div>
                    <br>

                    <label class="form-label">تلفن همراه </label>
                    <div class="input-group  has-validation shadow  ">
                        <input name="phone1" pattern='[0-9]{11}' type="text" class="text-end form-control" value="<?= $phone1 ?>" required>
                        <div class="invalid-feedback">
                            لطفا شماره موبایل را وارد کنید.
                        </div>
                    </div>
                    <br>

                    <label class="form-label">تلفن ثابت </label>
                    <div class="input-group has-validation  shadow ">
                        <input name="phonesabet" pattern='[0-9]{8}' type="text" class="text-end form-control" value="<?= $phonesabet ?>" required>
                        <div class="invalid-feedback">
                            لطفا شماره تلفن ثابت را وارد کنید.
                        </div>
                    </div> <br>

                    <div class="row ">
                        <div class=" col-4 shadow ">
                            <label class="form-label">روز</label>
                            <input name="roze" class="form-control" list="rozlist" value="<?= $roze ?>" required>
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
                            <input name="mah" class="form-control" list="mahlist" value="<?= $mah ?>" required>
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
                            <input name="sal" class="form-control" list="sallist" value="<?= $sal ?>" required>
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
                            <input name="mahalsdorshenasname" class="form-control" list="mahallist" value="<?= $mahalsdorshenasname ?>" required>
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

                    <div class="col shadow ">
                        <label class="form-label"> سابقه سوء پیشینه </label>
                        <input name="adamsopishine" class="form-control" list="sabqelist" value="<?= $adamsopishine ?>" required>
                        <datalist id="sabqelist">
                            <option value="بله">
                            <option value="خیر ">
                        </datalist>
                        <div class="invalid-feedback">
                            لطفا سو پیشنه را تعیین کنید.
                        </div>

                    </div>
                    <br>

                    <br>
                    <div class="row">

                        <div class="mb-3 shadow pb-3 col-md-6 ">
                            <label class="form-label"> عکس صفحه اول  شناسنامه </label>
                            <div class="input-group mb-3">
                                <input name="shen" type="file" class="form-control" >

                                &nbsp;&nbsp;&nbsp;
                                <button type="button" data-bs-toggle="modal" data-bs-target="#shenmodal" class="btn btn-outline-secondary">تصویر فعلی</button>
                                <div class="modal fade" id="shenmodal" tabindex="-1" aria-labelledby="shenmodal" aria-hidden="true">
                                    <div class="modal-dialog" style="max-width: fit-content;">
                                        <div class="modal-content">
                                            <div class="modal-body p-0">
                                                <img src="<?= $sheen ?>" width="400px" height="400px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 shadow pb-3 col-md-6 ">
                            <label class="form-label"> عکس پرسنلی </label>
                            <div class="input-group mb-3">
                                <input name="pers" type="file" class="form-control" >

                                &nbsp;&nbsp;&nbsp;
                                <button type="button" data-bs-toggle="modal" data-bs-target="#persmodal" class="btn btn-outline-secondary">تصویر فعلی</button>
                                <div class="modal fade" id="persmodal" tabindex="-1" aria-labelledby="persmodal" aria-hidden="true">
                                    <div class="modal-dialog" style="max-width: fit-content;">
                                        <div class="modal-content">
                                            <div class="modal-body p-0">
                                                <img src="<?= $perss ?>" width="400px" height="400px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br><br><br>

                        <div class="mb-3 shadow ">
                            <label class="form-label">ادرس منزل</label>
                            <textarea name="address" class="form-control" rows="3"><?= $address ?></textarea>
                            <div class="invalid-feedback">
                                لطفا ادرس منزل را وارد کنید.
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
                        <button type="submit" class="col-2 btn btn-primary">ویرایش اطلاعات</button>
                        <button type="button" class="col-2 btn btn-danger" onclick="javascript:history.back()"> بازگشت </button>
                    </div>

                </form>

            </div>

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
    window.alert('لطفا پرسنلی را جهت ویرایش انتخاب کنید');
    window.location.href='hame personel.aa.php';
    </script>");
}
?>
<?php
include './footer/a-footer.php' ?>
