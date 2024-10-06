<?php
//**** Find maximum number from an array ****//
$number = [20, 30, 40, 50, 60, 70, 80, 90];
$maxNumber = max($number);

echo $maxNumber . "<br>";


//**** Find 2nd max number from an array ****//
$numberList = [10, 20, 30, 40, 50, 60, 70, 80, 90];
$secondMaxNumber = 

// echo $secondMaxNumber . "<br>";

//**** Sort array from min to max ****//





//**** Calculate average number of an array ****//
// $num = [60, 80, 90, 85, 60];
// $total = 

// $subjectNum = 5;
// $averageNum = $num % $subjectNum;




//**** Merging 2 different types of array together  *****//
$color = ["Red", "Black", "Aqua", "Pink", "Purple"];
$age = [20, 40, 55, 45, 70, 60];
$together = array_merge($color, $age);

echo "<pre>";
print_r ($together);
echo "</pre>";


//**** Search data from an array ****// 
$cities = ["Dhaka", "Chittagong", "Sylhet", "Khulna"];

if (in_array("Dhaka", $cities)){
    echo "Dhaka is in the array.<br>";
 } else{
    echo "Dhaka is not in the array.<br>";
 }


 //**** Show array data in lowercase and uppercase ****//
 $sentence = ["Hello Ayan", "How are you?"];
 echo strtolower($sentence) . "<br>";
 echo strtoupper($sentence) . "<br>";



 //**** Get unique values in an array  ****//
 $duplicatefruits = ["banana", "mango", "orange", "pineapple", "pepayaa", "orange", "mango", "coconut"];
 $uniqueFruits = array_unique($duplicatefruits);

 echo "<pre>";
 print_r($uniqueFruits);
 echo "</pre>";


 //**** Remove duplicates  values from an array ****//
 $duplicatenames = ["Tamim", "Shakil", "Sowrab", "Sowraim", "Shakil", "Sowrab", "Soud", "Montasir", "Sowraim"];
 $diffrentNames = array_diff($duplicatenames);

 echo "<pre>";
 print_r($diffrentNames);
 echo "</pre>";


 //**** Check if email address is unique ****//




 //**** Check unique username ****//




 //**** Merge 2 comma separated lists with unique values only ****//



 
 //**** Difference between 2 multi-dimensional arrays ****//





//**** Check if all values are string or not ****//





//**** Union of 2 arrays ****//





//**** Filter out array data with some specific keys ****//






//**** Filter a multi-dimensional array ****//





//**** Remove all white spaces from an array ****//




//**** Combine 2 array and use one array data as keys and others as values ****//






//**** Convert string to array ****//






