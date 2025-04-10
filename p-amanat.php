<?php
 include_once('./header/personel-header.php');
include_once('./config/dbname2.php');
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
<div class=" col-10">
     <br><br><br>
     <nav class="navbar navbar-light bg-light">
         <?php
         $karbar=$database->prepare("SELECT * FROM karbar WHERE codemeli=?");
         $karbar->bindValue(1,trim($_GET["codemeli"]));
         $karbar->execute();
         $karbar2=$karbar->fetch(PDO::FETCH_ASSOC);
         if(isset($karbar2)){
         ?>
        <div class="container-fluid">
          <a class="navbar-brand"> درخواست کتاب های امانتی <?php echo @$karbar2["namekarbar"]."  ".@$karbar2["familykarbar"];?></a>
<div class="row ">
    <?php
    }
    ?>
          <div class="  col-md-6  ">
              <form action="<?php echo $_SERVER["PHP_SELF"]."?";?>codemeli=<?php echo $_GET["codemeli"] ?>" method="post">
          <label class="form-label"> تاریخ به امانت گرفته شده  </label>
          <div class=" ">
            <input name="start" data-jdp type="text" class="form-control" placeholder="**/**/****" required>
          </div>
          </div>
                     
          <div class="  col-md-6  ">
          <label class="form-label"> تاریخ اتمام امانت    </label>
          <div class=" ">
            <input name="end" data-jdp type="text" class="form-control" placeholder="**/**/****" required>
            </div>

          </div>
         
        </div>
      </nav>
    <?php

    ?>
    <?php
    if(isset($_POST["sendamanat"])){
        $id=$_POST["id"];
        $amanat=$database->prepare("UPDATE `amanat` SET codepersoneli=?,tamanat=?,tetmamamant=? ,vaziat=? where id=?");
        $amanat->bindValue(1,$_SESSION["codepersoneli "]);
        $amanat->bindValue(2,$_POST['start']);
        $amanat->bindValue(3,$_POST['end']);
        $amanat->bindValue(4,1);
        $amanat->bindValue(5,$id);
        $amanat->execute();
        if($amanat->rowCount()>=1){
            echo "<div class='alert alert-success'>درخواست با موفقیت ثبت شد</div>";
        }

    }
