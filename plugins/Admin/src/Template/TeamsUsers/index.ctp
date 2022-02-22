<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $teamsUsers
 */
?>
<div class="row" id="admin-header">

    <div class="col-md-6 offset-md-1">
        <form action="
<!--        --><?//= $this->Url->build(['action'=>'search'])?>
"method="get">
            <div class="d-flex "style="">
                <input type="search" name="search" class="form-control">
                <div class="input-group-prepend">
                    <button class="btn btn-primary input-group-text"type="submit">Search</button>
                    <!--                    --><?//= $this->form->control('search')?>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-3 text-right">
        <?= $this->Html->link('Invite Users', ['controller'=> 'TeamsUsers','action' => 'add',$id], ['class'=>'btn btn-success'])?>
    </div>
</div>

<table class="table table-bordered table-striped"id="table">
    <thead>
    <tr style="border-bottom: 1px solid #ebebec">

        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('team') ?></th>
        <th scope="col"><?= $this->Paginator->sort('user') ?></th>
        <th scope="col"><?= $this->Paginator->sort('role') ?></th>
        <th scope="col"><?= $this->Paginator->sort('verified') ?></th>



        <th scope="col" class="actions"><?= __('Actions') ?></th>
    </tr>
    </thead>

    <tbody style="border-top: 0">
    <?php foreach ($teamsUsers as $teamsUser): ?>
        <tr id="info-column">
            <td><?= $this->Number->format($teamsUser->id) ?></td>
            <td><?= $this->Html->link($teamsUser->team->name, ['controller' => 'Categories', 'action' => 'view', $teamsUser->team->id])  ?></td>
            <td><?= $this->Html->link($teamsUser->user->name, ['controller' => 'Typecategories', 'action' => 'view', $teamsUser->user->id])  ?></td>
            <td><?= $teamsUser->role ?></td>
            <td><?= $teamsUser->verified ?></td>


            <td class="actions">
                <?= $this->Html->link('Edit', ['controller'=> 'TeamsUsers', 'action' => 'edit', $teamsUser->id], ['class'=>'btn btn-warning'])?>
<!--                --><?//= $this->Html->link('View', ['controller'=> 'Home', 'action' => 'categories','plugin'=>false, $teamsUser->id], ['class'=>'btn btn-primary'])?>
                <?= $this->Form->postLink('Delete', ['controller'=> 'TeamsUsers', 'action' => 'delete', $teamsUser->id], ['class'=>'btn btn-danger','confirm'=>'Are you sure?'])?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
