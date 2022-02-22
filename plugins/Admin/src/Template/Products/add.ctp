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
            <label> Type Category</label>
            <select id="typecategory_id"class="form-group form-control" name="typecategory_id" >

            </select>
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

?>

<script>

    $(document).ready(function (){
        $('#category_id').change(function(){
            var category_id = $(this).val();
            console.log(category_id);
            searchCategoriestype(category_id);
            function searchCategoriestype(keyword){
                var data = category_id;
                $.ajax({
                    type: "get",
                    url: "<?= $this->Url->build(["controller"=>"Products","action"=>"search",'plugin'=>'admin']); ?>",
                    data: {keyword:data},
                    success: function(response)
                    {
                        $('#typecategory_id option').remove();
                        $('#typecategory_id').append(response)
                        $('.typecategories-select').fadeIn('slow');
                    },
                    error: function(){alert('AjaX Failed')}
                });
            }
        });
    })
    //$('document').ready(function(){
    //    $('#category_id').change(function(){
    //        var searchkey = $(this).val();
    //        console.log(category_id);
    //        searchCategories(searchkey);
    //    });
    //
    //    function searchCategories(keyword){
    //        var data = keyword;
    //        console.log(data)
    //        $.ajax({
    //            method: 'get',
    //            url : "<?//= $this->Url->build(["controller"=>"Products","action"=>"search",'plugin'=>'admin']); ?>//",
    //            data: {keyword:data},
    //            success: function(response)
    //            {
    //                $('.table').html(response);
    //                console.log(data);
    //                console.log(response);
    //            }
    //            // success: function()
    //            // {
    //            //     console.log(data);
    //            // }
    //        });
    //    };
    //});
</script>
