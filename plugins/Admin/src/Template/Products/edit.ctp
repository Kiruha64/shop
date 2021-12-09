<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $product
 */
?>

<?php echo $this->Flash->render()?>

<div class="products col-md-7 form large-9 medium-8 columns content">
    <?= $this->Form->create($product, ['enctype'=>'multipart/form-data']) ?>
    <fieldset>
        <fieldset>
            <legend><?= __('Edit Product') ?></legend>
            <div class="form-group">
                <? echo $this->Form->control('name',['required','class'=>'form-control form-group']);?>
            </div>
            <div class="form-group">
                <? echo $this->Form->control('category_id', ['options' => $categories,'required' ,'class'=>'form-control form-group']); ?>
            </div>
            <div class="form-group">
                <label>Image</label><br>
                <img src="/<?= $product->img_path?>" style="max-width: 175px;max-height: 175px;padding: 10px 0px">
                <?=  $this->Form->file('img',['class'=>'form-control form-group']);?>
            </div>
            <div class="form-group">
                <? echo $this->Form->control('price',['required','class'=>'form-control form-group']); ?>
        </fieldset>
        <?= $this->Form->button('Edit',['class'=>'btn btn-success btn-lg btn-block']) ?>
    <?= $this->Form->end() ?>
</div>
