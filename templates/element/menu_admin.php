<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item"><?= $this->Html->link('<i class="fa fa-map-marker"></i> <p>Locações</p>', ['controller' => 'locacoes', 'action' => 'index'], ['escape' => false, 'class' => 'nav-link']); ?></li>
    <li class="nav-item"><?= $this->Html->link('<i class="fa fa-university "></i> <p>Estilos</p>', ['controller' => 'arquiteturas', 'action' => 'index'], ['escape' => false, 'class' => 'nav-link']); ?></li>
    <li class="nav-item"><?= $this->Html->link('<i class="fa fa-tags"></i> <p>Tipos</p>', ['controller' => 'tipos', 'action' => 'index'], ['escape' => false, 'class' => 'nav-link']); ?></li>
    <li class="nav-item"><?= $this->Html->link('<i class="fa fa-map"></i> <p>Bairros</p>', ['controller' => 'bairros', 'action' => 'index'], ['escape' => false, 'class' => 'nav-link']); ?></li>
    <li class="nav-item"><?= $this->Html->link('<i class="fa fa-users"></i> <p>Profissionais</p>', ['controller' => 'profissionais', 'action' => 'index'], ['escape' => false, 'class' => 'nav-link']); ?></li>
    <li class="nav-item"><?= $this->Html->link('<i class="fa fa-suitcase"></i> <p>Serviços Prestados</p>', ['controller' => 'servicosPrestados', 'action' => 'index'], ['escape' => false, 'class' => 'nav-link']); ?></li>
    <li class="nav-item"><?= $this->Html->link('<i class="fa fa-newspaper"></i> <p>Notícias</p>', ['controller' => 'noticias', 'action' => 'index'], ['escape' => false, 'class' => 'nav-link']); ?></li>
    <li class="nav-item"><?= $this->Html->link('<i class="fa fa-video"></i> <p>Produções</p>', ['controller' => 'producoes', 'action' => 'index'], ['escape' => false, 'class' => 'nav-link']); ?></li>
    <li><hr></li>
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="fa fa-plane"></i>
            <p>
                Turismo
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>

        <ul class="nav nav-treeview">
            <li class="nav-item"><?= $this->Html->link('<i class="fa fa-film nav-icon"></i> <p>Filmes</p>', ['controller' => 'tfilmes', 'action' => 'index'], ['escape' => false, 'class' => 'nav-link']); ?></li>
            <li class="nav-item"><?= $this->Html->link('<i class="fa fa-map-marker nav-icon"></i> <p>Locações</p>', ['controller' => 'tlocacoes', 'action' => 'index'], ['escape' => false, 'class' => 'nav-link']); ?></li>
        </ul>
    </li>
</ul>
