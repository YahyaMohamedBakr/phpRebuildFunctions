<?php 

$hobs = [
    "footbal",
    "Sha555rrr",
    "kossomyat"
];

function abbas ($name, $age, $hobbies) {


    echo "<h1>My name is $name</h1> <h2>My age is $age</h2>";

    if($age > 30) {

        echo "<h1> A7eeeh </h1>";
        
    }

    echo "<h1>My Hobbies are: </h1>";

    foreach ($hobbies as $hoby) {

        echo "<p>$hoby</p>";
    }

}


abbas("Yahya",36,$hobs);