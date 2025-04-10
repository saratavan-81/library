<?php
include_once('./header/personel-header.php');
include "./config/dbname2.php";
?>

<link rel="stylesheet" href="./style/style.css">
<div class="col-9">
<br><br><br>
    <div class="container  ">
        <div class="row justify-content-center tcolorpersonal">
            <div class="col-md-6 shadow ">
              <div class="form1">
                <div class=" header d-flex justify-content-center  "><h4> فرم اطلاعات پرسنل</h4></div>

                <div class="mb-3">
                  <div class="form orginal">
                  <form method="POST">
                      <?php
                      $codepersoneli=$_SESSION["codepersoneli "];
                      $select2=$database->prepare("SELECT * FROM `personel` WHERE codepersoneli=$codepersoneli");
                      $select2->execute();
                      $select=$select2->fetch(PDO::FETCH_ASSOC);
                      
                      ?>
                    <label for="a" class="form-label n">نام پرسنل</label>
                    <input type="text" class="form-control n" id="a" placeholder="<?php echo $select["namepersonel"] ?>"disabled>
</div>
                  <br>

                  <label for="b" class="form-label l">نام خانوادگی پرسنل </label>
                  <input type="text" class="form-control" id="b" placeholder="<?php echo $select["familypersonel"] ?>"disabled >
                  <br>

                  <label for="c" class="form-label p">رمز عبور </label>
                  <input type="email" class="form-control" id="c" placeholder="<?php echo $select["codepersoneli"] ?>"disabled >
                  <br>

                <label for="d" class="form-label m"> ایمیل پرسنل</label>
                <input type="email" class="form-control" id="d" placeholder="<?php echo $select["email"] ?>"disabled >
                <br>

              <label for="e" class="form-label t">تلفن همراه  </label>
              <input type="email" class="form-control" id="e" placeholder="<?php echo $select["phone1"] ?>"disabled >
              <br>

            <label for="f" class="form-label ts">تلفن ثابت </label>
            <input type="email" class="form-control" id="f" placeholder="<?php echo $select["phonesabet"] ?>"disabled >
            <br>

          <label for="g" class="form-label ta">تاریخ تولد </label>
          <input type="text" class="form-control" id="g" placeholder="<?php echo $select["sal"]."/".$select["mah"]."/".$select["roze"] ?>" disabled>
          <br>

        <label for="h" class="form-label ma"> محل صدور شناسنامه</label>
        <input type="text" class="form-control" id="h" placeholder="<?php echo $select["mahalsdorshenasname"] ?>"disabled>
        <br>

    
     

    <div class="mb-3">
        <label for="o" class="form-label manzel">ادرس منزل</label>
        <textarea class="form-control" id="o" rows="3" placeholder="<?php echo $select["address"] ?>"  ></textarea>
      </div>
            </div>
        </div>
    </div>
    </div>
    <br><br><br><br>

   

   




  
</div>

</form>
</div>



    <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
     crossorigin="anonymous">
    </script>

<?php
include 'footer/p-footer.php';
?>
</body>
</html>