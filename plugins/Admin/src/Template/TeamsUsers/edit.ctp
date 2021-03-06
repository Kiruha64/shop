<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $teamsUser
 */
?>
<div class="products col-md-7 form large-9 medium-8 columns content">
    <?= $this->Form->create($teamsUser, ['enctype'=>'multipart/form-data']) ?>
    <fieldset>
        <fieldset>
            <legend><?= __('Edit Product') ?></legend>
            <div class="form-group">
                <? echo $this->Form->control('name',['value'=>$teamsUser->user->email,'required','class'=>'form-control form-group']);?>
            </div>
            <div class="form-group">
                <? echo $this->Form->control('team_id', ['options' => $teams,'required','id'=>'team_id','class'=>'form-control form-group']); ?>
            </div>
            <div class="form-group">
                <? echo $this->Form->control('role',
                    ['options' => ['manager' => 'Manager','user'=>'User'],
                        'required','id'=>'role',
                        'class'=>'form-control form-group']) ?>
            </div>
        </fieldset>
        <?= $this->Form->button('Edit',['class'=>'btn btn-success btn-lg btn-block']) ?>
        <?= $this->Form->end() ?>
</div>


<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">-->
<!--    <ul class="side-nav">-->
<!--        <li class="heading">--><?//= __('Actions') ?><!--</li>-->
<!--        <li>--><?//= $this->Form->postLink(
//                __('Delete'),
//                ['action' => 'delete', $teamsUser->id],
//                ['confirm' => __('Are you sure you want to delete # {0}?', $teamsUser->id)]
//            )
//        ?><!--</li>-->
<!--        <li>--><?//= $this->Html->link(__('List Teams Users'), ['action' => 'index']) ?><!--</li>-->
<!--        <li>--><?//= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?><!--</li>-->
<!--        <li>--><?//= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?><!--</li>-->
<!--        <li>--><?//= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?><!--</li>-->
<!--        <li>--><?//= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?><!--</li>-->
<!--    </ul>-->
<!--</nav>-->
<!--<div class="teamsUsers form large-9 medium-8 columns content">-->
<!--    --><?//= $this->Form->create($teamsUser) ?>
<!--    <fieldset>-->
<!--        <legend>--><?//= __('Edit Teams User') ?><!--</legend>-->
<!--        --><?php
//            echo $this->Form->control('team_id', ['options' => $teams]);
//            echo $this->Form->control('user_id', ['options' => $users]);
//        ?>
<!--    </fieldset>-->
<!--    --><?//= $this->Form->button(__('Submit')) ?>
<!--    --><?//= $this->Form->end() ?>
<!--</div>-->
