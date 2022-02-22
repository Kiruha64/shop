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
<!--                    --><?//= $this->form->control('search')?>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-3 text-right">
        <?= $this->Html->link('Add Category', ['controller'=> 'Categories', 'action' => 'add'], ['class'=>'btn btn-primary'])?>
    </div>
</div>

    <table class="table table-bordered table-striped"id="table">
        <thead>
        <tr style="border-bottom: 1px solid #ebebec">

            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('name') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>

        <tbody style="border-top: 0">
        <?php foreach ($categories as $category): ?>
            <tr id="info-column">
                <td><?= $this->Number->format($category->id) ?></td>
                <td><?= h($category->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link('Edit', ['controller'=> 'Categories', 'action' => 'edit', $category->id], ['class'=>'btn btn-warning'])?>
                    <?= $this->Html->link('View', ['controller'=> 'Home', 'action' => 'categories','plugin'=>false, $category->id], ['class'=>'btn btn-primary'])?>
                    <?= $this->Form->postLink('Delete', ['controller'=> 'Categories', 'action' => 'delete', $category->id], ['class'=>'btn btn-danger','confirm'=>'Are you sure?'])?>
                </td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>





<script>
    $(document).ready(function (){
        $("#search").keyup(function (){
            var searchkey = $(this).val();
            searchCategories(searchkey);
        })
        function searchCategories(keyword){
            var data = keyword;
            $.ajax({
                method:'get',
                url: "<?= $this->Url->build(['controller'=>'categories','action'=>'search','plugin'=>'admin']); ?>" ,
                data:keyword,
                success: function (response){
                    console.log(response)
                },
                error: function(){alert('AjaX Failed')}
            })
        }
    })
    //$(document).ready(function (){
    //    $("#search").keyup(function (){
    //        var searchkey = $(this).val();
    //        searchCategories(searchkey);
    //    })
    //    function searchCategories(keyword){
    //        $.ajax({
    //            type: "get",
    //            url: "<?//= $this->Url->build(["controller"=>"Products","action"=>"index",'plugin'=>'admin']); ?>//",
    //            data: keyword,
    //            success: function(data,response){
    //                console.log('AjaX Success');
    //                console.log(response);
    //            },
    //            error: function(){alert('AjaX Failed')}
    //        });
    //    };
    //})
</script>
