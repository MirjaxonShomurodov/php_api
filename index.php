 


<?php
//birinchi misol 
$a = $_GET['a'];
$b = $_GET['b'];
echo "Yig'indi: ".($a + $b);
?>

<?php
//ikkinchi misol
$arr = array(
    "nok"=>10,
    "olma"=>15,
    "o'rik"=>16,
    "shaftoli"=>18,
    "anor"=>14,
    "behi"=>17,
    "limon"=>20,
    "banan"=>25,
    "kivi"=>24,
);
foreach ($arr as $key => $value){
    echo $key ." => ". $value ."<br>";
}

?>

<?php
// uchunchi misol
$matritsa = array();
for ($i = 1; $i <= 4; $i++) {
    $qator = array();
    for ($j = 1; $j <= 4; $j++){
        $qator[] = $i * 4 + $j;
    }
    $matritsa[] = $qator;
    }

$satr = count($matritsa);
$ustun = count($matritsa);

for ($i = 0; $i < $satr; $i++) {
    for ($j = 0; $j < $ustun; $j++) {
        echo $matritsa[$i][$j] . " ";
    }
    echo "<br>";
    }

?>
<?php
// turtinchi misol
$arr = ['nok', 'olma', 'shaftoli', 'behi', 'anor', 'banan', 'gilos', 'kivi', 'qulupinay', 'olcha'];
$brr = [12, 14, 13, 21, 23, 31, 24, 26, 28, 30];
for($i = 0; $i<count($arr); $i++){
    $crr = array($arr[$i]=>$brr[$i]);
    foreach($crr as $key=>$value){
        echo $key." => ".$value."<br>";
    }
}

?>
<?php
// turtinchi misol 
$x = $_GET['x'];
$y = $_GET['y'];
echo sqrt($x*$y);
?>


<?php
// beshinchi misol
$x = "Tempore deserunt beatae alias distinctio non possimus illo atque aut repellat itaque quod velit enim?";
$y = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
$a = $x." ".$y;
$brr = explode(" ", $a);
foreach ($brr as $b) {
    echo"".$b." => ". strlen($b)."<br>";
}
?>

<?php
// oltinchi misol 
$arr = array(
    "nok"=>21,
    "olma"=>15,
    "o'rik"=>10,
    "shaftoli"=>18,
    "anor"=>14,
    "behi"=>11,
    "limon"=>20,
    "banan"=>15,
    "kivi"=>24,
);
asort($arr);
foreach ($arr as $key => $value){
    echo $key ." => ". $value ."<br>";
}

?>
<?php
// sakkizinchi misol 
$doller = $_GET['doller'];
echo "So'm: ".$doller * 12.561;
?>