<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 01 - PHP</title>
</head>
<body>
    <?php
        //para criar uma variável no PHP basta utilizar $ e o nome da vari´åvel que deseja em seguinda
        $titulo = "Primeira Aula e PHP";
    ?>

    <h1>
        <?php
            //para exibir algo na tela com PHP utilizamos o echo
            echo $titulo;
        ?>
    </h1>

    <hr>

    <h1>Condicionais</h1>

    <p>IF / ELSE</p>
    <p>Crie uma condição que valide se uma pessoa pode votar ou não</p>
    
    <?php
        function podeVotar ($idadeEleitor) {
            //pipe = ||
            if ($idadeEleitor >= 16 && $idadeEleitor < 18 || $idadeEleitor > 70) {
                return "Voto Facultativo";
            } else if ($idadeEleitor >= 18 && $idadeEleitor <= 70){
                return "Voto Obrigatório";
            } else {
                return 'Não Vota';
            }
        }
    ?>

    <hr>
    
    <h1>Função</h1>

    <?php echo podeVotar(11); ?>

    <br><hr>

    <p>SWITCH CASE</p>

    <?php
        function validaNumero ($i) {
            switch ($i) {
                //case i == 0:
                case 0:
                    echo "i igual 0";
                    //break; é obrigatório
                    break;
                //case i == 1:
                case 1:
                    echo "i igual 1";
                    break;
                //case i == 2:
                case 2:
                    echo "i igual 2";
                    break;
                default:
                    echo "i é um valor estranho";
                    break;
            }
        }
    ?>
        
    <br> <?php echo validaNumero (1); ?>
    
    <br><br>

    <?php
        function validaGenero ($x) {
            switch ($x) {
                case 1:
                    return "Gênero informado é Masculino";
                    break;

                case 2:
                    return "Gênero informado é Feminino";
                    break;

                default:
                    return "Gênero não informado";
                    break;
            }
        }
    ?>

    <?php echo validaGenero ("feminino"); ?>

    <br><br><hr>

    <h1>ARRAY   </h1>
    <p>Array Simples</p>

    <?php
        $animais = [];

        $animais = ["Leão", "Girafa", "Cachorro", "Gato"];

        //forma de debugar variáveis no PHP pra saber tipos, valores, tamanho...
        
        echo "<pre>";
            var_dump ($animais);
        echo "</pre>"
    ?>

    <br><p>Array Associativo</p>

    <?php
        $usuario = [
            "nome" => "George",
            "email" => "george_hfc@yahoo.com.br",
            "senha" => "123456"
        ];
    ?>
</body>
</html>