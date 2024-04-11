<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profissionai $profissionai
 */
?>

<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Detalhes</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body view-detalhes">
                                        <div class="row">
                    <div class="col-md-12">
                        <strong><?= __('Nome Fantasia') ?></strong><br>
                        <?= h($profissionai->nome_fantasia) ?>
                    </div>
                </div>
                                                <div class="row">
                    <div class="col-md-12">
                        <strong><?= __('Razao Social') ?></strong><br>
                        <?= h($profissionai->razao_social) ?>
                    </div>
                </div>
                                                <div class="row">
                    <div class="col-md-12">
                        <strong><?= __('Cnpj Ou Cpf') ?></strong><br>
                        <?= h($profissionai->cnpj_ou_cpf) ?>
                    </div>
                </div>
                                                <div class="row">
                    <div class="col-md-12">
                        <strong><?= __('Telefone') ?></strong><br>
                        <?= h($profissionai->telefone) ?>
                    </div>
                </div>
                                                <div class="row">
                    <div class="col-md-12">
                        <strong><?= __('Telefone2') ?></strong><br>
                        <?= h($profissionai->telefone2) ?>
                    </div>
                </div>
                                                <div class="row">
                    <div class="col-md-12">
                        <strong><?= __('Whatsapp') ?></strong><br>
                        <?= h($profissionai->whatsapp) ?>
                    </div>
                </div>
                                                <div class="row">
                    <div class="col-md-12">
                        <strong><?= __('Email') ?></strong><br>
                        <?= h($profissionai->email) ?>
                    </div>
                </div>
                                                                <div class="row">
                    <div class="col-md-12">
                        <strong><?= __('Usuario') ?></strong><br>
                        <?= $profissionai->has('usuario') ? $this->Html->link($profissionai->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $profissionai->usuario->id]) : '' ?>
                    </div>
                </div>
                                                <div class="row">
                    <div class="col-md-12">
                        <strong><?= __('Perfil') ?></strong><br>
                        <?= h($profissionai->perfil) ?>
                    </div>
                </div>
                                                    <div class="row">
                <div class="col-md-12">
                    <strong><?= __('Id') ?></strong><br>
                    <?= $this->Number->format($profissionai->id) ?>
                </div>
            </div>
                    <div class="row">
                <div class="col-md-12">
                    <strong><?= __('Status') ?></strong><br>
                    <?= $this->Number->format($profissionai->status) ?>
                </div>
            </div>
                                    <div class="row">
                <div class="col-md-12 ">
                    <strong><?= __('Created') ?></strong><br>
                    <?= h($profissionai->created) ?>
                </div>
            </div>
                    <div class="row">
                <div class="col-md-12 ">
                    <strong><?= __('Modified') ?></strong><br>
                    <?= h($profissionai->modified) ?>
                </div>
            </div>
                
                        <div class="text">
                <strong><?= __('Endereco') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($profissionai->endereco)); ?>
                </blockquote>
            </div>
                    <div class="text">
                <strong><?= __('Sobre Empresa') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($profissionai->sobre_empresa)); ?>
                </blockquote>
            </div>
                    <div class="text">
                <strong><?= __('Facebook') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($profissionai->facebook)); ?>
                </blockquote>
            </div>
                    <div class="text">
                <strong><?= __('Instagram') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($profissionai->instagram)); ?>
                </blockquote>
            </div>
                    <div class="text">
                <strong><?= __('Twitter') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($profissionai->twitter)); ?>
                </blockquote>
            </div>
                    <div class="text">
                <strong><?= __('Linkedin') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($profissionai->linkedin)); ?>
                </blockquote>
            </div>
                                            <div class="related">
            <h4><?= __('Related Servicos Prestados') ?></h4>
            <?php if (!empty($profissionai->servicos_prestados)) : ?>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tr>
                                                    <th><?= __('Id') ?></th>
                                                    <th><?= __('Nome') ?></th>
                                                    <th><?= __('Descricao') ?></th>
                                                    <th><?= __('Aop') ?></th>
                                                    <th><?= __('Created') ?></th>
                                                    <th><?= __('Modified') ?></th>
                                                <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    <?php foreach ($profissionai->servicos_prestados as $servicosPrestados) : ?>
                    <tr>
                                                    <td><?= h($servicosPrestados->id) ?></td>
                                                    <td><?= h($servicosPrestados->nome) ?></td>
                                                    <td><?= h($servicosPrestados->descricao) ?></td>
                                                    <td><?= h($servicosPrestados->aop) ?></td>
                                                    <td><?= h($servicosPrestados->created) ?></td>
                                                    <td><?= h($servicosPrestados->modified) ?></td>
                                                                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'ServicosPrestados', 'action' => 'view', $servicosPrestados->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'ServicosPrestados', 'action' => 'edit', $servicosPrestados->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'ServicosPrestados', 'action' => 'delete', $servicosPrestados->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servicosPrestados->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <?php endif; ?>
        </div>
    </div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
</div>