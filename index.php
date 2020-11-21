<!DOCTYPE html>

<html>

    <head>
        <title>Eleições</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="assets/images/urna.png">
        <script src="script.js"></script>
    </head>
    <body>
        <h1>Eleições 2020 - Volta Redonda</h1>
        <h2>Prefeito</h2>

        <div class="link-box">
            <a href="resultado.php">Acompanhe o resultado aqui.</a>
        </div>

        <div id="urna">

            <div id="tela">
                
                <div id="foto"></div>
                <p id="dgts"></p>
                <div id="dnome"></div>
                <div id="dnome2"></div>
                <div id="dinfo"></div>

            </div>

            <div id="teclado">
                <div id="teclas">
                    <div id="t1" onclick="addNum(1)">1</div>
                    <div id="t2" onclick="addNum(2)">2</div>
                    <div id="t3" onclick="addNum(3)">3</div>
                    <div id="t4" onclick="addNum(4)">4</div>
                    <div id="t5" onclick="addNum(5)">5</div>
                    <div id="t6" onclick="addNum(6)">6</div>
                    <div id="t7" onclick="addNum(7)">7</div>
                    <div id="t8" onclick="addNum(8)">8</div>
                    <div id="t9" onclick="addNum(9)">9</div>
                    <div id="tnull"></div>
                    <div id="t0" onclick="addNum(0)">0</div>
                    <div id="tnull"></div>
                    <div id="tbrnc" onclick="branco()">BRANCO</div>
                    <div id="tcorr" onclick="corrige()">CORRIGE</div>
                    <div id="tcnfm" onclick="confirma()">CONFIRMA</div>
                </div>
            </div>

        </div>
    </body>

</html>