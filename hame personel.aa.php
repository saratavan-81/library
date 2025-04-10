<?php
include './header/admin-header.php' ?>

<div class=" col-10">
  <button type="button" class="btn btn-outline-warning "><a href="sabtpersonel.php"> افزودن پرسنل</a></button>
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
        <th scope="col"> نام </th>
        <th scope="col">نام خانوادگی  </th>
        <th scope="col">کد پرسنلی </th>
        <th scope="col"> ایمیل </th>
        <th scope="col"> تلفن همراه </th>
        <th scope="col"> تلفن ثابت </th>
        <th scope="col">  روز تولد </th>
        <th scope="col">ماه تولد </th>
        <th scope="col"> سال تولد</th>
        <th scope="col">محل صذور شناسنامه </th>
        <th scope="col">سابقه سوء پیشینه </th>
        <th scope="col"> آدرس منزل</th>
        <th scope="col">عکس شناسنامه </th>
        <th scope="col">عکس پرسنلی </th>
        <th scope="col">گزینه ها </th>
      </tr>

      <?php
      include 'config/dbname.php';
      if (!isset($_GET['search'])) :
        $sql = "SELECT ROW_NUMBER() OVER() AS 'ردیف',
              namepersonel,
              familypersonel,
              codepersoneli,
              email,
              phone1,
              phonesabet,
              roze,
              mah,
              sal,
              mahalsdorshenasname,
              adamsopishine,
              safheavalvadvomeshenasname,
              imagepersoneli,
              address
            FROM personel";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) :
          while ($row = $result->fetch_assoc()) :
      ?>
            <tr>
              <td><?= $row['ردیف']; ?></td>
              <td><?= $row['namepersonel']; ?></td>
              <td><?= $row['familypersonel']; ?></td>
              <td><?= $row['codepersoneli']; ?></td>
              <td><?= $row['email']; ?></td>
              <td><?= $row['phone1']; ?></td>
              <td><?= $row['phonesabet']; ?></td>
              <td><?= $row['roze']; ?></td>
              <td><?= $row['mah']; ?></td>
              <td><?= $row['sal']; ?></td>
              <td><?= $row['mahalsdorshenasname']; ?></td>
              <td><?= $row['adamsopishine']; ?></td>
              <td><?= $row['address']; ?></td>
              <td> <img src="<?= $row['safheavalvadvomeshenasname']; ?>" width="100px" height="100px"></td>
              <td> <img src="<?= $row['imagepersoneli']; ?>" width="100px" height="100px"></td>
              <td>
                <button type='button' class='btn btn-outline-danger'><a class='text-black' href="a-editpersonel.php?edit=<?= $row['codepersoneli']; ?>"> ویرایش</a></button>
                <button type='button' class='btn btn-outline-warning'><a href="config/deletepersonel.php?delete=<?= $row['codepersoneli']; ?>" class='text-black'>حذف</a></button>
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
              namepersonel,
              familypersonel,
              codepersoneli,
              email,
              phone1,
              phonesabet,
              roze,
              mah,
              sal,
              mahalsdorshenasname,
              adamsopishine,
              safheavalvadvomeshenasname,
              imagepersoneli,
              address
            FROM personel
            WHERE CONCAT(namepersonel,
              familypersonel,
              codepersoneli,
              email,
              phone1,
              phonesabet,
              roze,
              mah,
              sal,
              mahalsdorshenasname,
              adamsopishine,
              safheavalvadvomeshenasname,
              imagepersoneli,
              address) LIKE '%$filtervalues%'";
        $query_run = mysqli_query($conn, $query);
        if (mysqli_num_rows($query_run) > 0) :
          foreach ($query_run as $items) : ?>
            <tr>
            <td><?= $items['ردیف']; ?></td>
              <td><?= $items['namepersonel']; ?></td>
              <td><?= $items['familypersonel']; ?></td>
              <td><?= $items['codepersoneli']; ?></td>
              <td><?= $items['email']; ?></td>
              <td><?= $items['phone1']; ?></td>
              <td><?= $items['phonesabet']; ?></td>
              <td><?= $items['roze']; ?></td>
              <td><?= $items['mah']; ?></td>
              <td><?= $items['sal']; ?></td>
              <td><?= $items['mahalsdorshenasname']; ?></td>
              <td><?= $items['adamsopishine']; ?></td>
              <td><?= $items['address']; ?></td>
              <td> <img src="<?= $items['safheavalvadvomeshenasname']; ?>" width="100px" height="100px"></td>
              <td> <img src="<?= $items['imagepersoneli']; ?>" width="100px" height="100px"></td>
              <td>
                <button type='button' class='btn btn-outline-danger'><a class='text-black' href="a-editpersonel.php?edit=<?= $items['codepersoneli']; ?>"> ویرایش</a></button>
                <button type='button' class='btn btn-outline-warning'><a href="config/deletepersonel.php?delete=<?= $items['codepersoneli']; ?>" class='text-black'>حذف</a></button>
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