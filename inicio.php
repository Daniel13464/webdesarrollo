<?php
//phpinfo();//
echo "<h1>"."Aprendiendo PHP"."</h1><BR>";
$nombre = "Diana";
$edad = 10;
echo "Mi nombre es: ".$nombre." y mi edad es: ".$edad." años"."<br>";

if ($edad >= 18)
echo "Mayor de edad"."<br>";
else
echo "Menor de edad"."<br>";

$a = 1;
while($a <= 5)
{
    echo $a."<br>";
    $a++;
}
?>