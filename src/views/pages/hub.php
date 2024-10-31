<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?=$base;?>/assets/images/logo.svg" type="image/x-icon">
    <title>FaePic - Trabalhos</title>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/hub.css">
</head>
<body>
    <section>
        <header>
            <h1>Impressora 3D</h1>
            <a href="<?=$base;?>/feira"><img src="<?=$base;?>/assets/images/hub/voltar.png" alt=""></a>
        </header>
        <main>
                <a href="<?=$base;?>/hulls-legacy" class="fix">
                    <div class="card" id="principal">
                        <img src="<?=$base;?>/assets/images/hub/hulls.png" alt="" id="logo-principal">
                    </div>
                    <div id="principalegend">Hulls Legacy</div>
                </a>
            <div class="third">
                <a href="<?=$base;?>/panela-de-impressao" class="fix">
                    <div class="card secundario">
                        <img src="<?=$base;?>/assets/images/hub/pdi.png" alt="" class="logo">
                    </div>
                    <legend class="legends pdi">Panela de Impressão</legend>
                </a>
                <a href="<?=$base;?>/apparatus" class="fix">
                    <div class="card secundario">
                        <img src="<?=$base;?>/assets/images/hub/apparatus.png" alt="" class="logo">
                    </div>
                    <legend class="legends">Apparatus</legend>
                </a>
            </div>
            <div class="third">
                <a href="<?=$base;?>/berners" class="fix">
                    <div class="card secundario" id="berners">
                        <img src="<?=$base;?>/assets/images/hub/berners.png" alt="" class="logo berners">
                    </div>
                    <div class="legends">Bernes</div>
                </a>
                <a href="<?=$base;?>/tinkerguide" class="fix">
                    <div class="card secundario">
                        <img src="<?=$base;?>/assets/images/hub/tinker.png" alt="" class="logo">
                    </div>
                    <legend class="legends">TinkerGuide</legend>
                </a>
            </div>
        </main>
    </section>
    <footer>
        <img src="<?=$base;?>/assets/images/hub/Vector.svg" alt="" id="svg">
    </footer>
</body>
</html>