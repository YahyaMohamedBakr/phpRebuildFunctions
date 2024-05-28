<?php 


function fibonacci($N){

$old=0;
$new=1;
$num_arr=[
  0=> $old,
  1=> $new,

];
 for($i=0; $i<=$N; $i++){
  $next =$old+$new;
    $num_arr[]=($next);
    $old= $new;
    $new =$next;
    
 }

foreach ($num_arr as $num){
   echo $num.', ';
}
 return $num;
}


echo'<br>';
 fibonacci (20);
 echo'<br>';
  // echo '<pre>';
  // var_dump(fibonacci (20));
  // echo '</pre>';


// $num = 0;  
// $n1 = 0;  
// $n2 = 1;  
// echo $n1.' '.$n2.' '; 
// while ($num < 20 )  
// {  
//     $n3 = $n2 + $n1;  
//     echo $n3.' ';  
//     $n1 = $n2;  
//     $n2 = $n3;  
//     $num = $num + 1;

//   }

function Prime ($num){
  
if(($num != 2) && ($num != 3) ){
    if($num%3===0 || $num%2===0){
      echo'no';
    }else{
        echo 'yes';
    }
}else{
  echo 'yes';
}


}

Prime(2);
echo'<br>';


// for($i=0; $i<50; $i++){

//   echo Prime ($i)."   /number is $i";
//   echo '<br>';

// }



echo'<br>';
function squareRoot($N){
  for ($i=1; $i<=$N; $i++){

    if($N/$i==$i ){
      echo $i;
    }

  }

}

//squareRoot(25);


function factorial($N){
    $num=$N;
  for($i=$N-1; $i>0;$i--){
   
   //$arr[]=$i * $num;

   $num = $i*$num;
   
  }


   return $num;

}
echo'<br>';
echo '<pre>';
var_dump(factorial(10));
echo '</pre>';


echo'<br>';


function SumNaturalNumbers($n){
  $num=0;
  for($i=$n; $i>=0 ; $i--){
    $num += $i;
  }

  echo $num;
}
echo'<br>';
echo '<pre>';
SumNaturalNumbers(10);
echo '</pre>';



//get average
function average ($n1='', $n2='', $n3=''){
$arr=[$n1, $n2, $n3]; // array contian prametars
$newArr=[];
foreach($arr as $length){ //get true prametars in new array
  if (!empty ($length)){
    $newArr[] =$length;
  }
}

$num =0;
$count = count($newArr);
  for ($i = 0 ; $i < $count; $i++){ //sum values of new array
   
   $num+= $newArr[$i];

  }

 echo $num / count($newArr); //Divide the sum of the values by their number

}
echo'<br>';
average(2,4,9);

function evenOrOdd($n){

  if($n%2 ==0){
    echo 'even';
  }else{
    echo'odd';
  }

}
echo'<br>';
evenOrOdd(5);


function squareNum($num){
  echo $num*$num;
}
echo'<br>';
squareNum(5);


//even and off if else chal
function eAndO($n){

  if($n>=0 && $n<=1000){
    if($n%2 ==0){
      return 'even';
    }else{
      return'odd';
    }
  }else{
    return;
  }

}

echo'<br>';

$t=eAndO(1);


 echo "new  ".$t;
 echo'<br>';


 //helloworled if else chal
 function helloWorled($n){

  if(($n%3)==0 && ($n%5)==0 ){
    echo'HelloWorld';
  }elseif($n%3==0){
    echo'Hello';
  }elseif($n%5==0){
    echo'World';
  }else{
    echo $n;
  }

 }

 
 helloWorled(9);
 echo'<br>';