<?php
include './header/personel-header.php'; ?>

<div class=" col-10">
  <button type="button" class="btn btn-outline-warning "><a href="p-addbook.php"> افزودن کتاب</a></button>
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
  <table class="table table-hover table-bordered hamebookp  align-middle ">
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
              <td> <img src="<?= $row['imagebook']; ?>" width="100px" height="100px"></td>
              <td>

                <button type='button' class='btn btn-outline-danger'><a class='text-black' href="p-editbook.php?edit=<?= $row['codebook']; ?>"> ویرایش</a></button>

                <button type='button' class='btn btn-outline-warning'><a href="config/deletebook.php?delete=<?= $row['codebook']; ?>" class='text-black'>حذف</a></button>
              </td>
            </tr>




          <?php
          endwhile;
          // endforeach; 
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
            WHERE CONCAT(namebook,mozo,codebook) LIKE '%$filtervalues%'";
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
              <td><?= $items['imagebook']; ?></td>
              <td>
                <button type='button' class='btn btn-outline-success'> امانت</button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="text-black">ویرایش</a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type='button' class='btn btn-outline-warning'><a href class='text-black' href=''>حذف</a></button>
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

<?php include 'footer/p-footer.php';
?>
</body>