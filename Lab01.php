


<?php
print ("<br><br> EX:4");
print("<br>Hello World1<br>");
echo "Hello World2";
printf("<br> Hello World3");
?>
//from ex4 onward

<?php
print ("<br><br> EX:5");
$intNum = 472;
$doubleNum = 29.3;
$boolean = true;
$string = "Web Code Geeks";
$array = array("Pineapple", "Grapefruit", "Banana");
echo $string;
print ("<br>");
for ($i=0; $i < 3; $i++) {
    echo $array[$i]; print(",");
}
?>

<?php
print ("<br><br> EX:6");
print ("<br>");
$age = 19;
if ($age < 20) {
    echo "You are a teenager";
}
else  print"You are gay";
?>

<?php
print ("<br><br> EX:7");
$age = 25;
//if ($age < 20) {
//    echo "You are a teenager";
//}else {
//    echo "You are an adult";
//}
//?>

<?php
print ("<br><br> EX:8");
$age = 20;
if ($age < 10) {
    echo "You are a kid";
} elseif ($age <= 20) {
    echo "You are a teenager";
} else {
    echo "You are an adult";
}

print ("<br><br> EX:9");
for ($i=0; $i < 5; $i++) {
    echo "<br>This is loop number $i";
}

print ("<br><br> EX:10");
$i=0; // initialization
while ($i < 5) {
    echo "<br>This is loop number $i";
    $i++; // step
}

print ("<br><br> EX:11");

$i = -1; // initialization
do {
    $i++; // step
    echo "<br>This is loop number $i";
}while ($i < 5); // condition

print ("<br><br> EX:12");
$var = array('a','b','c','d','e');
// array declaration
foreach ($var as $key) {
    echo "<br>"."Element is $key";
}

?>





