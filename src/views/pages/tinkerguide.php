<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= $base; ?>/assets/images/tinkerguide/logo-solo.png" type="image/x-icon">
    <title>TinkerGuide</title>
    <link rel="stylesheet" href="<?= $base; ?>/assets/css/tinkerguide.css">
</head>
<body>
    <header>
        
        <section id="banner">
            <nav>
                <img id="logo-nav" src="<?= $base; ?>/assets/images/tinkerguide/logo-solo.png" alt="">
            </nav>
            <div id="header-text">
                <h1> TINKERGUIDE</h1>
                <h1>SEU GUIA AO SISTEMA CAD</h1>
            </div>
        </section>
    </header>
        <section id="cad-resumo">
            <h1 id="titulo-cad">Programa Cad Gratuito</h1>
            <div class="separar">
                <div class="cad-resumo-card">
                    <p class="subtitulo-cad"> Oque é? </p>
                    <p class="cad-card-texto">
                        Um programa CAD é uma tecnologia computadorizada com foco no desenho do produto e na documentação da fase de projeto, durante o processo de engenharia.
                    </p>
                </div>

                <div class="cad-resumo-card">
                    <p class="subtitulo-cad"> Quais são? </p>
                    <p class="cad-card-texto">
                        O programa cad gratuito é composto por varios softwares de impressão 3d mas esses sao os 3 principais:
                    </p>
                    <div class="cad-card-texto" id="lista-card">
                        <div>
                            <p> TinkerCad </p>
                            <img src="<?= $base; ?>/assets/images/tinkerguide/tinkercad-logo-removebg-preview-1.png" alt="">
                        </div>
                        <div>
                            <p> AutoCad </p>
                            <img src="<?= $base; ?>/assets/images/tinkerguide/autocad--v2.png" alt="">

                        </div>
                        <div>
                            <p> LibreCAD </p>
                            <img src="<?= $base; ?>/assets/images/tinkerguide/LibreCAD_icon.svg.png" alt="">
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="tinkercad">
            <h1 id="titulo-tinkercad">TinkerCad</h1>
            <div class="separar2">
                <img class="logo-tinkercad" src="<?= $base; ?>/assets/images/tinkerguide/tinkercad-logo-removebg-preview-1.png" alt="">
                <p>
                    O Tinkercad é uma ferramenta online gratuita de criação e design de modelos 3D, permitindo que usuários  desenvolvam o seus próprios projetos de forma fácil.
                </p>
            </div>
        </section>

        <section id="func">
            <h1>Funcionalidades</h1>
            <div class="separar3">
                <div class="card-func">
                    <img class="card-img" src="<?= $base; ?>/assets/images/tinkerguide/Learning.png" alt="">
                    <p>
                        Permite criar objetos 3D com uma interface simples de arrastar e soltar
                    </p>
                </div>

                <div class="card-func">
                    <img class="card-img" src="<?= $base; ?>/assets/images/tinkerguide/Requirements.png" alt="">
                    <p>
                        Possui ferramentas para simular e projetar circuitos eletrônicos
                    </p>
                </div>

                <div class="card-func">
                    <img class="card-img" src="<?= $base; ?>/assets/images/tinkerguide/Chat.png" alt="">
                    <p>
                        Inclui uma funcionalidade de programação por blocos, semelhante ao Scratch
                    </p>
                </div>

                <div class="card-func">
                    <img class="card-img" src="<?= $base; ?>/assets/images/tinkerguide/image-3.png" alt="">
                    <p>
                        Oferece a possibilidade de compartilhar projetos com outros usuários para colaboração em tempo real
                    </p>
                </div>
            </div>
        </section>

        <section id="model">
            <h1>Modelo de Impresora</h1>
            <div class="separar4">
                <ul class="model-list">
                    <li>Impressão 3D</li>
                    <li>Modelagem 3D Intuitiva</li>
                    <li>Programação com blocos</li>
                </ul>
                <img id="model-img" src="<?= $base; ?>/assets/images/tinkerguide/img.png" alt="">
                <ul class="model-list">
                    <li>Biblioteca de Formas</li>
                    <li>Colaboração e Compartilhamento</li>
                    <li>Acessibilidade Online</li>
                </ul>
            </div>
        </section>
        <section id="how-to-make">
            <h1>Como fazer um modelo 3D</h1>

            <main>
            <ul>
                    <li>
                        <article class="card-htm">
                            <div class="card-part-number-htm">
                                <b>1º</b>
                            </div>
                            <div class="card-part-htm">
                                <h2>Criação e modelagem digital</h2>
                                <div>
                                    <p>1.Ferramentas de modelagem</p>
                                    
                                    <p>2.Definição de forma e detalhes</p>
                                    
                                    <p>3.Exportação do arquivo</p>
                                </div>
                            </div>
                        </article>
                    </li>

                    <li>
                        <article class="card-htm">
                            <div class="card-part-number-htm">
                                <b>2º</b>
                            </div>
                            <div class="card-part-htm">
                                <h2>Preparação para a impressão</h2>
                                <div>
                                    <p>1.Software de fatiamento</p>
                                    
                                    <p>2.Ajuste de parâmetros</p>
                                    
                                    <p>3.Simulação</p>
                                </div>
                            </div>
                        </article>
                    </li>

                    <li>
                        <article class="card-htm">
                            <div class="card-part-number-htm">
                                <b>3º</b>
                            </div>
                            <div class="card-part-htm">
                                <h2>Impressão e pós-processamento</h2>
                                <div>
                                    <p>1.Impressão</p>
                                    
                                    <p>2.Monitoramento da impressão</p>
                                    
                                    <p>3.Acabamento</p>
                                </div>
                            </div>
                        </article>
                    </li>
                </ul>

                <img id="urso" src="<?= $base; ?>/assets/images/tinkerguide/Tina2-Impressora-3D-Filamento-Modelos-removebg-preview-1.png" alt="">
            </main>

            <footer>
                <a href=""><img id="logo-footer" src="<?= $base; ?>/assets/images/tinkerguide/layer1.png" alt=""></a>

                <p>Feira Técnica - Faetec - Escola Técnica Estadual Oscar Tenório</p>

                <div id="redes-sociais">
                    <a href=""><img src="<?= $base; ?>/assets/images/tinkerguide/twitter.png" alt=""></a>
                    <a href=""><img src="<?= $base; ?>/assets/images/tinkerguide/logotipo-do-instagram.png" alt=""></a>
                    <a href=""><img src="<?= $base; ?>/assets/images/tinkerguide/telegrama-(3).png" alt=""></a>
                </div>
            </footer>
        </section>
</body>
</html>