<?php
// foreach lop/ index array

$names =["shohag","sweety","aysha","lely"];
foreach($names as $name){
    echo $name."<br>";
}

// associat array

$person =['a'=> 'Dhaka','b'=> 'Mirpur1','c'=> 'Mirpur2','d'=> 'Mirpur3'];
echo $person['b'];

// multidimensional

echo '<br>';
echo '<br>';
$persons=[
    ['abul',22,'Dhaka'],
    ['bablu',23,'Mirpur1'],
    ['karim',24,'Mirpur10'],
];
echo $persons[1][0];
echo '<br>';
echo '<br>';

// builting function
// in_array

var_dump (in_array("shohag", $names));
echo '<br>';
var_dump (is_array( $names));
echo '<br>';
echo '<br>';

// array_merge 

$merge = array_merge ($names,$person);
echo"<pre>";
print_r($merge);
echo '<br>';
echo '<br>';

// array_keys()

$keys = array_keys($person);
echo "<pre>";
print_r($keys);

// array_key_exists()

echo '<br>';
echo '<br>';

// shift

echo '<br>';
$oo =["shohag","sweety","aysha","lely"];
array_shift($oo);
array_unshift($oo,"first");
array_pop($oo);
array_push($oo,"last");
print_r($oo);

// array_map()

echo '<br>';
echo '<br>';
function myFun($n){
   return $n*$n;
}
$numbers = [1,2,3,4,5,6];
$result = array_map("myFun", $numbers);
echo "<per>";
print_r($result); 
echo "<per>";
array_slice($oo, 1, 2);

?>