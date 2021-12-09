<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>

<?php
//if(isset($ajaxTest)){
//    echo $ajaxTest;
//}else{
//    echo 'ajaxTest not Set.';
//}
//
//
//if(isset($clients)){
//    echo $clients;
//}else{
//    echo 'clients not Set.';
//}
//
//?>

<div class="products col-md-7 form large-9 medium-8 columns content">
    <?= $this->Form->create($product , ['enctype'=>'multipart/form-data']) ?>
    <fieldset>
        <legend><?= __('Add Product') ?></legend>
        <div class="form-group">
        <? echo $this->Form->control('name',['required','class'=>'form-control form-group']);?>
        </div>
        <div class="form-group">
        <? echo $this->Form->control('category_id', ['options' => $categories,'empty' => 'Choose','required','id'=>'category_id','class'=>'form-control form-group']); ?>
        </div>
        <div class="form-group typecategories-select">
            <? echo $this->Form->control('typecategory_id',  ['type' => 'select','empty' => 'Choose', 'multiple' => false,'selected'=>'Your Value', 'options' => $typecategories,]); ?>
            <?php if ($this->request->is('AjaX')){
                echo 'aksdkasda';
            }
            else{
                echo 'nit';
            }
            ?>
        </div>
        <div class="form-group">
            <label>Image</label>
        <?=  $this->Form->file('img',['required','class'=>'form-control form-group']);?>
        </div>
        <div class="form-group">
        <? echo $this->Form->control('price',['required','class'=>'form-control form-group']); ?>
        </div>
    </fieldset>
    <?= $this->Form->button('Add',['class'=>'btn btn-success btn-lg btn-block']) ?>
    <?= $this->Form->end() ?>
</div>



<?
//$query = "SELECT * FROM `typecategories`";
//$res = mysql_query($query);
//echo '<script>
//        var regions=[';
//while($row = mysql_fetch_array($res))
//{
//    echo '{"region_name": "'.$row['region_name'].'",';
//    echo '"region_code": "'.$row['region_code'].'",';
//    echo '"value": "'.$row['value'].'"},';
//}
//echo '</script>';
?>

<script>

    $('#category_id').change(function(){
        $('.typecategories-select').fadeIn('slow');
        var category_id = $(this).val();
        console.log(category_id);
        $.ajax({
            type: "post",
            url: "<?= \Cake\Routing\Router::url(["controller"=>"Products","action"=>"add",'plugin'=>'admin']); ?>",
            data: {category_id:category_id},
            success: function(data){
                console.log('AjaX Success')
                // console.log(data)
            },
            error: function(){alert('AjaX Failed')}
        });
    });

</script>
