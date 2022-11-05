
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <h4>Formulário do Censo 2022</h4>
</head>
<body>
    
<?php

$pessoa = array ("nome", "gender","ddd","telefone","data","email");

if(isset($_GET)){
    $pessoa = $_GET; 

}
 
$pessoa["nome"];
$pessoa["gender"];
$pessoa["ddd"];
$pessoa["telefone"];
$pessoa["data"];
$pessoa["email"];

PRINT_R($pessoa);


$linha = json_encode ($pessoa);
$arq = fopen ("form.txt", "a");
       fwrite ($arq, $linha);
       fclose ($arq);

       $arq = fopen ("form.txt", "r");

$linha = fgets ($arq);

$pessoa = json_decode ($linha);


print_r ($pessoa);
echo "<table>";
echo "<tr>";
foreach ($pessoa as $p){
echo "<td>".$p."</td>";
}
echo "</tr>";
echo "<table>";


?>

</body>
</html>
