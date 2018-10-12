<?php
$x = rand(0,100);
$a = 1;
$b = 1;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

while ($a<$x) {
    $c = $a;
    $a = $a + $b;
    $b = $c;
    }
if ($a > $x) {
echo "Задуманное число $x НЕ входит в числовой ряд";
} elseif ($a == $x) {
echo "Задуманное число $x входит в числовой ряд";
}

?>

</body>
</html>

