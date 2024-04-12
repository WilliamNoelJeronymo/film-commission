<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Film Commission</title>
    <?= $this->Html->css('/css/style.css') ?>
    <?= $this->Html->css('/adminLTE.3.1.0/bootstrap/css/bootstrap.min.css') ?>
    <?= $this->Html->script('/adminLTE.3.1.0/bootstrap/js/bootstrap.bundle.min.js') ?>
    <link rel="icon" type="image/svg" href="../img/PMP.svg">
</head>

<body id="publico" class="d-flex flex-column justify-content-between">

    <header id="menu">
        <nav class="navbar navbar-expand-md bg-dark" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="<?= $this->Url->build('/')?>">
                <?= $this->Html->image('/img/logo.png', ['width' => '150rem']) ?>
            </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Film Commission</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-1">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Navegar
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Autorização de Filmagem</a></li>
                                    <li><a class="dropdown-item" href="#">Filmados em Petrópolis</a></li>
                                    <li><a class="dropdown-item" href="#">Turismo Cinematográfico</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <div class="d-md-flex">
                                        <div>
                                            <ul class="dropdown-header">Banco de Locação</ul>
                                            <li><a class="dropdown-item" href="#">Locações</a></li>
                                            <li><a class="dropdown-item" href="#">Cadastre-se</a></li>
                                        </div>
                                        <div>
                                            <ul class="dropdown-header">Profissionais e Serviços</ul>
                                            <li><a class="dropdown-item" href="#">Serviços</a></li>
                                            <li><a class="dropdown-item" href="#">Cadastre-se</a></li>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./noticias.html">Notícias</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./fale-conosco.html">Fale Conosco</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./publico.html">Entre</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./usuario-add.html">Cadastre-se</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        </header>

        <main>
        <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>       
        </main>

        <footer class="d-flex align-items-center mt-5 py-4">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12 d-flex justify-content-center align-items-center mb-2">
                        <a href="<?= $this->Url->build('https://www.instagram.com/petropolisfilm/') ?>" target="_blank">
                            <?= $this->Html->image('/img/instagram.svg', ['class' => 'me-2', 'alt' => 'ícone do instagram']) ?>
                        </a>
                        <a href="<?= $this->Url->build('https://www.youtube.com/@PetropolisFilmCommission') ?>" target="_blank">
                        <?= $this->Html->image('/img/youtube.svg', ['alt' => 'ícone do youtube']) ?>
                        </a>
                    </div>
                    <div class="col-md-12 fw-bold d-flex justify-content-center">
                        Instituto Municipal de Cultura – Praça Visconde de Mauá, 305 – Centro – Centro de Cultura Raul de Leoni
                    </div>
                </div>
                <hr>
                <div class="row d-flex">
                    <div class="col-md-4 text-center">
                        <a href="<?= $this->Url->build('https://www.petropolis.rj.gov.br/pmp/') ?>" class="text-decoration-none fw-bold text-white" target="_blank">Prefeitura de Petrópolis</a>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="<?= $this->Url->build('https://web2.petropolis.rj.gov.br/imc/cmc/') ?>" class="text-decoration-none fw-bold text-white" target="_blank">Instituto Municipal de Petrópolis</a>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="<?= $this->Url->build('https://www.petropolis.rj.gov.br/turispetro/') ?>" class="text-decoration-none fw-bold text-white" target="_blank">Turispetro</a>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-md-4 col-md-4 d-flex flex-column text-center small mt-3">
                        <div>Disk Turismo</div>
                        <div>0800-024-1516 ou (24) 2233-1217</div>
                    </div>
                </div>
            </div>
        </footer>
</body>

</html>