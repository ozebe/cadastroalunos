<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student[]|\Cake\Collection\CollectionInterface $student
 */
?>
<main class="app-content">
  <div class="app-title">
    <div class="row">
      <div class="tile tileIndexUser">
      <div class="col-md-12">
        <h3><?= $this->Html->link(__('Novo Usuário'), ['action' => 'add']) ?></h3>

    <h3><?= __('Usuários') ?></h3>
    <table class="table">
        <thead>
            <tr>
              <th scope="col"><?= $this->Paginator->sort('Usuário') ?></th>
              <th scope="col"><?= $this->Paginator->sort('E-mail') ?></th>
              <th scope="col"><?= $this->Paginator->sort('Grupo') ?></th>
              <th scope="col"><?= $this->Paginator->sort('Criado') ?></th>
              <th scope="col"><?= $this->Paginator->sort('Modificado') ?></th>
              <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
              <td><?= h($user->login) ?></td>
              <td><?= h($user->email) ?></td>
              <td><?= $user->has('role') ? $this->Html->link($user->role->role, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
              <td><?= h($user->created) ?></td>
              <td><?= h($user->modified) ?></td>
              <td class="actions">
                  <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $user->id]) ?>
                  <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id]) ?>
                  <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $user->id], ['confirm' => __('Tem certeza de que deseja excluir - {0}?', $user->login)]) ?>
              </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo ') . ' >') ?>
            <?= $this->Paginator->last(__('último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} gravado(s) de {{count}} total')]) ?></p>
    </div>
    </div>
</div>
</div>
</div>
</div>
</main>
