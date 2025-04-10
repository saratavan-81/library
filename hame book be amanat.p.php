<?php
 include_once('./header/personel-header.php') ;
include './config/dbname2.php';
?>

    <div class=" col-10">
     <br><br><br>
     <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand">دنبال چه میگردید؟</a>
          <form class="d-flex" method="get">
            <input class="form-control me-2" name="search" type="search" placeholder="بنویسید..." aria-label="Search">
            <button class="btn btn-outline-success" type="submit">جستجو</button>
          </form>
        </div>
      </nav>
        <table class="table table-hover table-bordered colorborder   align-middle">
            <thead>
                                    
              <tr class="table-dark">
                <th scope="col">شماره</th>
                <th scope="col"> کد پرسنلی </th>
                <th scope="col">نام کاربر </th>
                <th scope="col">نام خانوادگی کاربر</th>
                <th scope="col"> کد کاربر </th>
                <th scope="col">تلفن همراه </th>
                <th scope="col">ایمیل</th>
                <th scope="col"> عنوان کتاب  </th>
                <th scope="col">نویسنده کتاب  </th>
                <th scope="col">مترجم کتاب  </th>
                <th scope="col">  کد کتاب   </th>
                <th scope="col">  موضوع    </th>
                <th scope="col">  سال انتشار    </th>
                <th scope="col">   تاریخ به امانت گرفته شده     </th>
                <th scope="col">   تاریخ اتمام امانت   </th>










              </tr>
            </thead>
            <tbody>
            <?php
            if(!isset($_GET["search"])):
            $amanat = $database->prepare("SELECT * FROM amanat WHERE vaziat=1");
            $amanat->execute();
            $all = $amanat->fetchAll(PDO::FETCH_ASSOC);
            if(isset($all)):
                $i=1;
                foreach ($all as $item):
                    ?>

              <tr>
                <th scope="row"><?php echo $i; ?></th>
                <td><?php echo $item["codepersoneli"]?></td>
                <td><?php echo $item["namekarbar"]?></td>
                <td><?php echo $item["familykarbar"]?></td>
                <td><?php echo $item["codekarbar"]?></td>
                <td><?php echo $item["phone1"]?></td>
                <td><?php echo $item["email"]?></td>
                <td><?php echo $item["namebook"]?></td>
                <td><?php echo $item["nevisande"]?></td>
                <td><?php echo $item["motarjem"]?></td>
                <td><?php echo $item["codebook"]?></td>
                <td><?php echo $item["mozo"]?></td>
                <td><?php echo $item["saleenteshar"]?></td>
                <td><?php echo $item["tetmamamant"]?></td>
                <td><?php echo $item["tetmamamant"]?></td>

              </tr>

                    <?php
                    $i++;
                endforeach;
            endif;
            endif;
            ?>
            <?php
            include 'config/dbname.php';
            if (isset($_GET['search'])) :
                $filtervalues = trim($_GET['search']);
                $query = "SELECT ROW_NUMBER() OVER() AS 'ردیف',
             codepersoneli, namekarbar, familykarbar, codekarbar,
       phone1, phone2, email, namebook, nevisande, motarjem,
        mozo, saleenteshar, tamanat, tetmamamant,codebook
            FROM amanat
            WHERE CONCAT(codepersoneli, namekarbar, familykarbar, codekarbar,
       phone1, phone2, email, namebook, nevisande, motarjem,
        mozo, saleenteshar, tamanat, tetmamamant,codebook) LIKE '%$filtervalues%'";
                $query_run = mysqli_query($conn, $query);
                if (mysqli_num_rows($query_run) > 0):
            foreach ($query_run as $items) : ?>
            <tr>
                <td><?= $items['ردیف']; ?></td>
                <td><?php echo $items["codepersoneli"]?></td>
                <td><?php echo $items["namekarbar"]?></td>
                <td><?php echo $items["familykarbar"]?></td>
                <td><?php echo $items["codekarbar"]?></td>
                <td><?php echo $items["phone1"]?></td>
                <td><?php echo $items["email"]?></td>
                <td><?php echo $items["namebook"]?></td>
                <td><?php echo $items["nevisande"]?></td>
                <td><?php echo $items["motarjem"]?></td>
                <td><?php echo $items["codebook"]?></td>
                <td><?php echo $items["mozo"]?></td>
                <td><?php echo $items["saleenteshar"]?></td>
                <td><?php echo $items["tamanat"]?></td>
                <td><?php echo $items["tetmamamant"]?></td>

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