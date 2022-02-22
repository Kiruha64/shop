<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $typecategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Typecategory'), ['action' => 'edit', $typecategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Typecategory'), ['action' => 'delete', $typecategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typecategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Typecategories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Typecategory'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="typecategories view large-9 medium-8 columns content">
    <h3><?= h($typecategory->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($typecategory->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $typecategory->has('category') ? $this->Html->link($typecategory->category->name, ['controller' => 'Categories', 'action' => 'view', $typecategory->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($typecategory->id) ?></td>
        </tr>
    </table>
</div>

