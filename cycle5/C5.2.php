<html>
<head>
<title> Max out of three </title>
</head>
<body>
<?php
$a = 1;
$b = 4;
$c = 3;
if($a > $b)
{
if($a > $c)
echo "Maximum number a = $a";
else
echo "Maximum number c = $c";
}
else
{
if($c > $b)
echo "Maximum number c = $c";
else
echo "Maximum numbe b = $b";
}
?>
</body>
</html>