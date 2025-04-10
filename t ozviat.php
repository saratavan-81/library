<?php
 include_once('./header/karbar-header.php');
include './config/dbname2.php';
?>
<link rel="stylesheet" href="JalaliDatePicker-main/dist/jalalidatepicker.min.css">
<script src="JalaliDatePicker-main/dist/jalalidatepicker.min.js"></script>
<style>
    .modal {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        background: #FFF;
        box-shadow: 0 0 8px rgba(0,0,0,.3);
        transition: margin-top 0.3s ease, height 0.3s ease;
        transform: translateZ(0);
        box-sizing: border-box;
        z-index: 999;
        border-radius: 3px;
        max-width: 600px;
        display: block;
        height: 400px;
        overflow: scroll;
    }
</style>
<div class="col-9 ">
 
          
<br><br>
<div class="container ">
  <div class="row  justify-content-center  ">
      <div class="col-md-12 ">
<div class="alert alert-info alert-dismissible fade show" role="alert">
<img src="./image/223.svg" class="img-fluid" alt="..." height="25px" width="25px">

برای تمدید کردن تاریخ  انقضا کارت عضویت خود طبق قوانین کتابخانه عمل کنید . در غیر اینصورت تمدید تاریخ انقضا پذیرفته نمیشود برای مشاهده قانون فرم کتابخانه بر روی   <a href="#" class="alert-link"> قانون اطلاعات کتابخانه  </a> کلیک کنید 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>
</div>
</div>
<br><br>
    <?php
    if(isset($_POST["send"])){
        $newozviat=$_POST["newozviat"];
        $codemeli=$_SESSION["codemeli"];
        $karbar=$database->prepare("UPDATE karbar SET datevalidateozviat=? WHERE codemeli=?");
        $karbar->bindValue(1,$newozviat);
        $karbar->bindValue(2,$codemeli);
        $karbar->execute();
        if($karbar->rowCount()>=1){
            echo "<div class='alert alert-success'>با موفقیت ویرایش شد</div>";
        }
    }
    ?>
<div class="tellozviat">
    <div class="row justify-content-center">
        <div class="col-md-6 shadow ">
            <div class="mb-3  ">

                <?php
                $codemeli=$_SESSION["codemeli"];
                $karbar=$database->prepare("SELECT * FROM karbar WHERE codemeli=?");
                $karbar->bindValue(1,$codemeli);
                $karbar->execute();
                $karbar2=$karbar->fetch(PDO::FETCH_ASSOC);
                ?>
                <label for="1" class="form-label"> تاریخ صدور کارت عضویت</label>
                <input type="text" class="form-control shadow " value="<?php echo $karbar2["datevalidateozviat"] ?>" id="1"  disabled >
              </div>
              <br>
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
              <label for="2" class="form-label">   تمدید تاریخ انقضا کارت عضویت  </label>
              <input type="text" name="newozviat" data-jdp class="form-control shadow " id="2"  required>
              <div class="invalid-feedback">
                تاریخ انقضا کارت عضویت را تمدید نکرده اید.
              </div>
              <br>
              <div class="col-12">
                <button type="submit" name="send" class="btn btn-primary rounded-pill" data-bs-toggle="collapse" href="#collapseExample" id="liveToast"> تمدید</button>
            </form>
          
                <br><br>
                <div class="collapse" id="collapseExample">
                  <div class="card card-body">
                    با موفقیت تاریخ عضویت شما تمدید شد.
                  </div>
                </div>
              </div>
              </div>
              </div>
              </div>
              </div>
              </div>
              



         



    <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
     crossorigin="anonymous">
    </script>
        <script>
    (function () {
      'use strict'
    
      var forms = document.querySelectorAll('.needs-validation')
    
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

<script>
    jalaliDatepicker.startWatch({
        separatorChar: "/",
        minDate: "attr",
        maxDate: "attr",
        changeMonthRotateYear: true,
        showTodayBtn: true,
        showEmptyBtn: true,
        topSpace: 10,
        bottomSpace: 30,
        dayRendering(opt,input){
            return {
                isHollyDay:opt.day==1
            }
        }
    });

    document.getElementById("aaa").addEventListener("jdp:change", function (e) { console.log(e) });
</script>
</body>

</html>