<?php 


function cal($r){

   echo '<h1>';

    for($i=$r+1; $i>0; $i--){
        if($i==1){
            echo "قلة";
            echo"<br>";
        }elseif($i==2){
          echo  "قلتين ";
          echo"<br>";
        }else{
            if($i>=11){
                
                echo $i." قلة " ;
                echo "<br>";
            }else{
                echo $i." قلات " ;
                echo "<br>";
            }
            

        }
        
    }

    echo '</h1>';



}

if(isset($_GET['submit'])){
    cal($_GET['num']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>

    <form action="" method="GET">
        <input name= "num"></inbut>
        <button name="submit">  كم قلة؟</button>
    </form>
    <style>
        *{
            text-align: right;
            direction: rtl;
        }
        form{
            
        }
    </style>
</head>
<body>
    
</body>
</html>