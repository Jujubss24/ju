<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulário</title>
</head>
<body>
<?php
    $nome = $_REQUEST["nome"];
    $idade = $_GET["idade"];
    $turno = isset($_GET["turno"])?$_GET["turno"]:1;

    ?>
        <div>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="idnome">
        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="ididade">
        <input type="radio" name="turno" id="manha" value="1" checked>
        <label for="manha">Manhã</label>
        <input type="radio" name="turno" id="tarde" value="2">
        <label for="tarde">Tarde</label>
        <input type="radio" name="turno" id="noite" value="3">
        <label for="noite">Noite</label>
        <input type="submit" value="enviar">
    </form>
    </div>
    <?php
           if ($idade <= ){
            switch ($turno) {
             case 1:
                echo "Bom dia $nome!  Mais uma manhã de sol chegou repleta de novas oportunidades para você ser feliz e conquistar o mundo. Acredite no seu potencial.";
                break;
             case 2:
                echo "Boa tarde $nome! Dando um passo de cada vez, alcançaremos nossos objetivos. Não desista, tenha uma tarde cheia de luz.";
                break;
             case 3:
                echo "Boa noite $nome! Tenha uma excelente noite!
                Acredite: aquele SONHO que você traz
                nos sonhos… dentro do teu coração,
                irá se realizar.";
                break;
             }
          }elseif ($idade >= 13 && $idade <= 25)
          {
              switch ($turno) {
                case 1:
                    echo "Bom dia $nome! Com fé e determinação, somos capazes de tornar todos os nossos sonhos em realidade.";
                    break;
                case 2:
                    echo "Boa tarde $nome! Que tudo aquilo que te encanta os olhos ilumine sua tarde, alimentando o coração somente daquilo que te faz bem!";
                    break;
                case 3:
                    echo"Boa noite $nome! Esqueça o que não deu certo ontem...
                    A fé não se cansa, acredite...
                    E faça hoje valer a pena!";
                    break;
              }
             } 
                
            elseif($idade > 25){
           switch ($turno) {
            case 1:
                echo "Bom dia $nome! Que o seu dia seja marcado por novas conquistas e objetivos concluídos! Uma excelente manhã para todos!";
                break;
            case 2:
                echo "Boa tarde $nome! Que nesta tarde não falte a leveza dos sentidos nem a beleza das emoções";
                break;
            case 3:
                echo "Boa noite $nome! Sonhe, lute, conquiste. Tudo é possível. Você nasceu para vencer!";
                break;
           }
         }
 ?>  
</body>
</html>