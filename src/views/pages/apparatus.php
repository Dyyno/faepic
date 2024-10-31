<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= $base; ?>/assets/images/apparatus/logo-apparatus-feita.png" type="image/x-icon">
    <title>Apparatus</title>
    <link rel="stylesheet" href="<?= $base; ?>/assets/css/apparatus.css">
</head>

<body>
    <header>
        <figure id="logo">
            <img src="<?= $base; ?>/assets/images/apparatus/logo-apparatus-feita.png">
            <!-- logo -->
            <h2>Apparatus</h2>
        </figure>

        <a href="#div-morta" id="botao-roxo"> Saiba Mais </a>
    </header>


    <main>
        <div class="texto">
            <h1> Exemplos de Aplicações e Materiais Utilizados Na Impressora 3D </h1>
            <p>A tecnologia atual oferece inúmeras soluções práticas para diversos setores. Na construção, o uso de
                concreto reciclado é um exemplo eficaz, reduzindo resíduos e impactos ambientais. Na medicina, a
                impressão 3D possibilita a fabricação de próteses personalizadas com materiais biocompatíveis,
                otimizando tratamentos e aumentando a qualidade de vida.</p>
            <a href="#div-morta" id="botao-branco"> Saiba
                Mais</a>
        </div>

        <img src="<?= $base; ?>/assets/images/apparatus/Design-sem-nome-(10).png" alt="" id="img1">
        <img src="<?= $base; ?>/assets/images/apparatus/Design-sem-nome-(9).png" alt="" id="img2">

    </main>
    <div id="div-morta"></div>
    <section id="sec-cards">
        <h2 id="titulo-material">Materiais Usados </h2>
        <div class="conteudo">
            <div class="cards">
                <div class="card" id="card-1" value="filamentos" onclick="conteudo(1)">
                    <img src="<?= $base; ?>/assets/images/apparatus/filamento.png" alt="" class="icones-cards">
                    <!-- icone -->
                    <div class="textos-cards">
                        <h2>Filamentos</h2>
                        <p>PLA (Ácido Polilático): Biodegradável, fácil de usar, ideal para protótipos.
                            ABS (Acrilonitrila Butadieno Estireno): Resistente e durável, frequentemente usado em
                            produtos finais.</p>
                    </div>
                </div>
                <div class="card" id="card-2" onclick="conteudo(2)">
                    <!-- icone -->
                    <img src="<?= $base; ?>/assets/images/apparatus/resinas.png" alt="" class="icones-cards">
                    <div class="textos-cards">
                        <h2>Resinas</h2>
                        <p>Utilizada na impressão 3D sendo exposta à luz UV para endurecer, formando camadas sucessivas
                            que criam o objeto. O líquido fotossensível é curado camada por camada até que a peça esteja
                            completamente formada.</p>
                    </div>
                </div>
                <div class="card" id="card-3" onclick="conteudo(3)">
                    <!-- icone -->
                    <img src="<?= $base; ?>/assets/images/apparatus/bio.png" alt="" class="icones-cards">
                    <div class="textos-cards">
                        <h2>Biomateriais</h2>
                        <p>Os biomateriais são usados para fabricar próteses, implantes e suportes para regeneração de
                            tecidos, interagindo de forma compatível com o corpo. Eles também servem em sistemas de
                            liberação controlada de medicamentos e dispositivos médicos.</p>
                    </div>
                </div>
            </div>


            <div id="div-morta"></div>
            <div id="textomudando">
                <div id="divImg">
                    <!-- <img id="imagem" src="" alt=""> -->
                </div>

            </div>
        </div>
    </section>


    <section id="fundo-roxo">
        <h2>Aplicações</h2>
        <div id="secoes">
            <div class="direita secao">
                <img src="<?= $base; ?>/assets/images/apparatus/construcao.jpeg" alt="">
                <div class="texto-section">
                    <h3>INDÚSTRIAS</h3>
                    <p>Nas indústrias, os biomateriais são aplicados principalmente no setor médico, farmacêutico e
                        odontológico, sendo usados na produção de próteses, implantes ortopédicos, dispositivos
                        cirúrgicos e produtos de engenharia de tecidos. Além disso, são empregados no desenvolvimento de
                        medicamentos de liberação controlada, biossensores e em tecnologias de bioprinting, que imprimem
                        estruturas biológicas para pesquisa e tratamento.</p>
                </div>
            </div>

            <div class="esquerda secao">
                <img src="<?= $base; ?>/assets/images/apparatus/coracao.jpeg" alt="">
                <div class="texto-section">
                    <h3>MEDICINA </h3>
                    <p>A medicina personalizada tem suas raízes na biologia molecular e na genética, emergindo nas
                        últimas décadas como uma resposta à necessidade de tratamentos mais eficazes e individualizados.
                        Inicialmente, focava na análise do DNA e em como as variações genéticas influenciam a resposta a
                        medicamentos. Hoje, essa abordagem é amplamente utilizada para tratar doenças como câncer, onde
                        terapias são adaptadas com base nas características genéticas dos tumores.</p>
                </div>
            </div>
            <div class="direita secao">
                <img src="<?= $base; ?>/assets/images/apparatus/carne.jpeg" alt="">
                <div class="texto-section">
                    <h3>PRODUÇÃO DE ALIMENTOS</h3>
                    <p>A aplicação da impressora 3D na produção de alimentos começou a ser explorada na década de 2010,
                        impulsionada pelo avanço das tecnologias de impressão e pela busca por inovação na gastronomia.
                        Inicialmente, a impressão 3D de alimentos focava em chocolate e confeitaria, permitindo a
                        criação de formas e texturas únicas. </p>
                </div>
            </div>
        </div>

    </section>

    <footer>
        <figure id="logo">
            <img src="<?= $base; ?>/assets/images/apparatus/logobranca.svg" alt="">
            <!-- logo -->
        </figure>

        <div id="info">
            <ul>
                <li>Home</li>
                <li>Sobre Nós</li>
                <li>Serviços</li>
                <li>Contatos</li>
            </ul>

            <p>&copy; 2024 Apparatus. Todos os direitos reservados.</p>
        </div>

        <div id="socials">
            <figure>
                <i><img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAg5JREFUSEvFlU+IjlEUxn+PP0lKJCkLGyQx/jRjaawsaRZDKTaWJoqFLKRkYaFEjZXtaFhMYiUbyUZsxiQpzWLKymzUUGJmHvfo/b7u3Hnf+r70NWf1vvec8zz3/L2ix6Ie47MyBLZ3AleAo8B+aLyIgY/AG+CepC9lRpZFYPtCGANru0zfH2BE0sPcbwmB7X7gHbCqS/CW+TwwIOlD66AkeAoMdQH+DegDTgGjld+EpOEmghlgRw3BV+A28AnYAuwBrgEzkvpsDwDvK79pSbuaCH4AGwqCl6mQw5LmbG8NnaRZ2/uAF8DPVLNNwLbKb07SxmUEtiPvCwX4LLAbCLCzwDEgOuc1MAasrjood5uX1G6Qdg1sx+HvguCOpKvp5g+A6K5cRiVdtP0cOJEpFiStqYsgDqPVcjkPPKtuHPOQy5Skg7ZvpKzdzBSLkiKyf5JHEN+LBcgI8Dil5hVwoNBNSjps+3pK1a1cJ6mNW7Zp5DeXMUnnbN8HLhW6mNzLtiPCk5muvgZhYLskiIgOAeuBM8BgBRRFHk+tu66myL8khf3SFFUEdW0aszEkaTKPwHbsqUjf9iKy75I2NxHEsmoPSV64NLETxaAdL4Bbv58l7W0ieJJATjc4dnr8SFLMTG2KjgBv/3PZ9UuaqiWo6tC7dd1iLR6c2JZNkj84d1NLT5eGK/NkdlrNTux6HsFfblmsGZDoHZYAAAAASUVORK5CYII=" /></i>
                <i><img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAe9JREFUSEu1lj9IV1EUxz9fEDKsIVyiQlwcBEMaDUEapCJCJYdIWgpMHMQQxCHKiIagKIf+gENL4BAKRemkNESzo38KItGWhgZBQfH0btyfvN/tvauP/N3t3fPnc86955z7RIWXKuyfKMDMDgFXgAtAM1APGPAdmAdmgClJW3mB5gLM7CLwwjuNJfoV6JM0m6WUCTCz0STSewWObwcYlvQktPkHYGb3gbsFnKdVByWNpTfKAGZ2GXgfcf4LGAI+Sfrh9Mzssd9zny6TNkmfSz52AYniEWAZOJ4D2AaaJC2m5QHAiZz8dOni04A+4GUk+glJ10pyM2sHzgLngZbArlPSO7eXBnwALkUAdyQ99MfSDbyN6I5L6g0Bq8CJiNFtSc88YBB4GtGdTzI4EwI2gOoDAvxOqulYCFgHagLAT0mxrFwVzQHnArv1pCeOhoAloCFQXJN0MtYTZrYCnAp0FiQ1hoA3SZn2FMnAz6rNjABeJ31yIwRcBSYO6A4yy7QK+AbU5UD2W0W7x1OWgS8/N0Gn/wPgRnmrpC8lH1nDzg2rgQzIfjJ4IKlsUGYB3N4r4G8nptZegEeSRsLAYg/Odd+ttd4oD+AmwC1JH7OOdq8n8zBwE+jyT+Nzf1f9QEcyNScBV5LFn8xYcxWRVfyv4g8hocIZ7BalugAAAABJRU5ErkJggg==" /></i>
                <i><img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbNJREFUSEvd1c2LjXEUB/DPF0WNrFgo8lKSQpIVS1KkvKSJpixYSPZE5A9gY0E2mpSNzSyUsrCRbEQRCysTJUpWUt7q5/7qXl137n1m7tRs5uye55zz/T7ne16emGPLHOObZwSllJEk35tkK6UswxUcwDr8xg1cxEocrM9JSsX5J1EpZSHeYDTJ60EkpZRH2N3H/wGrcTzJvY6/m2AtJvEFh5M87QUppWzHi4YKn+Mx7iZ52VvBEnzDojbAbVxO8qkDWEoZq8kNBFXes0nuTKmgviil1K/e2QPwBPfxDNtwvYFgPMnJbn+3REuxEQ+xfJb7cTXJuUEEq/AeX1tTsGKWBFWem4MIFuAd1swSvKZtSvK2L0G7B0daQXXEOo0ehmsyyfrehCmnopQyikvYMgw6ziS5NROC/XgwJHhdsg1Jfk1L0JaqzvGJGZL8wa4kdYynWN9rWkqpDd+MCzjWQFTvzakk44Ni+vVgBDtwHvsawH9gLMlEU6Xdi7YH17C1+wgOSK7LeLq1tVX7RvuvgvYpPopD2IvFLZl+4jM+ol7SiSSvpgPu+OfZH22mZQ8TN+cS/QWHhHkZrTvZMgAAAABJRU5ErkJggg==" /></i>
                <i><img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAASJJREFUSEvFVcFxwzAMAyZpskk7SZtJ2k5SZ5J6k2YTNLiTcrJCyfHZvvBn2SRICISJnYM718diAEk/AD5SYxeSx16TawFc+0jy0gLZAmAgedoTwLW/SX5FIFtMkOuOV7rOAMaSsi0BMtCEsucCSDokSb54fJJjLVMAb+mbdwD+fn6CVPg3JeTRTySH3h44r5bsHUWSXgG4eB2zAA+pSNJf1bnzvEiWYneCWQBJtgBbwU16JM3xLVZZRZUMXren7motgLn3HThCC9gSIHTK6o66PuQuJxQEdzDxGEn2m8+CtsUAXhSrqIwhPZg6vy+ja9V3E/ggmCJSn8+aDlomhF4UUFGDPFQ8nCBXKnwoe4yXzXZs3pt/sLqTxW7a4qt1vjvAP/zqnBm8+tz0AAAAAElFTkSuQmCC" /></i>
            </figure>

            <p>Suporte apparatus@gmail.com</p>
        </div>
    </footer>

    <script>
        divImg.style.display = 'none';
        document.getElementById("card-1").addEventListener("click", function() {
            document.getElementById("textomudando").scrollIntoView({
                behavior: "smooth"
            });
        });
        document.getElementById("card-2").addEventListener("click", function() {
            document.getElementById("textomudando").scrollIntoView({
                behavior: "smooth"
            });
        });
        document.getElementById("card-3").addEventListener("click", function() {
            document.getElementById("textomudando").scrollIntoView({
                behavior: "smooth"
            });
        });

        function conteudo(opc) {
            divImg.style.display = 'block';

            if (opc == 1) {
                imagem = "url('<?= $base; ?>/assets/images/apparatus/img-2.jpeg')";
                document.getElementById('divImg').style.backgroundPosition = "center";
            } else if (opc == 2) {
                imagem = "url('<?= $base; ?>/assets/images/apparatus/img-1.jpeg')";
                document.getElementById('divImg').style.backgroundPosition = "left";
            } else if (opc == 3) {
                imagem = "url('<?= $base; ?>/assets/images/apparatus/img-3.jpeg')";
                document.getElementById('divImg').style.backgroundPosition = "center";
            }

            document.getElementById('divImg').style.backgroundImage = imagem;
            document.getElementById('divImg').style.backgroundSize = "cover";


        }
    </script>
</body>

</html>