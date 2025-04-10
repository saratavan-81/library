<?php
session_start();
 include_once('./header/karbar-header.php');
include './config/dbname2.php';
 if(empty($_SESSION["login"])){
     header('location:../index.php');
 }
?>

    <div class=" col-10">
     <br><br><br>
     <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand">کتاب های امانتی</a>
          <form class="d-flex">
  
          </form>
        </div>
      </nav>
        <table class="table table-hover table-bordered colorborderamanatk  align-middle">
            <thead>
                                    
              <tr class="table-dark">
                <th scope="col">شماره</th>
                <th scope="col"> نام پرسنل </th>
                <th scope="col">  نام کتاب </th>
                <th scope="col">کد کتاب</th>
                <th scope="col">نام نویسنده کتاب</th>
                <th scope="col">مترجم کتاب</th>
                <th scope="col">  وضعیت </th>
                <th scope="col">   تاریخ به امانت گرفته  شده </th>
                <th scope="col">  تاریخ اتمام امانت </th>
                <th scope="col">  نحوع دریافت امانت </th>
                  <th scope="col">تمدید کتاب</th>
              </tr>
            </thead>
          
            <tbody>
            <?php
            $amanat = $database->prepare("SELECT * FROM amanat WHERE vaziat=1 and codekarbar=?");
            $amanat->bindValue(1,$_SESSION["codemeli"]);
            $amanat->execute();
            $all = $amanat->fetchAll(PDO::FETCH_ASSOC);
            if(isset($all)){
            $i=1;
            foreach ($all as $item){

            $persenel = $database->prepare("SELECT * FROM personel WHERE codepersoneli=?");
            $persenel->bindValue(1,$item["codepersoneli"]);
            $persenel->execute();
            $persenel2 = $persenel->fetch(PDO::FETCH_ASSOC);

            ?>
              <tr>
                <th scope="row"><?php echo $i ?></th>
                <td><?php echo $persenel2["namepersonel"].$persenel2["familypersonel"] ?></td>
                <td><?php echo $item["namebook"] ?></td>
                <td><?php echo $item["codebook"] ?></td>
                <td><?php echo $item["nevisande"] ?></td>
                <td><?php echo $item["motarjem"] ?></td>
                <td><?php  if($item["vaziat"]==1){echo "فعال";}else{echo "غیر فعال";} ?></td>
                <td><?php echo $item["tamanat"] ?></td>
                <td><?php echo $item["tetmamamant"] ?></td>
                <td><?php echo $item["dariaft"] ?></td>
                  <td><a class="btn btn-info" href="tamdid amanat.php?id=<?php echo $item["id"] ?>">تمدید امانت</a></td>

            </tr>
            <?php
            $i++;
}
            }



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
include 'footer/k-footer.php';
?>
    </body>