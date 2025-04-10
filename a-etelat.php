<?php
include_once('./header/admin-header.php');
include "./config/dbname2.php";
if(empty($_SESSION["nameadmin"])){
    header('location:index.php');
}
?>
 <link rel="stylesheet" href="./style.css">
<div class="col-9">
<br><br><br>
    <div class="container  ">
        <div class="row justify-content-center tcoloradmin">
            <div class="col-md-6 shadow ">
              <div class="form1">
                <div class=" header d-flex justify-content-center  "><h4> فرم اطلاعات ادمین</h4></div>

                <div class="mb-3">
                  <div class="form orginal">
                  <form method="POST">
                      <?php
                      $select2=$database->prepare("SELECT * FROM `admin` WHERE nameadmin=?");
                      $select2->bindValue(1,$_SESSION["nameadmin"]);
                      $select2->execute();
                      $select=$select2->fetch(PDO::FETCH_ASSOC);

                      ?>
                    <label for="a" class="form-label n">نام ادمین</label>
                    <input type="text" class="form-control n" id="a" placeholder="<?php echo $select["nameadmin"]; ?>"disabled>
</div>
                  <br>

                  <label for="b" class="form-label l">نام خانوادگی ادمین </label>
                  <input type="text" class="form-control" id="b" placeholder="<?php echo $select["familyadmin"]; ?>"disabled >
                  <br>

                  

          
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
include 'footer/a-footer.php';
?>
 </body>
 </html>
