<?php
class Calculadora{
    private $servico;
    private $valorServico;
    private $quantidadePecas;
    private $valorPeca;

            public function calcularCustoManutencao(){
                if (isset ($_POST ['calcular'])){
                    if ($_POST ['servico'] ){
                        $resultado = $_POST ['valorServico']+ $_POST ['quantidadePecas'] *$_POST ['valorPeca'];
                        return "Valor total: R$ ".$resultado;
                    }
        
                }
            }
        }   
 ?>
