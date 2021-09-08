<?php
$bianhao=$_POST['id'];



$pdo=new PDO('mysql:host=150.158.163.252;dbname=Usual','Usual','cjcj1314');
$stmt=$pdo->prepare('select * from certid where id ='.$bianhao);

$result=$stmt->execute();
$result=$stmt->fetch(PDO::FETCH_ASSOC);//关联数组print_r($a);

if($result['id']){
    echo '<div style="margin-top: 250px;" align="center"><img src="./img/'.$bianhao.'.jpg"></div>';

}else {
    
    echo "<script>alert('证书编号不存在'); history.go(-1);</script>";

}


?>