<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
    </ul>
</nav>
          <div class="tile tileEditStudant">
            <h3 class="tile-title">Editar Usuário</h3>
            <div class="tile-body">

                <?= $this->Form->create($user) ?>
                <div class="form-group row">
                  <label class="control-label"></label>
                  <div class="col-md-4">
                    <?php echo $this->Form->control('login', ['label'=>'Usuário', 'class'=>'form-control']); ?>
                  </div>
                  <div class="col-md-4">
                    <?php echo $this->Form->control('password', ['label'=>'Senha', 'class'=>'form-control']); ?>
                  </div>
                  <div class="col-md-4">
                    <?php echo $this->Form->control('email', ['label'=>'E-mail', 'class'=>'form-control']); ?>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-4">
                    <?php echo $this->Form->input('roles_id', array(
                    	'options' => array(
                    		'' => 'Selecione o Grupo',
                    		'1' => 'Administrador',
                    		'2' => 'Professor'
                    	), 'label'=>'Grupo', 'class'=>'form-control',
                    )); ?>
                  </div>
                </div>

            </div>
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <?= $this->Form->button(__('Editar'), ['class'=>'btn btn-primary']) ?>
                </div>
                <?= $this->Form->end() ?>
              </div>
            </div>
          </div>
        </div>
