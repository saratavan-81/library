<?php
 include_once('./header/karbar-header.php') ;
include "./config/dbname2.php";
?>
<link rel="stylesheet" href="./style.css">
<div class="col-9">
<br><br><br>
    <div class="container  ">
        <div class="row justify-content-center tcolor">
            <div class="col-md-6 shadow ">
              <div class="form1">
                <div class=" header d-flex justify-content-center  "><h4> فرم اطلاعات کاربران</h4></div>
                  <?php
                  $select2=$database->prepare("SELECT * FROM `karbar` WHERE codemeli=?");
                  $select2->bindValue(1,$_SESSION["codemeli"]);
                  $select2->execute();
                  $select=$select2->fetch(PDO::FETCH_ASSOC);

                  ?>
                <div class="mb-3">
                  <div class="form orginal">
                  <form method="POST">
                    <label for="a" class="form-label n">نام کاربر</label>
                    <input type="text" class="form-control n" id="a" placeholder="<?php echo $select["namekarbar"] ?>"disabled>
</div>
                  <br>

                  <label for="b" class="form-label l">نام خانوادگی کاربر </label>
                  <input type="text" class="form-control" id="b" placeholder="<?php echo $select["familykarbar"] ?>"disabled >
                  <br>

                  <label for="c" class="form-label p">رمز عبور </label>
                  <input type="email" class="form-control" id="c" placeholder="<?php echo $select["password"] ?>"disabled >
                  <br>

                <label for="d" class="form-label m"> ایمیل کاربر</label>
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
                <?php
                ?>
    </div>
    </div>
    <br><br><br><br>

   

   




  
</div>

</form>
</div>

<?php
include 'footer/k-footer.php';
?>


    <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
     crossorigin="anonymous">
    </script>
</body>
</html>