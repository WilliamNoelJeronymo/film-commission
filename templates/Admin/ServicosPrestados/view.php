<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ServicosPrestado $servicosPrestado
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
                        <strong><?= __('Nome') ?></strong><br>
                        <?= h($servicosPrestado->nome) ?>
                    </div>
                </div>
                                                    <div class="row">
                <div class="col-md-12">
                    <strong><?= __('Id') ?></strong><br>
                    <?= $this->Number->format($servicosPrestado->id) ?>
                </div>
            </div>
                    <div class="row">
                <div class="col-md-12">
                    <strong><?= __('Aop') ?></strong><br>
                    <?= $this->Number->format($servicosPrestado->aop) ?>
                </div>
            </div>
                                    <div class="row">
                <div class="col-md-12 ">
                    <strong><?= __('Created') ?></strong><br>
                    <?= h($servicosPrestado->created) ?>
                </div>
            </div>
                    <div class="row">
                <div class="col-md-12 ">
                    <strong><?= __('Modified') ?></strong><br>
                    <?= h($servicosPrestado->modified) ?>
                </div>
            </div>
                
                        <div class="text">
                <strong><?= __('Descricao') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($servicosPrestado->descricao)); ?>
                </blockquote>
            </div>
                                            <div class="related">
            <h4><?= __('Related Profissionais') ?></h4>
            <?php if (!empty($servicosPrestado->profissionais)) : ?>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tr>
                                                    <th><?= __('Id') ?></th>
                                                    <th><?= __('Nome Fantasia') ?></th>
                                                    <th><?= __('Razao Social') ?></th>
                                                    <th><?= __('Cnpj Ou Cpf') ?></th>
                                                    <th><?= __('Endereco') ?></th>
                                                    <th><?= __('Telefone') ?></th>
                                                    <th><?= __('Telefone2') ?></th>
                                                    <th><?= __('Whatsapp') ?></th>
                                                    <th><?= __('Email') ?></th>
                                                    <th><?= __('Sobre Empresa') ?></th>
                                                    <th><?= __('Usuarios Id') ?></th>
                                                    <th><?= __('Perfil') ?></th>
                                                    <th><?= __('Facebook') ?></th>
                                                    <th><?= __('Instagram') ?></th>
                                                    <th><?= __('Twitter') ?></th>
                                                    <th><?= __('Linkedin') ?></th>
                                                    <th><?= __('Status') ?></th>
                                                    <th><?= __('Created') ?></th>
                                                    <th><?= __('Modified') ?></th>
                                                <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    <?php foreach ($servicosPrestado->profissionais as $profissionais) : ?>
                    <tr>
                                                    <td><?= h($profissionais->id) ?></td>
                                                    <td><?= h($profissionais->nome_fantasia) ?></td>
                                                    <td><?= h($profissionais->razao_social) ?></td>
                                                    <td><?= h($profissionais->cnpj_ou_cpf) ?></td>
                                                    <td><?= h($profissionais->endereco) ?></td>
                                                    <td><?= h($profissionais->telefone) ?></td>
                                                    <td><?= h($profissionais->telefone2) ?></td>
                                                    <td><?= h($profissionais->whatsapp) ?></td>
                                                    <td><?= h($profissionais->email) ?></td>
                                                    <td><?= h($profissionais->sobre_empresa) ?></td>
                                                    <td><?= h($profissionais->usuarios_id) ?></td>
                                                    <td><?= h($profissionais->perfil) ?></td>
                                                    <td><?= h($profissionais->facebook) ?></td>
                                                    <td><?= h($profissionais->instagram) ?></td>
                                                    <td><?= h($profissionais->twitter) ?></td>
                                                    <td><?= h($profissionais->linkedin) ?></td>
                                                    <td><?= h($profissionais->status) ?></td>
                                                    <td><?= h($profissionais->created) ?></td>
                                                    <td><?= h($profissionais->modified) ?></td>
                                                                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Profissionais', 'action' => 'view', $profissionais->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Profissionais', 'action' => 'edit', $profissionais->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Profissionais', 'action' => 'delete', $profissionais->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profissionais->id)]) ?>
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