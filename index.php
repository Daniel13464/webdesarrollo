<?php
//phpinfo();//
echo "<h1>"."Aprendiendo PHP"."</h1><BR>";
$nombre = "Diana";
$edad = 10;
echo "Mi nombre es: ".$nombre." y mi edad es: ".$edad." anos";

if ($edad >= 18)
echo "Mayor de edad";
else
echo "Menor de edad";

$a = 1;
while($a <5)
{
    echo $a."<br>";
    $a++;
}
?>