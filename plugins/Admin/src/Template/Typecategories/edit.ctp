<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $typecategory
 */
?>


<div class="products col-md-7 form large-9 medium-8 columns content">
    <?= $this->Form->create($typecategory) ?>
    <fieldset>
        <legend><?= __('Edit Categories type') ?></legend>
        <div class="form-group">
            <? echo $this->Form->control('name',['required','class'=>'form-control form-group']);?>
            <? echo $this->Form->control('category_id', ['options' => $categories,'required','class'=>'form-control form-group']);?>


        </div>
    </fieldset>
    <?= $this->Form->button('Edit',['class'=>'btn btn-success btn-lg btn-block']) ?>
    <?= $this->Form->end() ?>
</div>
