<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>SiS - Rafael Carvalho</title>
    <link rel="stylesheet" type="text/css" href="estilo/estilo.css">
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

            <form method="post" id="formulario">
                    <p><input type="text" name="piso"> --- Piso</p>
                    <br>
                    <p><input type="text" name="dias"> --- Dias Trabalhados:</p>
                    <br>
                    <p><input type="text" name="dsr"> --- Calculo do DSR - Domingos e Feriados trabalhados</p>
                    <br>
                <input type="submit">
            </form>
        </div>
    <div id="resultado">
        resultado da pesquisa
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