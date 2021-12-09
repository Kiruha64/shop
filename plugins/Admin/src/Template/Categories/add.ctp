<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $category
 */
?>

<div class="products col-md-7 form large-9 medium-8 columns content">
    <?= $this->Form->create($category) ?>
    <fieldset>
        <legend><?= __('Add Category') ?></legend>
        <div class="form-group">
            <? echo $this->Form->control('name',['required','class'=>'form-control form-group']);?>
        </div>
    </fieldset>
    <?= $this->Form->button('Add',['class'=>'btn btn-success btn-lg btn-block']) ?>
    <?= $this->Form->end() ?>
</div>
