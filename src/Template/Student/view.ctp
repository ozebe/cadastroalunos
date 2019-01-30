<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>
<main class="app-content">
  <div class="app-title">
    <div class="row">
      <div class="tile tileViewStudant">
      <div class="col-md-12">
        <?= $this->Html->link(__('Novo Aluno'), ['action' => 'add']) ?>
    <h3><?= h($student->name) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($student->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('E-mail') ?></th>
            <td><?= h($student->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Foto') ?></th>
            <td><img src="<?= $student->photo ?>" width="220px" height="150px"></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($student->telephone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CPF') ?></th>
            <td><?= h($student->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endereço') ?></th>
            <td><?= h($student->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UF') ?></th>
            <td><?= h($student->uf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cidade') ?></th>
            <td><?= h($student->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bairro') ?></th>
            <td><?= h($student->neighborhood) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CEP') ?></th>
            <td><?= h($student->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logradouro') ?></th>
            <td><?= h($student->publicplace) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Número') ?></th>
            <td><?= h($student->number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sex') ?></th>
            <td><?= $this->Number->format($student->sex) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birthdate') ?></th>
            <td><?= h($student->birthdate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criado') ?></th>
            <td><?= h($student->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($student->modified) ?></td>
        </tr>
    </table>
    </div>

</div>
</div>
</div>
</div>
</main>
