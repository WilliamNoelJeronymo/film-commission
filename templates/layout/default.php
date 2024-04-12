<?php $titulos = $this->Admin->traduzir($this->request->getParam('controller'), $this->request->getParam('action')); ?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <title>Prefeitura de Petrópolis</title>
    <?= $this->Html->meta('icon') ?>

    <!-- =============== INCLUDE CSS =============== -->
    <!-- Bootstrap 3.3.5 -->
    <?= $this->Html->css('/adminLTE.3.1.0/plugins/fontawesome-free/css/all.min.css'); ?>
    <!-- SELECT 2 -->
    <?= $this->Html->css('/adminLTE.3.1.0/plugins/select2/css/select2.min.css'); ?>
    <!-- ICHECK -->
    <?= $this->Html->css('/adminLTE.3.1.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>
    <!-- jQuery UI -->
    <?= $this->Html->css('/adminLTE.3.1.0/plugins/jquery-ui/jquery-ui.min'); ?>
    <!-- Theme style -->
    <?= $this->Html->css('/adminLTE.3.1.0/dist/css/adminlte.min.css'); ?>
    <!-- OverlayScrollbars -->
    <?= $this->Html->css('/adminLTE.3.1.0/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); ?>
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- STYLE CUSTOM -->
    <?= $this->Html->css('style'); ?>


    <!-- =============== INCLUDE JS =============== -->
    <!-- jQuery  -->
    <?= $this->Html->script('/adminLTE.3.1.0/plugins/jquery/jquery.min.js'); ?>
    <!-- jQuery UI -->
    <?= $this->Html->script('/adminLTE.3.1.0/plugins/jquery-ui/jquery-ui.min.js'); ?>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap -->
    <?= $this->Html->script('/adminLTE.3.1.0/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>
    <!-- SELECT 2 -->
    <?= $this->Html->script('/adminLTE.3.1.0/plugins/select2/js/select2.full.min.js'); ?>
    <!-- overlayScrollbars -->
    <?= $this->Html->script('/adminLTE.3.1.0/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>
    <!-- JQUERY VALIDATE -->
    <?= $this->Html->script('/adminLTE.3.1.0/plugins/jquery-validation/jquery.validate.min.js'); ?>
    <?= $this->Html->script('/adminLTE.3.1.0/plugins/jquery-validation/localization/messages_pt_BR.min.js'); ?>
    <!-- Bootstrap Switch -->
    <?= $this->Html->script('/adminLTE.3.1.0/plugins/bootstrap-switch/js/bootstrap-switch.min.js'); ?>

    <!-- AdminLTE App -->
    <?= $this->Html->script('/adminLTE.3.1.0/dist/js/adminlte.js'); ?>
    <!-- CUSTOM SISTEMA -->
    <script type="text/javascript">
        var baseDir = '<?= $this->request->getParam('prefix') ? $this->Url->build('/') . strtolower($this->request->getParam('prefix')) : ''; ?>';
        var csrfToken = '<?= $this->request->getCookie('csrfToken') ?>';
    </script>
    <?= $this->Html->script('/js/custom.js'); ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?= $this->Url->build(['controller' => 'escolas', 'action' => 'index']); ?>" class="nav-link">Home</a>
            </li>
        </ul>
        <form class="form-inline ml-auto">
            <div class="form-group row">

            </div>
        </form>
        <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link" href="#" data-tooltip="tooltip" data-placement="left" data-toggle="dropdown" href="#" title="Minha conta">
                    <i class="fas fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
                    <a href="<?= $this->Url->build(['controller' => 'usuarios', 'action' => 'perfil']); ?>" class="dropdown-item">
                        <i class="fas fa-cog"></i> Meus Dados
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="<?= $this->Url->build(['controller' => 'usuarios', 'action' => 'alterar-senha']); ?>" data-toggle="modal" data-target=".view" class="dropdown-item">
                        <i class="fas fa-lock"></i> Alterar Senha
                    </a>
                </div>
            </li>
            <li class="nav-item">
                <?= $this->Html->link('<i class="fas fa-sign-out-alt"></i> Sair', ['controller' => 'usuarios', 'action' => 'logout'], ['class' => 'nav-link', 'escape' => false]) ?>
            </li>
        </ul>
    </nav>
    <!-- FIM NAVBAR -->

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?= $this->request->getParam('prefix') ? $this->Url->build('/') . strtolower($this->request->getParam('prefix')) : ''; ?>" class="brand-link">
            <img src="<?= $this->Url->build('/'); ?>adminLTE.3.1.0/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Prefeitura Petrópolis</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <a href="<?= $this->Url->build(['controller' => 'usuarios', 'action' => 'perfil']); ?>" class="d-block">
                        <img src="<?= $this->Url->build('/'); ?>adminLTE.3.1.0/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </a>
                </div>
                <div class="info">
                    <a href="<?= $this->Url->build(['controller' => 'usuarios', 'action' => 'perfil']); ?>" class="d-block">
                        Administrador
                        <?= $this->request->getSession()->read('Auth.User.nome'); ?>
                    </a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <?= $this->element('menu_admin') ?>
            </nav>
        </div>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">

                        </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><?= $titulos['controller']; ?></li>
                            <li class="breadcrumb-item active"><?= $titulos['action']; ?></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <?= $this->Flash->render() ?>

                        <div class="card">
                        <div class="card-body">

                            <?= $this->fetch('content') ?>
                        </div>
                        </div>


                <br/>
            </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->


    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 1.0.0
        </div>
        <strong>Copyright © 2022 <a href="#">Prefeitura Municipal de Petrópolis</a>.</strong> Todos os direitos reservados.
    </footer>
</div><!-- ./wrapper -->


<!-- Modal -->
<div class="modal fade view" id="view_paciente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

        </div>
    </div>
</div>

</body>
</html>
