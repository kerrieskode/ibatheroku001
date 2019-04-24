<?php

/*
echo "Hello World. This is Version 2";
echo "<p>Password is " .getenv('DB_PASSWORD');*/

class DBike {
    public $number;
    public $name;
}

$listOfBikes = [];
$limit = getenv("LOOP");

for($i=0; $i < 10; $i++){

    $bike = new DBike;
    $bike->number=$i;
    $bike->name="Name $i";

    $listOfBikes[] = $bike;
}

//print_r($listOfBikes);

header('Content-Type: application/json');
$jsonOutput = json_encode($listOfBikes);

//Output the JSON data
echo $jsonOutput;