$codepersenoli=@$_SESSION["codepersoneli "];
    echo $codepersenoli;
    if(isset($_POST["radamanat"])){
    $id=$_POST["id"];
    $amanat=$database->prepare("UPDATE `amanat` SET codepersoneli=? ,vaziat=? where id=?");
    $amanat->bindValue(1,$_SESSION["codepersoneli "]);
    $amanat->bindValue(2,2);
    $amanat->bindValue(3,$id);
    $amanat->execute();
    if($amanat->rowCount()>=1){
    echo "<div class='alert alert-info'>درخواست با موفقیت رد شد</div>";
    }

    }
    ?>
        <table class="table table-hover table-bordered a-ranandecolor  align-middle">
            <thead>
                                    
              <tr class="table-dark">
                <th scope="col">شماره</th>
                <th scope="col">  نام کتاب </th>
                <th scope="col">کد کتاب</th>
                <th scope="col">نام نویسنده کتاب</th>
                <th scope="col">مترجم کتاب</th>
                <th scope="col">  نوع دریافت امانت </th>
                <th scope="col">  وضعیت </th>
             


               



          




              </tr>
            </thead>
            <tbody>
            <?php
            $amanat=$database->prepare("SELECT * FROM amanat WHERE codekarbar=? ");
            $amanat->bindValue(1,$_GET["codemeli"]);
            $amanat->execute();
            $amanat2=$amanat->fetchAll(PDO::FETCH_ASSOC);
            if(isset($amanat2)){
                $i=1;
                foreach ($amanat2 as $item){
              ?>
              <tr>
                <th scope="row"><?php echo $i; ?></th>
                <td><?php echo $item["namebook"]; ?></td>
                <td><?php echo $item["codebook"]; ?></td>
                <td><?php echo $item["nevisande"]; ?></td>
                <td><?php echo $item["motarjem"]; ?></td>
                <td><?php echo $item["dariaft"]; ?></td>


                <td class="d-flex">
                    <?php
                    if($item["vaziat"]==0){
                    ?>
                    <input type="text" hidden name="id" value="<?php echo $item["id"]; ?>" id="">
                    <button type='submit' style="display: inline-block"  name="sendamanat" class='btn  d-flex btn-outline-primary '>تایید امانت</button>
                    </form>
                    <form action="<?php echo $_SERVER["PHP_SELF"]."?";?>codemeli=<?php echo $_GET["codemeli"] ?>" method="post">
                        <input type="text" hidden name="id" value="<?php echo $item["id"]; ?>" id="">
                        <button type='submit' style="display: inline-block" name="radamanat"  class='btn d-flex  btn-outline-dark'>رد امانت</button>
                    </form>
                        <?php
                    }
                        elseif($item["vaziat"]==1){?>
                            <button type='button' name="" class='btn btn-success'>تایید شد</button>
<?php
                        }else{
                        ?>
                        <button type='button' name="" class='btn btn-danger'>رد شد</button>
                        <?php
                    }
                        ?>
                        </td>
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
      
        <?php
include 'footer/p-footer.php';
?>
    

           

<!--
    <div class=" col-10">
     <br><br><br>
     <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand">دنبال چه میگردید؟</a>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="بنویسید..." aria-label="Search">
            <button class="btn btn-outline-success" type="submit">جستجو</button>
          </form>
        </div>
      </nav>
        <table class="table table-hover table-bordered border-success  align-middle text-center">
            <thead>
          
            </thead>
            <tbody>
              <tr class="table-light border-success">
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class= "btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModall"  >
                    ...</button></td>
                    <div class="modal fade" id="exampleModall" tabindex="-1" aria-labelledby="exampleModalLabell" aria-hidden="true" data-bs-backdrop="static">
                        <div class="modal-dialog modal-lg modal-dialog-centered  modal-dialog-scrollable  ">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">  کتاب های  </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                      

                                 
                                            <thead>
                                                                    
                                              <tr class="table-dark">
                                                <th scope="col">شماره</th>
                                                <th scope="col"> عنوان کتاب  </th>
                                                <th scope="col">نویسنده کتاب  </th>
                                                <th scope="col">مترجم کتاب  </th>
                                                <th scope="col">  کد کتاب   </th>
                                                <th scope="col">  موضوع    </th>
                                                <th scope="col">  سال انتشار    </th>
                                                <th scope="col">  وضعیت  </th>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                              </tr>
                                            </thead>
                                              <tr class="table-light border-success">
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Mark</td>
                                
                                            </tr>
                                              <tr class="table-secondary border-success">
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Mark</td>
                                
                                              </tr>
                                              <tr>
                                                <th scope="row">3</th>
                                                <td >Larry the Bird</td>
                                                <td>@twitter</td>
                                                <td >Larry the Bird</td>
                                                <td>@twitter</td>
                                                <td>@twitter</td>
                                                <td>@twitter</td>
                                                <td>Mark</td>
                                
                                
                                              </tr>
                                              <tr class="table-success border-success">
                                                <th scope="row">4</th>
                                                <td >Larry the Bird</td>
                                                <td>@twitter</td>
                                                <td>Larry the Bird</td>
                                                <td>@twitter</td>
                                                <td>@twitter</td>
                                                <td>@twitter</td>
                                                <td>Mark</td>
                                
                                
                                              </tr>
                                              <tr class="table-light border-success">
                                                <th scope="row">5</th>
                                                <td>Larry the Bird</td>
                                                <td>@twitter</td>
                                                <td>Larry the Bird</td>
                                                <td>@twitter</td>
                                                <td>@twitter</td>
                                                <td>@twitter</td>
                                                <td>Mark</td>
                                
                                              </tr>
                                              <tr class="table-secondary border-success">
                                                <th scope="row">6</th>
                                                <td>Larry the Bird</td>
                                                <td>@twitter</td>
                                                <td>Larry the Bird</td>
                                                <td>@twitter</td>
                                                <td>@twitter</td>
                                                <td>@twitter</td>
                                                <td>Mark</td>
                                
                                
                                              </tr>
                                              <tr >
                                                <th scope="row">7</th>
                                                <td>Larry the Bird</td>
                                                <td>@twitter</td>
                                                <td >Larry the Bird</td>
                                                <td>@twitter</td>
                                                <td>@twitter</td>
                                                <td>@twitter</td>
                                                <td>Mark</td>
                                
                                
                                              </tr>
                                              <tr class="table-success border-success">
                                                <th scope="row">8</th>
                                                <td >Larry the Bird</td>
                                                <td>@twitter</td>
                                                <td>Larry the Bird</td>
                                                <td>@twitter</td>
                                                <td>@twitter</td>
                                                <td>@twitter</td>
                                                <td>Mark</td>
                                
                                              </tr>
                                              <tr class="table-light border-success">
                                                <th scope="row">9</th>
                                                <td>Larry the Bird</td>
                                                <td>@twitter</td>
                                                <td>Larry the Bird</td>
                                                <td>@twitter</td>
                                                <td>@twitter</td>
                                                <td>@twitter</td>
                                                <td>Mark</td>
                                
                                              </tr>
                                        
                                            
                                
                                
                                            
                                        
                                   
                                
                                    
                                   
                                
                                 
                                            </tbody>         
                                            </table>                
                                    <br><br><br><br>
                                <div class="col-12 col-md-6 ps-6 justify-content-end">
                                  <button type="submit" class="btn btn-primary  rounded-pill btn-lg" data-bs-toggle="collapse" href="#collapseExample" id="liveToast"> ثبت</button>
                                  <button type="button" class="btn btn-secondary   rounded-pill" data-bs-dismiss="modal">بستن</button>
                      
                                  <div class="toast-container position-fixed bottom-0 start-0 p-3">
                                    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                      <div class="toast-header " dir="ltr">
                                        <img src="./image/p.png" class="rounded me-2" alt="..." height="40px" width="40px">
                                        <strong class="me-auto">Bootstrap</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                      </div>
                                      <div class="toast-body">
                                        Hello, world! This is a toast message.
                                      </div>
                                    </div>
                                  </div>
                                  
                                  <br><br>
                                  <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                      اطلاعات شما با موفقیت ثبت شد.
                                    </div>
                                  </div>
                                </div>
                                </div>
                                </div>
          </div>                      

            </tr>
            
              <tr class="table-secondary border-success">
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class= "btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal"  >
                    ...</button></td>

              </tr>
              <tr>
                <th scope="row">3</th>
                <td >Larry the Bird</td>
                <td>@twitter</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class= "btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal"  >
                    ...</button></td>


              </tr>
              <tr class="table-success border-success">
                <th scope="row">4</th>
                <td >Larry the Bird</td>
                <td>@twitter</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-outline-success ">...</button></td>

            

              </tr>
              <tr class="table-light border-success">
                <th scope="row">5</th>
                <td>Larry the Bird</td>
                <td>@twitter</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-outline-success ">...</button></td>

                
              </tr>
              <tr class="table-secondary border-success">
                <th scope="row">6</th>
                <td>Larry the Bird</td>
                <td>@twitter</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-outline-success ">...</button></td>

           

              </tr>
              <tr >
                <th scope="row">7</th>
                <td>Larry the Bird</td>
                <td>@twitter</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-outline-success ">...</button></td>


              </tr>
              <tr class="table-success border-success">
                <th scope="row">8</th>
                <td >Larry the Bird</td>
                <td>@twitter</td>

                <td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-outline-success ">...</button></td>

              </tr>
              <tr class="table-light border-success">
                <th scope="row">9</th>
                <td>Larry the Bird</td>
                <td>@twitter</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-outline-success ">...</button></td>


              </tr>
              <tr class="table-secondary border-success">
                <th scope="row">10</th>
                <td >Larry the Bird</td>
                <td>@twitter</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-outline-success ">...</button></td>

         
              </tr>
              <tr >
                <th scope="row">11</th>
                <td >Larry the Bird</td>
                <td>@twitter</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-outline-success ">...</button></td>

               
              </tr>
              <tr class="table-success border-success">
                <th scope="row">12</th>
                <td >Larry the Bird</td>
                <td>@twitter</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-outline-success ">...</button></td>


              </tr>
              <tr class="table-light border-success">
                <th scope="row">13</th>
                <td >Larry the Bird</td>
                <td>@twitter</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-outline-success ">...</button></td>

               
              </tr>
              <tr class="table-secondary border-success">
                <th scope="row">14</th>
                <td >Larry the Bird</td>
                <td>@twitter</td>

                <td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-outline-success ">...</button></td>

              </tr>
              <tr>
                <th scope="row">15</th>
                <td >Larry the Bird</td>
                <td>@twitter</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-outline-success ">...</button></td>

                
              </tr>
              <tr class="table-success border-success">
                <th scope="row">16</th>
                <td>Larry the Bird</td>
                <td>@twitter</td>
               <td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-outline-success ">...</button></td>


              </tr>
            


            
        
   

    
   

            </tbody>
          </table>  
        

    
    
    
        
             
         
        </div>
        </div>
      
    
    
-->


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
    <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
     crossorigin="anonymous">
    </script>
    </body>