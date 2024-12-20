<?php
$result = 78;
$grade = "A-";
if($result >= 50){
  echo "The result is ".$result." is pass <br>";
}
else{
  echo "The result is ".$result." is fail <br>";
}
//echo "The result is ".$result." with grade ".$grade;
// echo "<br>";
for($a = 1; $a < 10; $a++){
  echo "The number is ".$a."<br>";
}

// $b = 0;
$car = array("Volvo", "BMW", "Toyota");
// for($b = 1; $b < 3; $b++){
//   echo "I like ".$car[b];

//   if($b < 2){
//     echo", ";
//   }
// }
echo "I like ".$car[0].", ".$car[1]." and ".$car[2]."<br>";

$age = array("Peter" =>"35","Ben"=>"37","Joe"=>"43");
echo "Peter is ".$age['Peter']." years old. <br>";

$cars = array(
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Toyota",14,9)
);

echo $cars[0][0]." &nbsp;&nbsp; in stock: ".$cars[0][1]." &nbsp;&nbsp; sold: ".$cars[0][2]."<br>";
echo $cars[1][0]." &nbsp;&nbsp; in stock: ".$cars[1][1]." &nbsp;&nbsp; sold: ".$cars[1][2]."<br>";
echo $cars[2][0]." &nbsp;&nbsp; in stock: ".$cars[2][1]." &nbsp;&nbsp; sold: ".$cars[2][2]."<br>";
?>