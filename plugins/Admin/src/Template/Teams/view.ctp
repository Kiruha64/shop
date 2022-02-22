<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $team
 */
?>

<div class="teams view large-9 medium-8 columns content">
    <h3><?= h($team->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($team->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($team->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= $this->Number->format($team->user_id) ?></td>
        </tr>
    </table>
</div>
