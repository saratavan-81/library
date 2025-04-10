<?php
$localhost="localhost";
$namedb="root";
$passworddb="";
$db="projectwebtavan";

try{
    $conn=new mysqli($localhost,$namedb,$passworddb,$db);
    $conn->set_charset('utf8');

}
catch (\Throwable $th) {
    echo "<script>
    window.alert('خطا در اتصال به دیتابیس');
    history.back();
    </script>";

}
if(isset($_POST['submit'])){

  $namebook=$_POST['namebook'];
  $codebook=$_POST['codebook'];
  $nevisande=$_POST['nevisande'];
  $motrjem=$_POST['motrjem'];
  $mozo=$_POST['mozo'];
  $salenteshr=$_POST['salenteshr'];
  $jeldbook=$_POST['jeldbook'];

  $image = $_FILES['image'];
  $filetype = basename($image['type']);
  $pers = '/image/imageplus' . $namebook . '-' .   $codebook . '.jpg';
  if ($filetype == 'jpeg' || $filetype == 'jpg' || $filetype == 'png') {
      move_uploaded_file($image['tmp_name'], '..' . $pers);
  } else {
      echo "<script>
      window.alert('پسوندهای مجاز عکس: png,jpg,jpeg');
      history.back();
      </script>";
  }
  $query = "SELECT * FROM book WHERE namebook = '$namebook' OR codebook = '$codebook'";
  $selectresult = $conn->query($query);
  if ($selectresult->fetch_assoc() > 0) {
      die("<script>
    window.alert('این کتاب قبلا در سایت ثبت شده است');
    history.back();
    </script>");
  }
  


$sql="INSERT INTO book (namebook,mozo,codebook,nevisande,salenteshar,motrjem,jeld,imagebook) VALUES ('$namebook','$mozo','$codebook','$nevisande','$salenteshr','$motrjem','$jeldbook','$image')";
$result = $conn->query($sql);
if ($result) {
    echo "<script>
    window.alert('کتاب اضافه شد');
    window.location.href='/library-project/hamebook.p.php';    

    </script>";
} else {
    echo "<script>
    window.alert(' کتاب اضافه نشد');
    history.back();
    </script>";
}



$conn->close();

}


?>







<!DOCTYPE html>
<html dir="rtl" lang="fa">

<?php
include 'header/hederplasbook.php';
?>

<div class="col-9">
 
<br><br>
<div class="container">
  <div class="row  justify-content-center">
      <div class="col-md-12">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
برای وارد کردن اطلاعات طبق قانون کتابخانه عمل کرده در غیر اینصورت اطلاعات شما ثبت نخواهد شد. برای نمایش قانون فرم کتابخانه بر روی  <a href="#" class="alert-link"> قانون اطلاعات کتابخانه  </a> کلیک کنید 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>
</div>
</div>
<br><br>

<div class="tellbookezafe">
    <form class="container needs-validation text-primary border border-warning border-3 rounded"novalidate role="form" method="POST" enctype="multipart/form-data">
      <div class="row  ">
            <div class="form-floating mb-3 col-md-6 shadow ">
                <input type="text" class="form-control" id="a" placeholder="فاطمه" required name="namebook">
                <label for="a">عنوان کتاب جدید  </label>
                <div class="valid-feedback">
                 صحیح است
                </div>
              </div>
                  <br>
                  <div class="form-floating mb-3 col-md-6 shadow">
                    <input type="text" class="form-control" id="b" placeholder="توان" required name="codebook">
                    <label for="b">کد کتاب    </label>
                    <div class="valid-feedback">
                      صحیح است
                    </div>
                  </div>
                  </div>
                  <br>
                  <div class="row ">
                    <div class=" col-md-6 shadow">
                  <label for="c" class="form-label"> نام نویسنده </label>
                  <input type="text" class="form-control" id="c" placeholder="..." required name="nevisande">
                  <div class="invalid-feedback">
                    لطفا رمز عبور را وارد کنید.
                  </div>
                  </div>
                  <br>
                  <div class="  col-md-6 shadow">
                  <label for="lp" class="form-label">نام مترجم    </label>
                  <input type="text" class="form-control" placeholder="..." aria-label="Recipient's username" aria-describedby="basic-addon2" id="lp"  required name="motrjem">
                  <div class="invalid-feedback">
                    لطفا ایمیل خود را وارد کنید.
                  </div>

</div>
                  </div>
                <br>

                <div class="row ">
                    <div class=" col shadow">
                      <label for="332" class="form-label"> انتخاب موضوع</label>
                      <input class="form-control" list="datalistOptions332" id="332" placeholder="انتخاب روز..." required name="mozo">
                      <datalist id="datalistOptions332">
                        <option value="ادبیات و فرهنگ">
                        <option value="اجتماعی">
                        <option value="سیاسی">
                        <option value="داستانی">
                        <option value="رمان">
                          <option value="فلسفه و منطق">
                            <option value="مذهبی و دینی">
                              <option value="ریاضیات">
                                <option value="فیزیک">
                                  <option value="شیمی">
                                    <option value="بازی و سرگرمی">
                                      <option value="اشپزی">
                                        <option value="ورزشی">
                                   
                      </datalist>
                      <div class="invalid-feedback">
                        لطفا روز تولد خود را وارد کنید.
                      </div>
                            <br>

                            <div class="row ">
                                <div class=" col-6 shadow">
                                  <label for="4442" class="form-label">سال انتشار </label>
                                  <input class="form-control" list="datalistOptions4442" id="4442" placeholder=" ..." required name="salenteshr">
                                  <datalist id="datalistOptions4442">
                                  <option value="1320">
                              <option value=" 1321">
                              <option value="1322">
                              <option value=" 1323">
                              <option value="1324">
                              <option value="1325">
                              <option value="1326">
                              <option value="1327">
                              <option value="1328">
                              <option value="1329">
                              <option value="1330">
                              <option value="1331">
                              <option value="1332">
                              <option value="1333">
                              <option value="3334">
                              <option value="1335">
                              <option value="1336">
                              <option value="1337">
                              <option value="1338">
                              <option value="1339">
                              <option value="1340">
                              <option value="1341">
                              <option value="1342">
                              <option value="1343">
                              <option value="1344">
                              <option value="1345">
                              <option value="1346">
                              <option value=" 1347">
                              <option value="1348">
                              <option value="1349">
                              <option value="1350">
                              <option value="1351">
                              <option value="1352">
                              <option value="1353">
                              <option value="1354">
                              <option value="1355">
                              <option value="1356">
                              <option value="1357">
                              <option value="1358">
                              <option value="1359">


                                  </datalist>
                                  <div class="invalid-feedback">
                                    لطفا روز تولد خود را وارد کنید.
                                  </div>

            </div>            <br>
              <div class=" col-6  shadow ">
                <label for="365" class="form-label">جلد چندم؟</label>
                <input class="form-control" list="datalistOptions365" id="365" placeholder="..." required name="jeldbook">
                <datalist id="datalistOptions365">
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
          </div>
          <br><br>
          <div class="row">
            <div class="col-12 shadow ">
        <label for="22" class="form-label">انتخاب تصویر جلد کتاب </label>
        <div class="input-group mb-3">
          <input type="file" class="form-control" id="22" multiple required name="image">
          <label class="input-group-text" for="inputGroupFile01" >Upload</label>
          <div class="invalid-feedback">
    لطفا اسکن صفحه اول و دوم شناسنامه خود را  انتخاب کنید.
          </div>
</div>
        </div>
          <br><br><br><br>
      <div class="col-12 col-md-6 ps-6 shadow">
        <button type="submit" class="btn btn-primary  rounded-pill " name="submit" >Sign in</button>
        <br><br>
  
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
</body>
</html>