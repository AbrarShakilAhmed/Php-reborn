<?php
// $arr = [1,3,43,535,535,3,53,2,42,4324];
// foreach($arr as$key => $sing){
//   echo"\n".$key ." ". $sing;
// }
// for($i=0;$i<count($arr);$i++){
//   echo $arr[$i];
// }

// $arr = [
//   "name" => "Abrar",
//   "age" => "20",
//   "occ" => ["dev","tutor"],
//   "skill" => ["js","ts","php"]
// ];

// foreach($arr as $key =>&$single){
//   if(is_array($single)){
//     foreach($single as $tiny){
//   echo $key . " : " .$tiny. "\n";


//     }
//   }else{
//   echo $key . " : " .$single. "\n";

//   }
// }

$day = 3;

// switch($day){
//   case 1:
//     echo "Satarday";
//     break;
//   case 2:
//     echo "sunday";
//     break;
//   case 3:
//     echo "monday";
//     break;
//   case 4:
//     echo "twesday";
//     break;
//   case 5:
//     echo "wednesday";
//     break;
//   case 6:
//     echo "thursday";
//     break;
//   case 7:
//     echo "Friday";
//     break;
//   default :
//     echo "try a valid day";
// }

$CurrentDay = match($day){
  1=> "friday",
  2=> "satarday",
  3=> "Monday"
};
echo $CurrentDay;

?>