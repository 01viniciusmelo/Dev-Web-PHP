<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>SiS - Rafael Carvalho</title>
    <link rel="stylesheet" type="text/css" href="estilo/estilo.css">
    <link rel="stylesheet" type="text/css" href="estilo/tabela.css">
</head>
<body>

<nav class="menu">
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="projeto.php" >PROJETOS</a></li>
        <li><a href="sobre.php">SOBRE</a></li>
        <li><a href="contato.php">CONTATOS</a></li>
    </ul>
    <div id="tema">
        <a href="index.php"><img src="img/fire.png"></a>
    </div>
</nav>
<div class="header">

        <div id="itemum">
            <?php
            /*

            if($n1 = $_POST["dias"]){
                ($n1 * 11) - 191;
            }
            $n2 = $_POST["fds"];
            $n3 = $_POST["piso"];
            $adic = ($n3 * 30) / 100;
*/
             ?>
    <div id="infoPrincipal">
            <div id="infoA">
            <h4>Reajuste Salarial</h4>
                <p>O reajuste foi de 10,97 %, válido a partir de 1 de janeiro de 2016  até 31 de Dezembro de 2016.</p>
            </div>
            <div id="infoB">
                <h4>Salário base da categoria</h4>
                <p>Com o reajuste o Salário base da categoria passa de R$ 1.218,15 para R$ 1.351,78</p>
            </div>
            <div id="infoC">
                <h4>Adicional de Periculosidade</h4>
               <p>30% sobre o salário base do Vigilante; R$ 1.351,78 + 30% = R$ 405,53</p>
            </div>
            <div id="infoD">
                <h4>Vale Refeição</h4>
                <p>passou de R$ 17,68 para R$ 20,00 por dia;
                (desconto do vale refeição 18% sobre o valor do benefício)
                R$ 20,00 – 18% = R$ 16,40 por dia</p>
            </div>
            <div id="infoE">
                <h4>Cesta Básica</h4>
                <p>Valor mínimo a ser pago pelas Empresas R$ 124,20
                (desconto da cesta básica 5% sobre o valor do benefício)
                R$ 124,20 – 5% = R$ 117,98</p>
            </div>
            <div id="infoF">
                <h4>Calcule suas Horas Extras</h4>
                <p>(base dos cálculos feito sobre o piso + o adicional = R$ 1.757,31)</p>
                <p>Hora normal = R$ 7,99</p>
                <p>Hora  60% = R$ 12,78</p>
                <p>Hora  100% = R$ 15,98</p>
            </div>
            <div id="infoG">
                <h4>Valores das Folgas Trabalhadas de 8 e 12 Horas</h4>
                <p>FT de 8 Horas = R$ 127,84 + VR de R$ 16,40 =  R$ 144,24</p>
                <p>FT de 12 Horas = R$ 191,76 + VR de R$ 16,40 =  R$ 208,16</p>
            </div>
    </div>
            <h3>Calculo Trabalhista dos Vigilante - SP 2015</h3>

            <fieldset>
            <table id="tabela">
                <tr>
                    <td colspan ="2">Quantidade de Dias trabalhados</td>
                    <td colspan="2"><input type="text" name="dias"></td>
                </tr>
                <tr>
                    <td colspan="2">Piso Salárial</td>
                    <td colspan="2"><input type="text" name="dias"></td>
                </tr>
                <tr>
                    <td colspan="2">Quantidade de Domingos e Feriados trabalhados</td>
                    <td colspan="2"><input type="text" name="dias"></td>
                </tr>
                <tr>
                    <td colspan="2">Porcentagem em Gratificação</td>
                    <td colspan="2"><input type="text" name="dias"></td>
                </tr>
            </table>
            </fieldset>
        </div>

    <div id="resultado">

    </div>


</div>
<article id="art">
    <div id="pcp">

        <h1>Desenvolvimento de Web-sites e Sistemas</h1>
        <img src="img/frame.png">

        <h3>Web Site</h3>
        <p>
            Com o crescimento do e-commece

        </p>
        <p>
            Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum,
            e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
        </p>
    </div>

    <div id="sub">
        <h1>Linguagens de programação</h1>
        <img src="img/frame.png">
        <p>
            É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página
            quando estiver examinando sua diagramação.

            A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de
            "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma aparência
            similar a de um texto legível.
        </p>
        <p>
            Muitos softwares de publicação e editores de páginas na internet agora usam
            Lorem Ipsum como texto-modelo padrão, e uma rápida busca por 'lorem ipsum' mostra vários websites ainda em
            sua fase de construção.
        </p>
        <p>
            Várias versões novas surgiram ao longo dos anos,eventualmente por acidente, e às vezes de propósito
            (injetando humor, e coisas do gênero).
        </p>
    </div>
</article>
<div id="meio">

aaaaaa
</div>
<div id="meio-fim">

</div>
</body>
</html>