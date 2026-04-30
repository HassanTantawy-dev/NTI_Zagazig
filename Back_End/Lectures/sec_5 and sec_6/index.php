<?php

// echo "Hello, World!";

// $name = "Hassan";
// echo "My name is $name.";
// echo "<hr>";



// echo gettype($name);
// echo "<hr>";


// echo "5"+5;
// echo "<br>";
// echo"<br>";
// // echo "Hassan"+5;
// echo (int) "Hassan"+5;
// echo "<hr>";
// echo (int)10.5+10;

// echo "<hr>";
// // if (condition) 

// $age = 10;
// if ($age >= 15) {
//     echo "you can register.";
// } elseif ($age >= 11) {
//     echo "You can't register.";
// } else {
//     echo "not valid.";
// }



// echo "<hr>";
// $age = 20;
// $gender = "male";
// if ($age >= 20){
//     if ($gender =='male'){
//         echo "successfully registered.";
//     }
// }
// else {
//     echo "not valid.";
// }


// if (""){
//     echo"true";
// }

//= 
// ==  value only
// === value and type
// != not equal
// <> not equal
// == not equal value or type

// echo "<hr>";
// $number = 10;
// if ($number > 0) {
//     echo "positive number.";
// } elseif ($number < 0) {
//     echo "negative number.";
// } else {
//     echo "zero.";
// }

// // short hand if else
// echo "<hr>";
// $age = 20;
// echo ($age >= 18) ? "good" : "not good";


//==========================loob==================



// for($i=1 ;$i<=50; $i++){
//     if($i%5==0){
//         echo "Boom";
//         echo "<br>";
//         continue ;
//     }
//     echo $i."<br>";
// }
// echo "<hr>";

//==========================array====================

//$student = [];
//$student = array();
// $student = ['ahmed', 'hassan','ibrahim',50,true]; 
// echo $student[0];
// echo "<br>";
// echo $student[1];
// echo "<br>";
// echo $student[2];
// echo "<br>";
// echo $student[3];
// echo "<br>";
// echo $student[4];
// echo "<br>";
// echo "<hr>";

//===================== associative array================

// $student = [
//     'name' => 'ahmed',
//     'age' => 20,
//     'gender' => 'male',
//     'address' => 'cairo',
// ];
// foreach ($student as $key => $value) {
//     echo "$key => $value <br>";
// }
// echo "<hr>";

// $students =[
//     ['ahemd', 20, 'male', 'cairo'],
//     ['hassan', 20, 'male', 'cairo'],
//     ['ibrahim', 20, 'male', 'cairo'],
//     ['mohamed', 20, 'male', 'cairo'],
//     ['ali', 20, 'male', 'cairo'],
// ];
// //print_r($students[2]);
// echo $students[2][0];
// echo "<hr>";

// $teacher = [
//     'a'=>['ahmed', 20, 'male', 'cairo'],
//     'b'=>['hassan', 20, 'male', 'cairo'],
//     'c'=>['ibrahim', 20, 'male', 'cairo'],
//     'd'=>['age'=>20, 'gender'=>'male', 'city'=>'cairo'],
// ];
// echo $teacher['d']['gender'];
// echo "<hr>";
// 

//ps

//=====================sort================

// $number = [4,3,5,7];
// $num=count($number);
// for ($i = 0; $i < $num-1; $i++) {
//     for ($j = 0; $j < $num-$i-1; $j++) {
//         if ($number[$j] > $number[$j+1]) {
//             $temp = $number[$j];
//             $number[$j] = $number[$j+1];
//             $number[$j+1] = $temp;
//         }
//     }
// }

// print_r($number);

//=====================average================
// $students =[
//     'marwa'=>['arabic'=>75,'english'=>35,'math'=>90],
//     'hassan'=>['arabic'=>70,'english'=>40,'math'=>100],
//     'ahmed'=>['arabic'=>80,'english'=>30,'math'=>85],
// ];
// /*
// 1- get the average with the name of the student
// 2- get the top student name and his marks
// */

// foreach($students as $name=>$student){
//     $average=array_sum($student)/count($student);
//     echo "the average of $name is $average<br>";
// }
// $total =0;
// $top = "";
// foreach($students as $name=>$value){
//     $totalmark=array_sum($value);
    
//     if($totalmark>$total){
//         $total=$totalmark;
//         $top=$name;
//     }
// }
// echo "the top student is $top with an average of $total";

//3- write a function that takes an array and return the sum
function my_array_sum($array){
    $total =0;
    foreach($array as $value){
        $total+=$value;
    }
    return $total;
}

//4- whrie a function that return the max number in an array

function array_max($array){
    $max = $array[0];
    foreach($array as $value){
        if($value>$max){
            $max=$value;
        }
    }
    return $max;
}

//exaple
echo my_array_sum([1,2,3,4,5]);
echo "<br>";
echo array_max([1,2,3,4,5]);
?>
