<?php
// A and B are teams of football we can end Football match  if any team get 5 goals how to make this if $goals array describes match goals
$g=[
    'A',
    'A',
    'B',
    'A',
    'B',
    'A',
    'B',
    'A'
];

//this is one solution

function getWinner1($goals){
    $agoals = $bgoals = 0;
    foreach($goals as $goal){
        $goal == 'A'? $agoals += 1 : $bgoals += 1;
    }

    return $agoals == 5 ? 'A': 'B';
}


//this is the best simple solution 
function getWinner($goals){
   

    return $goals[count($goals)-1];
}

echo getWinner1($g);
echo getWinner($g);