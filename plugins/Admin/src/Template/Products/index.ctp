<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $products
 */
?>

<!--<div class="products index large-9 medium-8 columns content">-->
<!---->
<!--    <div class="paginator">-->
<!--        <ul class="pagination">-->
<!--            --><?//= $this->Paginator->first('<< ' . __('first')) ?>
<!--            --><?//= $this->Paginator->prev('< ' . __('previous')) ?>
<!--            --><?//= $this->Paginator->numbers() ?>
<!--            --><?//= $this->Paginator->next(__('next') . ' >') ?>
<!--            --><?//= $this->Paginator->last(__('last') . ' >>') ?>
<!--        </ul>-->
<!--        <p>--><?//= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?><!--</p>-->
<!--    </div>-->
<!--</div>-->


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
        <?= $this->Html->link('Add Product', ['controller'=> 'Products', 'action' => 'add'], ['class'=>'btn btn-primary'])?>
    </div>
</div>

<table class="table table-bordered table-striped"id="table">
    <thead>
    <tr style="border-bottom: 1px solid #ebebec">

        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('name') ?></th>
        <th scope="col"><?= $this->Paginator->sort('category_id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('price') ?></th>

        <th scope="col"><?= $this->Paginator->sort('isset') ?></th>

        <th>img_name</th>
        <th>img_path</th>
        <th scope="col"><?= $this->Paginator->sort('created') ?></th>
        <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
        <th scope="col" class="actions"><?= __('Actions') ?></th>
    </tr>
    </thead>

    <tbody style="border-top: 0">
    <?php foreach ($products as $product): ?>
        <tr id="info-column">
            <td><?= $this->Number->format($product->id) ?></td>
            <td><?= h($product->name) ?></td>
            <td><?= $this->Html->link($product->category->name, ['controller' => 'Categories', 'action' => 'view', $product->category->id])  ?></td>
            <td><?= h($product->price) ?></td>
            <td><?= $this->Number->format($product->isset) ?></td>

            <td><?= h($product->img_name) ?></td>
            <td><?= h($product->img_path) ?></td>
            <td><?= h($product->created) ?></td>
            <td><?= h($product->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link('Edit', ['controller'=> 'Products', 'action' => 'edit', $product->id], ['class'=>'btn btn-warning'])?>
                <?= $this->Html->link('Preview', ['controller'=> 'Home', 'action' => 'view','plugin'=>false, $product->id], ['class'=>'btn btn-info'])?>
                <?= $this->Form->postLink('Delete', ['controller'=> 'Products', 'action' => 'delete', $product->id], ['class'=>'btn btn-danger','confirm'=>'Are you sure?'])?>
            </td>

        </tr>

    <?endforeach;?>

    </tbody>
</table>



