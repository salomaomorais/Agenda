<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <h2>Formulário do CENSO 2022</h2>
</head>
<body>

<?php

if(isset($_GET['pessoa'])){
       $pessoa = $_GET["pessoa"]; 

}

?>

<form name="Formulario" method="GET" action="formulario1.php"></br></br>
        Nome:                   <input type="text" name="nome" ></br></br> 
        Gênero:                 </br></br>
                                <input type="radio" name="gender" value = "Masculino">Masculino</br>
                                <input type="radio" name="gender" value = "Feminino">Feminino</br>
                                <input type="radio" name="gender" value = "Não Desejo Informar" checked>Não Desejo Informar</br></br>
        Data de Nascimento:     <input type="texto" name="data"></br></br>
        DDD:                    <input type="texto" name="ddd"></br></br>
        Telefone:               <input type="texto" name="telefone"></br></br>       
        Email:                  <input type="texto" name="email"></br></br>
                                <button nome="Realizar">Realizar</button>
 
                
</body>
</html>

