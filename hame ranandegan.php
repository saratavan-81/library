<?php
include './header/admin-header.php' ?>

<div class=" col-10">
  <button type="button" class="btn btn-outline-warning "><a href="sabt ranandegan.php"> افزودن راننده</a></button>
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
  <table class="table table-hover table-bordered a-personelcolor align-middle ">
    <thead>

      <tr class="table-dark">
      <th scope="col">شماره</th>
                <th scope="col">  نام راننده </th>
                <th scope="col">نام خانوادگی راننده</th>
                <th scope="col">    کد ملی   </th>
                <th scope="col">   تلفن همراه   </th>
                <th scope="col">  تلفن ثابت   </th>
                <th scope="col">   روز   </th>
                <th scope="col">   ماه   </th>
                <th scope="col">   سال   </th>
                <th scope="col">   محل صدور شناسنامه   </th>
                <th scope="col">   وسیله حمل و نقل   </th>
                <th scope="col">  عکس شناسنامه     </th>
                <th scope="col">   عکس راننده   </th>
                <th scope="col"> ادرس منزل   </th>
                <th scope="col">  گزینه ها   </th>




      </tr>

      <?php
      include 'config/dbname.php';
      if (!isset($_GET['search'])) :
        $sql = "SELECT ROW_NUMBER() OVER() AS 'ردیف',
              name,
              family,
              codemelii,
              phone,
              phonesabet ,
              roz,
              mah,
              sal,
              mahalsdorshenasname,
              car,
              imgsafheavalvadovom,
              imgranande,
              address
            FROM ranande";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) :
          while ($row = $result->fetch_assoc()) :
      ?>
            <tr>
              <td><?= $row['ردیف']; ?></td>
              <td><?= $row['name']; ?></td>
              <td><?= $row['family']; ?></td>
              <td><?= $row['codemelii']; ?></td>
              <td><?= $row['phone']; ?></td>
              <td><?= $row['phonesabet']; ?></td>
              <td><?= $row['roz']; ?></td>
              <td><?= $row['mah']; ?></td>
              <td><?= $row['sal']; ?></td>
              <td><?= $row['mahalsdorshenasname']; ?></td>
              <td><?= $row['car']; ?></td>
              <td><?= $row['address']; ?></td>
              <td> <img src="<?= $row['imgsafheavalvadovom']; ?>" width="100px" height="100px"></td>
              <td> <img src="<?= $row['imgranande']; ?>" width="100px" height="100px"></td>
              <td>
                <button type='button' class='btn btn-outline-danger'><a class='text-black' href="a-editranande.php?edit=<?= $row['codemelii']; ?>"> ویرایش</a></button>
                <button type='button' class='btn btn-outline-warning'><a href="config/deleteranande.php?delete=<?= $row['codemelii']; ?>" class='text-black'>حذف</a></button>
              </td>
            </tr>




          <?php
          endwhile;
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
          name,
              family,
              codemelii,
              phone,
              phonesabet ,
              roz,
              mah,
              sal,
              mahalsdorshenasname,
              car,
              imgsafheavalvadovom,
              imgranande,
              address
            FROM ranande
            WHERE CONCAT(
            name,
              family,
              codemelii,
              phone,
              phonesabet ,
              roz,
              mah,
              sal,
              mahalsdorshenasname,
              car,
              imgsafheavalvadovom,
              imgranande,
              address) LIKE '%$filtervalues%'";      
        $query_run = mysqli_query($conn, $query);
        if (mysqli_num_rows($query_run) > 0) :
          foreach ($query_run as $items) : ?>
            <tr>
            <td><?= $items['ردیف']; ?></td>
              <td><?= $items['name']; ?></td>
              <td><?= $items['family']; ?></td>
              <td><?= $items['codemelii']; ?></td>
              <td><?= $items['phone']; ?></td>
              <td><?= $items['phonesabet']; ?></td>
              <td><?= $items['roz']; ?></td>
              <td><?= $items['mah']; ?></td>
              <td><?= $items['sal']; ?></td>
              <td><?= $items['mahalsdorshenasname']; ?></td>
              <td><?= $items['car']; ?></td>
              <td><?= $items['address']; ?></td>
              <td> <img src="<?= $items['imgsafheavalvadovom']; ?>" width="100px" height="100px"></td>
              <td> <img src="<?= $items['imgranande']; ?>" width="100px" height="100px"></td>
              <td>
                <button type='button' class='btn btn-outline-danger'><a class='text-black' href="a-editranande.php?edit=<?= $items['codemelii']; ?>"> ویرایش</a></button>
                <button type='button' class='btn btn-outline-warning'><a href="config/deleteranande.php?delete=<?= $items['codemelii']; ?>" class='text-black'>حذف</a></button>
              </td>
            </tr>
          <?php
          endforeach;
        else :
          ?>

          <tr>
            <td colspan="15">جستجوی شما نتیجه ای در بر نداشت</td>
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
<?php
include './footer/a-footer.php' ?>
</body>


















      
    
    

           

          
    <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
     crossorigin="anonymous">
    </script>
                            <?php
include 'footer/a-footer.php';
?>
    </body>