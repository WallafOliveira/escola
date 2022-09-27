<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
    <h1>Calculo do peso ideal </h1>
    <form name="form1" method="post" action="" >
  
    <table border="1">
        <tr>
            <td>Nome: </td>
            <td> <input type="text" name="nome"> </td>
        </tr>

        <tr>
            <td>Altura: </td>
            <td> <input type="text" name="altura"> </td>
        </tr>

        <tr>
            <td>Sexo: </td>
            <td> <select name="sexo">
                    <option value="feminino"> feminino </option>
                    <option value="masculino"> masculino </option>
                </select>
            </td>
        </tr>

        <tr>
            <td></td>
            <td> <input type="submit" name="enviar" value="Enviar"> </td>
        </tr>

        </form>

        <tr>
            <td> Peso ideal <td>
            <td colspan="2">
            <!-- abra o PHP -->
            <?php
              if(@$_POST['enviar']){

                $nome = $_POST['nome'];
                $altura = $_POST['altura'];
                $sexo = $_POST['sexo'];

                //agora vem o IF para testar se é feminino ou masculino
                if($sexo =='feminino'){
                $pesoideal = (62.1 * $altura) - 44.7;

                }
                else{
                    $pesoideal = (72.7 * $altura) - 58;  
                }
              }

              
            
            ?>
            </td>         
        </tr>
    </table>

</body>
</html>

