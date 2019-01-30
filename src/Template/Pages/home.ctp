<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'Sistema';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('main.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Sistema</h1>
      </div>
      <div class="login-box">
        <?= $this->Form->create() ?>
        <div class="form-group">
        </div>
          <div class="form-group">
            <div class="col-sm-12">
              <?php echo $this->Form->control('login', ['label'=>'Usuário', 'class'=>'form-control']); ?>
            </div>
          <div>
          <div class="form-group">
            <div class="col-sm-12">
              <?php echo $this->Form->control('password', ['label'=>'Senha','class'=>'form-control']); ?>
            </div>
          </div>
          <div class="form-group btn-container">
            <div class="col-sm-12">
              <?= $this->Form->button(__('Entrar'), ['class'=>'btn btn-primary btn-block']) ?>

            </div>
            <?= $this->Form->end() ?>
          </div>
      </div>
      </div>
      </div>
    </section>
  </body>
</html>
