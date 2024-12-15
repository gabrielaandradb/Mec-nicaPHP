<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href="estilo.css">
    <title>Mecânica </title>

<?php include ('ManutencaoCarro.class.php')?>  

</head>
<body>
    <form name="form" method="post" action="">
        <h1> Oficina Mecânica  </h1>
        Informe o serviço realizado: <input type="text" name="servico" > <br>
        Valor do serviço: <input type="text" name="valorServico"> <br>
        Quantidade de peças utilizadas: <input type="text" name="quantidadePecas"> <br>
        Valor por peça: <input type="text" name="valorPeca"> <br>

        <input type="submit" name="calcular" value="Calcular"/> 
    <div>
<?php
$minhacalculadora= new Calculadora();

 echo $minhacalculadora ->calcularCustoManutencao();
?> 
</div>
        
</form>
   
    </body>
</html>
