<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $student->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $student->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Student'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tile tileEditStudant">
  <h3 class="tile-title">Adicionar Aluno <?= $_SESSION['Auth']['User']['id']; ?></h3>
  <div class="tile-body">

      <?= $this->Form->create($student) ?>
      <div class="form-group row">
        <input type="hidden" name="user_id" value='<?= $_SESSION['Auth']['User']['id']; ?>'>
        <label class="control-label"></label>
        <div class="col-md-4">
          <?php echo $this->Form->control('name', ['label'=>'Nome completo', 'class'=>'form-control']); ?>
        </div>
        <div class="col-md-4">
          <?php echo $this->Form->control('email', ['label'=>'E-mail', 'class'=>'form-control']); ?>
        </div>
        <div class="col-md-4">
          <label class="control-label">Foto</label>
          <?php echo $this->Form->file('photo', ['class'=>'form-control']); ?>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-md-4">
          <?php echo $this->Form->control('telephone', ['label'=>'Telefone', 'class'=>'form-control']); ?>
        </div>
        <div class="col-md-4">
          <?php echo $this->Form->control('cpf', ['label'=>'CPF', 'class'=>'form-control']); ?>
        </div>
        <div class="col-md-4">
          <?php echo $this->Form->control('cep', ['label'=>'CEP', 'class'=>'form-control']); ?>
        </div>
      </div>


      <div class="form-group row">
        <div class="col-md-4">
          <?php echo $this->Form->input('sex', array(
            'options' => array(
              '0' => 'Selecione o sexo',
              '1' => 'Masculino',
              '2' => 'Feminino'
            ), 'label'=>'Sexo', 'class'=>'form-control',
          )); ?>
        </div>
        <div class="col-md-4">
          <label class="control-label">Data de Nascimento</label><br>
          <?php echo $this->Form->date('birthdate', ['class'=>'form-control']); ?>
        </div>
        <div class="col-md-4">
          <?php echo $this->Form->control('address', ['label'=>'Endereço', 'class'=>'form-control']); ?>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-md-4">
          <?php echo $this->Form->control('uf', ['label'=>'UF', 'class'=>'form-control']); ?>
        </div>
        <div class="col-md-4">
          <?php echo $this->Form->control('city', ['label'=>'Cidade', 'class'=>'form-control']); ?>
        </div>
        <div class="col-md-4">
          <?php echo $this->Form->control('neighborhood', ['label'=>'Bairro', 'class'=>'form-control']); ?>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-md-4">
          <?php echo $this->Form->control('cep', ['label'=>'CEP', 'class'=>'form-control']); ?>
        </div>
        <div class="col-md-4">
          <?php echo $this->Form->control('publicplace', ['label'=>'Logradouro', 'class'=>'form-control']); ?>
        </div>
        <div class="col-md-4">
          <?php echo $this->Form->control('number', ['label'=>'Número', 'class'=>'form-control']); ?>
        </div>
      </div>

  </div>
  <div class="tile-footer">
    <div class="row">
      <div class="col-md-8 col-md-offset-3">
        <?= $this->Form->button(__('Adicionar'), ['class'=>'btn btn-primary']) ?>
      </div>
      <?= $this->Form->end() ?>
    </div>
  </div>
</div>
</div>
