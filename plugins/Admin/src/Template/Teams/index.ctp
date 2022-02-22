<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $teams
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
    <div class="col-md-3">
        <div class="col-md-6 text-right">
            <?= $this->Html->link('Add Team', ['controller'=> 'Teams', 'action' => 'add'], ['class'=>'btn btn-primary'])?>
        </div>
        <div class="col-md-6 text-right">
            <?= $this->Html->link('Invites', ['controller'=> 'TeamsUsers', 'action' => 'invite'], ['class'=>'btn btn-success'])?>
        </div>
    </div>
</div>

<table class="table table-bordered table-striped"id="table">
    <thead>
    <tr style="border-bottom: 1px solid #ebebec">

        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
<!--        <th scope="col">--><?//= $this->Paginator->sort('N') ?><!--</th>-->
        <th scope="col"><?= $this->Paginator->sort('name') ?></th>
        <th scope="col" class="actions"><?= __('Actions') ?></th>
    </tr>
    </thead>

    <tbody style="border-top: 0">
    <?php foreach ($teams as $team): ?>
        <tr id="info-column">
            <td><?= $this->Number->format($team->id) ?></td>
<!--            <td>--><?// echo $i++ ?>
            </td>
            <td><?= h($team->name) ?></td>
            <td class="actions">
                <?= $this->Html->link('Users', ['controller'=> 'TeamsUsers', 'action' => 'index',$team->id], ['class'=>'btn btn-success'])?>
                <?= $this->Html->link('Edit', ['controller'=> 'Teams', 'action' => 'edit', $team->id], ['class'=>'btn btn-warning'])?>
                <?= $this->Html->link('View', ['controller'=> 'Home', 'action' => 'categories','plugin'=>false, $team->id], ['class'=>'btn btn-primary'])?>
                <?= $this->Form->postLink('Delete', ['controller'=> 'Teams', 'action' => 'delete', $team->id], ['class'=>'btn btn-danger','confirm'=>'Are you sure?'])?>
            </td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>
