

<?php
session_start();
ob_start();
include './header/karbar-header.php';
include './config/dbname2.php';
if(empty($_SESSION["login"])){
    header("Location: ../index.php");

}
?>

<div class=" col-10">
  <br><br>
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand">دنبال چه میگردید؟</a>
      <form class="d-flex" action="" method="GET">
        <input class="form-control me-2" type="search" placeholder="بنویسید..." name="search" value="<?php if (isset($_GET['search'])) {
                                                                                                        echo $_GET['search'];
                                                                                                      } ?>">
        <button class="btn btn-outline-success" type="submit">جستجو</button>
      </form>
    </div>
  </nav>
  <table class="table table-hover table-bordered a-hamebookcolor align-middle ">
    <thead>

      <tr class="table-dark">
        <th scope="col">شماره</th>
        <th scope="col"> عنوان کتاب </th>
        <th scope="col">موضوع</th>
        <th scope="col">کد کتاب</th>
        <th scope="col"> نام نویسنده</th>
        <th scope="col">سال انتشار </th>
        <th scope="col"> مترجم</th>
        <th scope="col"> جلد</th>
        <th scope="col"> تصویر کتاب</th>
          <th scope="col">دریافت</th>
        <th scope="col"> گزینه ها</th>

      </tr>
      <?php
      include 'config/dbname.php';
      if (!isset($_GET['search'])) :
        $sql = "SELECT ROW_NUMBER() OVER() AS 'ردیف',
              namebook,
              mozo,
              codebook,
              nevisande,
              salenteshar,
              motrjem,
              jeld,
              imagebook
            FROM book";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) :
          // foreach ($result as $items) :
          while ($row = $result->fetch_assoc()) :
            // $codebook = $items['codebook'];
      ?>
            <tr>
              <td><?= $row['ردیف']; ?></td>
              <td><?= $row['namebook']; ?></td>
              <td><?= $row['mozo']; ?></td>
              <td><?= $row['codebook']; ?></td>
              <td><?= $row['nevisande']; ?></td>
              <td><?= $row['salenteshar']; ?></td>
              <td><?= $row['motrjem']; ?></td>
              <td><?= $row['jeld']; ?></td>
              <td> <img src="<?= $row['imagebook']; ?>" style="width: 100px;height: 100px"></td>
                <form action="" method="post">
                <td style="width: 100px"><select  name="select" class="form-control" id="">
                        <option value="حضوری">حضوری</option>
                        <option value="پست">پست</option>
                    </select></td>

              <td>

                      <input hidden type="text" name="codebook" value="<?= $row['codebook'];?> ">
                      <button class=" btn btn-success d-flex" type="submit" name="amanat" value="send">امانت</button>
                  </form>
                  <!--
                <a class='text-black' href="a-editebook.php?edit=<?php /*$row['codebook'];*/ ?>"> امانت</a></button>
-->
              </td>
              </tr>


          <?php

          endwhile;
          // endforeach;
            if(isset($_POST["amanat"])) {
                $karbar=$database->prepare("SELECT * FROM karbar WHERE codemeli=?");
                $karbar->bindValue(1,$_SESSION["codemeli"]);
                $karbar->execute();
                $informationkarbar=$karbar->fetch(PDO::FETCH_ASSOC);
                if(isset($informationkarbar)){
                   $book=$database->prepare("SELECT * FROM book WHERE codebook=?");
                $book->bindValue(1,$_POST["codebook"]);
                $book->execute();
                $informationbook=$book->fetch(PDO::FETCH_ASSOC);
                if(isset($informationbook)){
                    $darkhast=$database->prepare("INSERT INTO `amanat`( `namekarbar`,
                     `familykarbar`, `codekarbar`, `phone1`,
                     `phone2`, `email`, `namebook`,
                     `nevisande`, `motarjem`, `codebook`,
                         `mozo`, `saleenteshar`,dariaft) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
                    $darkhast->bindValue(1,$informationkarbar["namekarbar"]);
                    $darkhast->bindValue(2,$informationkarbar["familykarbar"]);
                    $darkhast->bindValue(3,$informationkarbar["codemeli"]);
                    $darkhast->bindValue(4,$informationkarbar["phone1"]);
                    $darkhast->bindValue(5,$informationkarbar["phonesabet"]);
                    $darkhast->bindValue(6,$informationkarbar["email"]);
                    $darkhast->bindValue(7,$informationbook["namebook"]);
                    $darkhast->bindValue(8,$informationbook["nevisande"]);
                    $darkhast->bindValue(9,$informationbook["motrjem"]);
                    $darkhast->bindValue(10,$informationbook["codebook"]);
                    $darkhast->bindValue(11,$informationbook["mozo"]);
                    $darkhast->bindValue(12,$informationbook["salenteshar"]);
                    $darkhast->bindValue(13,$_POST["select"]);
                    $darkhast->execute();
                    if($darkhast->rowCount()>=1){
                        echo "<div class='alert alert-success'>درخواست با موفقیت ارسال شد</div>";
                    }else{
                        echo "<div class='alert alert-warning'>خطا در درخواست اطلاعات</div>";
                    }
                }
                }

            }
?>





      <?php else :
          echo "نتیجه ای یافت نشد!";
        endif;
      endif;

      $conn->close();
      ?>

    </thead>
    <tbody>
      <?php
      include 'config/dbname.php';
      if (isset($_GET['search'])) :
        $filtervalues = $_GET['search'];
        $query = "SELECT ROW_NUMBER() OVER() AS 'ردیف',
              namebook,
              mozo,
              codebook,
              nevisande,
              salenteshar,
              motrjem,
              jeld,
              imagebook
            FROM book
            WHERE CONCAT(namebook,mozo,codebook,nevisande,salenteshar,motrjem,jeld) LIKE '%$filtervalues%'";
        $query_run = mysqli_query($conn, $query);
        if (mysqli_num_rows($query_run) > 0) :
          foreach ($query_run as $items) : ?>
            <tr>
              <td><?= $items['ردیف']; ?></td>
              <td><?= $items['namebook']; ?></td>
              <td><?= $items['mozo']; ?></td>
              <td><?= $items['codebook']; ?></td>
              <td><?= $items['nevisande']; ?></td>
              <td><?= $items['salenteshar']; ?></td>
              <td><?= $items['motrjem']; ?></td>
              <td><?= $items['jeld']; ?></td>
              <td> <img src="<?= $items['imagebook']; ?>" width="100px" height="100px"></td>
                <form action="<?php echo $_SERVER["PHP_SELF"]."?serch=$_GET[search]" ?>" method="post">
                    <td style="width: 100px">
                        <select  name="select" class="form-control" id="">
                            <option value="حضوری">حضوری</option>
                            <option value="پست">پست</option>
                        </select></td>

                    <td>

                        <input hidden type="text" name="codebook" value="<?php echo $items['codebook'];?> ">
                        <button class=" btn btn-success d-flex" type="submit" name="amanat" value="send">امانت</button>
                </form>
                <!--
                <a class='text-black' href="a-editebook.php?edit=<?php /*$row['codebook'];*/ ?>"> امانت</a></button>
-->
                </td>
            </tr>
          <?php
          endforeach;
        else :
          ?>

          <tr>
            <td colspan="9">جستجوی شما نتیجه ای در بر نداشت</td>
          </tr>
      <?php
        endif;
      endif;
      ?>
    </tbody>
  </table>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

</body>














    



          
    <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
     crossorigin="anonymous">
    </script>
                            <?php
include 'footer/k-footer.php';
?>
    </body>