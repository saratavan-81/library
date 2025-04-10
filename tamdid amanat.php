<?php
 include_once('./header/karbar-header.php') ;
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

<div class="col-9">
  
<br><br>

<div class="container">
  <div class="row  justify-content-center">
      <div class="col-md-12">

</div>
</div>
</div>
<br><br>
    <?php
    if(isset($_POST["send"])){
        $amanat = $database->prepare("UPDATE amanat SET tetmamamant=? where id=?");
        $amanat->bindValue(1,$_POST["tamdid"]);
        $amanat->bindValue(2,$_GET["id"]);
        $amanat->execute();
        if($amanat->rowCount()==1){
            echo "<div class='alert alert-success'>با موفقیت تمدید شد</div>";
        }else{
            echo "<div class='alert alert-danger'>خطا در تمدید اطلاعات</div>";
        }

    }
    ?>
<div class="tellamanat">
        <div class="row justify-content-center">
            <div class="col-md-6 shadow ">
                <div class="mb-3  ">
                    <?php
                    if(isset($_GET["id"])){
                        $amanat = $database->prepare("SELECT * FROM amanat where id=?");
                        $amanat->bindValue(1,$_GET["id"]);
                        $amanat->execute();
                        $all = $amanat->fetch(PDO::FETCH_ASSOC);

                    }
                    ?>
                    <label for="a" class="form-label">عنوان کتاب</label>
                    <input type="text" readonly value="<?php if(isset($all["tamanat"])){ echo $all["namebook"];}else{echo "کتابی انتخاب نشده است";} ?>" class="form-control shadow " id="a" placeholder="..."required   >
                    <div class="invalid-feedback">
                      عنوان کتاب را وارد کنید.
                    </div>
                  </div>
                  <br>

                  <label for="b" class="form-label">  کد کتاب  </label>
                  <input type="text" readonly value="<?php if(isset($all["tamanat"])){ echo $all["codebook"];}else{echo "کتابی انتخاب نشده است";} ?> " class="form-control shadow " id="b" placeholder="..." required>
                  <div class="invalid-feedback">
                    کد کتاب مورد نظر را وارد کنید.
                  </div>
                  <br>

                  <label for="c" class="form-label"> تاریخ به امانت گرفته شده  </label>
                  <input type="text" readonly value="<?php if(isset($all["tamanat"])){echo $all["tamanat"];}else{echo "کتابی انتخاب نشده است";} ?>"  class="form-control shadow " id="c" required>
                  <div class="invalid-feedback">
                    تاریخ به امانت گرفته شده را وارد کنید.
                  </div>
                  <br>

                <label for="d" class="form-label">  تاریخ اتمام امانت کتاب </label>
                <input type="text" readonly value="<?php if(isset($all["tamanat"])){echo $all["tetmamamant"] ;}else{echo "0000-00-00";} ?>"  class="form-control shadow " id="d"  required>
                <div class="invalid-feedback">
                  تاریخ اتمام امانت را وار کنید.
                </div>
                <br>
                <?php
                if(isset($_GET["id"])){
                ?>
                <form action="<?php echo $_SERVER["PHP_SELF"]."?id=".$_GET["id"] ?>" method="post">
                    <?php
                    }else{?>
                        <form>
                            <?php
                    }
                    ?>
                    <label for="e" class="form-label"> تمدید تاریخ اتمام امانت کتاب   </label>
                    <input type="text"  data-jdp name="tamdid" class="form-control shadow " id="e" placeholder="xxxx/xx/xx" required>
                     <div class="invalid-feedback">
                       تاریخ تمدید تمام امانت را وارد کنید.
                       </div>
                            <?php
                            if(isset($_GET["id"])){
                            ?>
                    <button type="submit" name="send" class="btn btn-primary rounded-pill " data-bs-toggle="collapse" href="#collapseExample" id="'liveToast"> تمدید</button>
                            <?php
                            }else{?>
                                <button type="button" name="send" class="btn btn-primary rounded-pill " data-bs-toggle="collapse" href="#collapseExample" id="'liveToast"> تمدید</button>

                            <?php }
                            ?>
                </form>
              <br>
            </div>
        </div>
    <div class="col-12">
      <br>
    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;
    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;





    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;









    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;
    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;  





    
      
      <br><br>
      <div class="collapse" id="collapseExample">
        <div class="card card-body">
          با موفقیت تاریخ اتمام امانت شما تمدید شد.
        </div>
      </div>
      </div>
    </div>
    </div>
    
    </div>

</nav>
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
                             <?php
include 'footer/k-footer.php';
?>
</body>
</html>