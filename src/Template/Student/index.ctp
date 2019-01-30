<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student[]|\Cake\Collection\CollectionInterface $student
 */
?>
<main class="app-content">
  <div class="app-title">
    <div class="row">
      <div class="tile tileIndexStudant">
      <div class="col-md-12">

        <h3><?= $this->Html->link(__('Novo Aluno'), ['action' => 'add']) ?></h3>
    <h3><?= __('Aluno') ?></h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('E-mail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Telefone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CPF') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Sexo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Aniversário') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CEP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Criado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Modificado') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($student as $student): ?>
            <tr>
              <td><?= h($student->id) ?></td>
                <td><?= h($student->name) ?></td>
                <td><?= h($student->email) ?></td>
                <td><?= h($student->telephone) ?></td>
                <td><?= h($student->cpf) ?></td>
                <?php if( $this->Number->format($student->sex) == 0 ): ?>
                  <td>Selecione o Sexo</td>
                <?php endif; ?>
                <?php if( $this->Number->format($student->sex) == 1 ): ?>
                  <td>Masculino</td>
                <?php endif; ?>
                <?php if( $this->Number->format($student->sex) == 2 ): ?>
                  <td>Feminino</td>
                <?php endif; ?>
                <td><?= h($student->birthdate) ?></td>
                <td><?= h($student->city) ?></td>
                <td><?= h($student->cep) ?></td>
                <td><?= h($student->created) ?></td>
                <td><?= h($student->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', ]) ?>
                      <?php
                        if($_SESSION['Auth']['User']['id'] == $student->user_id )
                        {
                          echo $this->Html->link(__('Editar'), ['action' => 'edit', $student->id]);
                        }
                        elseif ($_SESSION['Auth']['User']['roles_id'] == 1) {
                          echo $this->Html->link(__('Editar'), ['action' => 'edit', $student->id]);
                        }
                      ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $student->id], ['confirm' => __('Tem certeza de que deseja excluir - {0}?', $student->name)]) ?>
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
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
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
