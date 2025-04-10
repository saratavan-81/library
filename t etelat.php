
<?php
 include_once('./header/karbar-header.php') 

?>


<div class="col-9">
 
    
    
<br><br>
<div class="container">
  <div class="row  justify-content-center">
      <div class="col-md-12">

</div>
</div>
</div>
<br><br>
<div class="te">
    <form class="p-5 container needs-validation  border border-warning border-3 rounded colortetelet" novalidate>
        <div class="row ">

        <div class=" col-md-6 shadow ">
              <label for="aaa" class="form-label">نام کاربر  </label>
              <input type="text" class="form-control" id="aaa" placeholder="نام..." required>
              <div class="invalid-feedback">
                لطفانام خود را وارد کنید.
              </div>
              </div> 
              <br>
              <div class=" col-md-6 shadow ">
              <label for="bbb" class="form-label">نام خانوادگی  </label>
              <input type="text" class="form-control" id="bbb" placeholder="نام خانوادگی..." required>
              <div class="invalid-feedback">
                لطفا رمز عبور  خود را وارد کنید.
              </div>
              </div>
              </div>
              <br>

              <div class="row ">
                <div class=" col-md-6 shadow ">
              <label for="ccc" class="form-label">رمز عبور </label>
              <input type="password" class="form-control" id="ccc" placeholder="12345678" required>
              <div class="invalid-feedback">
                لطفا رمز عبور  خود را وارد کنید.
              </div>
              </div>
              <br>
              <div class="  col-md-6 shadow ">
              <label for="lppp" class="form-label">ایمیل کاربر  </label>
              <div class="input-group ">
              <input type="email" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2" id="lppp" required>
              <div class="invalid-feedback">
                لطفا ایمیل خود را وارد کنید.
              </div>
</div>
              </div>
              </div>
            <br>

            <label for="eee" class="form-label  ">تلفن همراه  </label>
            <div class="input-group shadow  ">
              <input type="email" class="form-control" placeholder="059061459" aria-label="Username" aria-describedby="basic-addon1"required >
              <span class="input-group-text" id="basic-addon1">09</span>
              <div class="invalid-feedback">
                لطفا شماره موبایل خود را وارد کنید.
              </div>
            </div>
                          <br>

          <label for="fff" class="form-label  ">تلفن ثابت </label>
          <div class="input-group shadow ">
            <input type="email" class="form-control" placeholder="7261438" aria-label="Username" aria-describedby="basic-addon1" id="fff" required>
            <span class="input-group-text" id="basic-addon1">3</span>
            <div class="invalid-feedback">
              لطفا شماره تلفن ثابت خود را وارد کنید.
            </div>
          </div>            <br>

          <div class="row ">
            <div class=" col-4 shadow ">
              <label for="22222" class="form-label">روز</label>
              <input class="form-control" list="datalistOptions4" id="22222" placeholder="انتخاب روز..." required>
              <datalist id="datalistOptions4">
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
                لطفا روز تولد خود را انتخاب کنید.
              </div>
</div>
<div class=" col-4 shadow ">
<label for="11111" class="form-label"> ماه  </label>
<input class="form-control" list="datalistOptions5" id="11111" placeholder="انتخاب ماه..." required>
<datalist id="datalistOptions5">
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
  لطفا ماه تولد خود را انتخاب کنید.
</div>


        </div>
        <div class=" col-4 shadow ">
          <label for="3333" class="form-label"> سال  </label>
          <input class="form-control" list="datalistOptions6" id="3333" placeholder="انتخاب سال..." required>
          <datalist id="datalistOptions6">
            <option value="1381">
            <option value="1382 ">
            <option value="1383">
            <option value=" 1384">
            <option value="1385">
              <option value="1386">
                <option value="1387">
                  <option value="1388">
                    <option value="1389">
               
          
          
          
          
          </datalist>
          <div class="invalid-feedback">
            لطفا سال تولد خود را انتخاب کنید.
          </div>
          </div>
          </div>
          <br><br>

          <div class="row">
            <div class="col  shadow ">
                      <label for="exampleDataList11" class="form-label"> محل صدور شناسنامه</label>
                      <input class="form-control" list="00" id="exampleDataList11" placeholder="انتخاب محل صدور شناسنامه..." required>
                      <datalist id="00">
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
                        <input class="form-control" list="xx" id="x0" placeholder=" ..." required>
                        <datalist id="xx">
                          <option value="بله">
                          <option value="خیر ">
                          </datalist>
                          <div class="invalid-feedback">
                            لطفا سو پیشنه ی خود را  تعیین کنید.
                                  </div>
                          </div>
                          <br><br>


                          <div class="row">
                            <div class="col-md-6 shadow ">
                        <label for="qq" class="form-label">اپلود عکس صفحه اول   شناسنامه </label>
                        <div class="input-group mb-3">
                          <input type="file" class="form-control" id="qq" multiple required>
                          <label class="input-group-text" for="inputGroupFile01" >Upload</label>
                          <div class="invalid-feedback">
                            لطفا اسکن صفحه اول و دوم شناسنامه خود را  انتخاب کنید.
                                  </div>

                </div>
                        </div>
                      <div class="col-md-6 shadow ">
                        <label for="qqq" class="form-label">اپلود عکس کاربر </label>
                        <div class="input-group mb-3">
                          <input type="file" class="form-control" id="qqq" multiple required>
                          <label class="input-group-text" for="inputGroupFile01" >Upload</label>
                          <div class="invalid-feedback">
                            لطفا عکس خود را انتخاب کنید.
                          </div>
                        </div>      </div>
                <br><br>
    <div class="mb-3 shadow ">
        <label for="ooo" class="form-label">ادرس منزل</label>
        <textarea class="form-control" id="ooo" rows="3" placeholder="ابتدای بلوار مدرس کوچه 59 فرعی 59/1/2 پلاک 270" ></textarea>
        <div class="invalid-feedback">
          لطفا ادرس منزل خود را خود را وارد کنید.
        </div>
      </div>
            </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary rounded-pill btn-lg" data-bs-toggle="collapse" href="#collapseExample" id="liveToast"> اعمال ویرایش</button>
  
    </div>
    </div>
    </div>
  
    </form>
   
    



    <script >
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
                   <?php
include 'footer/k-footer.php';
?>
</body>
</html>