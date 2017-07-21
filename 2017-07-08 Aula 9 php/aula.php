<html>

<body>

<?php

$a = 5;
$b = 6;
$c = $a + $b;

echo "soma=" . $c . "\n";

if ($a > 2)
	echo "maior que 2";
else
	echo "não é maior que 2";

$i = 1;
while ($i <= 10)
{
	echo "<h1>" . $i . "</h1>";
	$i++;
}

$x = 1;
$y = "1";
if ($x === $y)
	echo "iguais!";
else
	echo "diferentes!";

echo "<h2>" . quadrado(2) . "</h2>";

function quadrado($num)
{
	return $num * $num;
}

echo phpinfo();

?>

</body>

</html>