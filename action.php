<?php
$localhost="localhost";
$namedb="root";
$passworddb="";
$db="projectwebtavan";

try{
    $conn=new mysqli($localhost,$namedb,$passworddb,$db);
    $conn->set_charset('utf8');

}
catch (\Throwable $th) {
    echo "<script>
    window.alert('خطا در اتصال به دیتابیس');
    history.back();
    </script>";

}
$output='';
if(isset($_POST['query'])){
    $search=$_POST['query'];
    $stmt=$conn->prepare("SELECT * FROM book WHERE codebook LIKE  CONCAT('%',?,'%') OR namebook LIKE CONCAT('%',?,'%') ");
    $stmt->bind_param("SS",$search,$search);
}
else
{
    $stmt=$conn->prepare("SELECT * FROM book");
}
$stmt->execute();
$result=$stmt->get_result();
if($result->num_rows>0){
    $output="   <thead>

    <tr>
      <th>شماره</th>
      <th> عنوان کتاب </th>
      <th>موضوع</th>
      <th>کد کتاب</th>
      <th> نام نویسنده</th>
      <th>سال انتشار </th>
      <th> مترجم</th>
      <th> جلد</th>
      <th> تصویر کتاب</th>
      <th> امانت</th>

    </tr>
    </thead>
    <tbody>";
    while($row->$result->fetch_assoc()){
        $output .="
        <tr>
    <td>" . $row['ردیف'] . "</td>" . "<td>" . $row['namebook'] . "</td><td>" . $row['mozo'] . "</td><td>" . $row['codebook'] . "</td><td>" . $row['nevisande'] . "</td><td>" . $row['salenteshar'] . "</td><td>" . $row['motrjem'] . "</td><td>" . $row['jeld'] . "</td><td>" . $row['imagebook'] . "</td>

        </tr>";
    }
    $output .="</tbody>";
    echo $output;
}
else
{
    echo "no found";
}




?>