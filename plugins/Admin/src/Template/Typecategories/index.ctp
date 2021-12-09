<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $typecategories
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
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-3 text-right">
        <?= $this->Html->link('Add Category', ['controller'=> $title, 'action' => 'add'], ['class'=>'btn btn-primary'])?>
    </div>
</div>

<table class="table table-bordered table-striped"id="table">
    <thead>
    <tr style="border-bottom: 1px solid #ebebec">

        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('name') ?></th>
        <th scope="col"><?= $this->Paginator->sort('category') ?></th>
        <th scope="col" class="actions"><?= __('Actions') ?></th>
    </tr>
    </thead>

    <tbody style="border-top: 0">
    <?php foreach ($typecategories as $typecategory): ?>
        <tr id="info-column">
            <td><?= $this->Number->format($typecategory->id) ?></td>
            <td><?= h($typecategory->name) ?></td>
            <td><?= $typecategory->has('category') ? $this->Html->link($typecategory->category->name, ['controller' => 'Categories', 'action' => 'view', $typecategory->category->id]) : '' ?></td>

            <td class="actions">
                <?= $this->Html->link('Edit', ['controller'=> $title, 'action' => 'edit', $typecategory->id], ['class'=>'btn btn-warning'])?>
                <?= $this->Html->link('View', ['controller'=> 'Home', 'action' => 'categories','plugin'=>false, $typecategory->id], ['class'=>'btn btn-primary'])?>
                <?= $this->Form->postLink('Delete', ['controller'=> $title, 'action' => 'delete', $typecategory->id], ['class'=>'btn btn-danger','confirm'=>'Are you sure?'])?>
            </td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>
