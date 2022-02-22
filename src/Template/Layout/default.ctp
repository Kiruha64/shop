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
 * @var \App\View\AppView $this
 */

?>


<!DOCTYPE html>
<html>
<head>

    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!--    --><?//= $this->Html->css('base.css') ?>
    <? $this->Html->css('default.css') ?>

    <!--    --><?//= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>


    <link rel="stylesheet" href="https://bootstraptema.ru/plugins/bootstrap/v3/3-3-6/bootstrap.css" />
    <script src="https://bootstraptema.ru/plugins/jquery/jquery-1.11.3.min.js"></script>
    <script src="https://bootstraptema.ru/plugins/2015/b-v3-3-6/bootstrap.min.js"></script>

    <?= $this->Html->script('https://code.jquery.com/ui/1.12.1/jquery-ui.js') ?>
    <?= $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js') ?>

    <script src="../../../webroot/js/ajax.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



</head>
<body style="background: #888888">

<style>
    * {
        outline: none !important
    }
    .dropdown-custom > .dropdown-menu {
        min-width:220px;
        padding:15px;
    }
    #btn-buy{
        padding: 6px 23px;
        border-radius: 16px!important;
    }

</style>

<nav class="navbar navbar-default" style="background: #000000;margin: 0;border: 0">

    <div class="navbar-header">
        <a class="navbar-brand" href="/home/index">BootstrapTema</a>
    </div>

    <div class="container-fluid ">
        <ul class="nav navbar-nav">
            <li class="dropdown dropdown-custom">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Материалы <span class="caret"></span></a>
                <div class="dropdown-menu">
                    <ul class="list-unstyled" role="menu">

                        <li>
                            <a href="#">Плагины Bootstrap</a>
                            <p class="small">Функциональные плагины для Bootstrap</p>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#" id="">Сниппеты Bootstrap</a>
                            <p class="small">Готовые HTML сниппеты для Bootstrap</p>
                        </li>
                    </ul>
                </div>
            </li>
            <? foreach ($menulists as $menulist):?>
                <li class="">
                    <?= $this->Html->link($menulist->name,['controller'=>'Home','action'=>'categories',$menulist->id],['class'=>'aas'])?>
                </li>
            <? endforeach; ?>
        </ul>
        <ul class="nav navbar-nav" style="float: right">
            <? if ($user_role == ''):?>
                <li><?= $this->Html->link('Sing In',['controller'=>'Users','action'=>'login'])?></li>
            <? endif;?>
            <? if ($user_role != ''):?>
                <li><?= $this->Html->link('Profile',['controller'=>'Users','action'=>'profile',$user_id])?></li>
                <li><?= $this->Html->link('Admin',['controller'=>'Admin','action'=>'index'])?></li>
            <? endif;?>

<!--            --><?// if ($user_role == 'owner'): ?>
<!--                <li>--><?//= $this->Html->link('Admin',['controller'=>'Admin','action'=>'index'])?><!--</li>-->
<!--            --><?// endif;?>
        </ul>
    </div>
</nav>
<?= $this->Flash->render() ?>
<div class="container clearfix" style="padding-top: 10px">
    <?= $this->fetch('content') ?>
</div>
<footer>
</footer>

<script>
    $(document).ready(function () {
        $('#btn-buy').click(function () {
            $.ajax({
                type: "POST",
                url: "<?= \Cake\Routing\Router::url(["controller" => "Home", "action" => "view", 1]); ?>",
                data: {category_id: $(this).val()},
                success: function (data) {
                    console.log('AjaX Success')
                    // console.log(data)
                },
                error: function () {
                    alert('AjaX Failed')
                }
            });
        });
    });
</script>
</body>
</html>
