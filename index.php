<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>php boot camp</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>
<body>

<!-- <button><a href= "onetofive.php">1:5</a></button>
<button></button>
<button></button>
<button></button> -->

<?php  

function fun($p1, $p2){

    if($p2!=''){
        return;
    }else{
    
        echo 'true';
    }
    
    echo 'hello';
    }
fun(1, 'ahmed');

//$var = '';
 //$var = isset($var2)? $var2:'';
//$var= false;
$var=false;

if($var){
  echo 'var is  exist'  ;
}else{
    echo '';
}


$arr =[
    'Fullname'=> 'ahmed',
      'age'=>  36,
    'email'=>'ahmed@gmail.com'
];

//echo $arr[0];


?>

<table>
  <tr>
    <?php
  foreach($arr as $userDetialKey=>$val):?>
    <th><?=$userDetialKey?></th>
    
 
 
    <td><?= $val?></td>
    
  

<?php
  //echo $userDetialKey.'<br>';

endforeach;






?>
   </tr>
</table> 
</body>
</html>