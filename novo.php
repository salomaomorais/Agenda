novo.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$arq = fopen ("form.txt", "r");

$linha = fgets ($arq);

$pessoa = json_decode ($linha);

print_r ($pessoa);

echo "<table>";
echo "<tr>";
foreach ($pessoa as $p){

print_r (table.$p.tr);
}

echo "</tr>";
echo "</table>";

?>

</body>
</html>