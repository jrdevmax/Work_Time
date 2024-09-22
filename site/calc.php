<?php 
    if(isset($_POST['salario'])){
        $salario = $_POST['salario'];
    }else{
        echo "";
    }
    if(isset($_POST['op'])){
        $op = $_POST['op'];
        switch ($op) {
            case 1:
                $r = $salario / 200;
                echo "
                <tr>
                    <td>R$ : $salario</td>
                    <td>R$ : $r</td>
                </tr>
                ";
                break;
            case 2:
                $r = $salario / 220;
                $numeroFormatado = number_format($r,2);
                echo "
                <tr>
                    <td>R$ : $salario</td>
                    <td>R$ : $numeroFormatado</td>
                </tr>
                ";
                break;
            
            default:
            
                echo "
                <tr>
                    <td>Não Informado</td>
                    <td>Não Informado</td>
                </tr>
                ";
            
            break;
            
                
        }
    }else{
        echo "
                <tr>
                    <td>Não Informado</td>
                    <td>Não Informado</td>
                </tr>
                ";
    }
    
   
?>