<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Commission Login</title>
    <?= $this->Html->css('/adminLTE.3.1.0/bootstrap/css/bootstrap.min.css'); ?>
    <?= $this->Html->css('/css/style.css'); ?>
    <?= $this->Html->script('/adminLTE.3.1.0/bootstrap/js/bootstrap.bundle.min.js'); ?>

</head>
<body>
    <main>
        <div class="d-flex justify-content-center align-items-center vh-100">
            <div class="container">
                <div class="row border rounded-3 shadow-lg">
                    <div class="d-flex flex-column justify-content-center col-md-4 bg-dark text-white rounded-start-3 gap-3">
                        <div class="p-5">
                            <?= $this->Html->image('/img/logo.png', ['class' => 'img-fluid']) ?>
                        </div>
                        <div class="mx-5">
                            <p class="fs-5 fw-bold m-0">Bem-vindo!</p>
                            <p>Registre-se agora mesmo</p>
                        </div>
                    </div>
    
                    <div class="col-md-8 d-flex flex-column justify-content-center rounded-end-3 gap-3 text-center">
                        <div>
                            <p class="fs-3 fw-bold m-0 mt-4">Acesse sua conta</p>
                            <p class="small m-0 text-secondary">Informe seus dados de acesso</p>
                        </div>
                        <div class="mx-5">
                            <?= $this->Form->create() ?>
                                <div class="form-group mb-2 d-flex">
                                    <?= $this->Html->image('/img/envelope.svg', ['class' => 'ps-3 border border-end-0 caixa-dados-cor rounded-start-3']) ?>
                                    <?= $this->Form->email('email', ['label'=> false, 'class'=>'form-control rounded-start-0 border-start-0 caixa-dados-cor','placeholder'=>'E-mail']);?>
                                </div>
                                <div class="form-group d-flex">
                                    <?= $this->Html->image('/img/lock.svg', ['class' => 'ps-3 border border-end-0 caixa-dados-cor rounded-start-3']) ?>
                                    <?= $this->Form->password('senha', ['label' => false, 'class' => 'form-control rounded-start-0 border-start-0 caixa-dados-cor', 'placeholder' => 'Senha']) ?>
                                </div>
                                <div class="mb-4">
                                    <a href="#" class="form-text text-decoration-none d-flex">Esqueceu sua senha?</a>
                                </div>
                                <button type="submit" class="btn btn-dark rounded-4 px-5 fw-bold mb-4">ENTRAR</button>
                                <?= $this->Form->end ?>
                        </div>
                    </div>
                </div>
            </div>
</div>
    </main>
</body>
</html>
