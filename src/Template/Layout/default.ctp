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

$cakeDescription = 'Início';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('main.css') ?>
</head>
<body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Sistema</a>
      <!-- Sidebar toggle button-->
      <?= $this->Html->link(__('Sair'), ['controller' => '/', 'action' => '']) ?></li>
      <!-- Navbar Right Menu-->
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><h3><?= $_SESSION['Auth']['User']['login']; ?></h3></p>
          <?php if( $_SESSION['Auth']['User']['roles_id'] == 1 ): ?>
          <p class="app-sidebar__user-designation">Administrador</p>
        <?php endif; ?>
          <?php if( $_SESSION['Auth']['User']['roles_id'] == 2 ): ?>
          <p class="app-sidebar__user-designation">Professor</p>
        <?php endif; ?>
        </div>
      </div>
      <ul class="app-menu">
        <li class="treeview"><a class="app-menu__item" <?= $this->Html->link(__('Cadastro de Alunos'), ['controller' => 'student', 'action' => '']) ?> <i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label"></span><i class="treeview-indicator fa fa-angle-right"></i></a></li>
        <?php
          if ($_SESSION['Auth']['User']['roles_id'] == 1) {
            echo "<li class='treeview'><a class='app-menu__item'" . $this->Html->link(__('Cadastro de Usuários'), ['controller' => 'users', 'action' => '']) . "<i class='app-menu__icon fa fa-file-text'></i><span class='app-menu__label'></span><i class='treeview-indicator fa fa-angle-right'></i></a></li>";
          }
        ?>


        <li class="treeview"><a class="app-menu__item" <?= $this->Html->link(__('Sair'), ['controller' => '/', 'action' => '']) ?> <i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label"></span><i class="treeview-indicator fa fa-angle-right"></i></a></li>
      </ul>
    </aside>

    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

</body>
</html>
