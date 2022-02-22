<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $teamsUser
 */
?>

<!--<div class="products col-md-7 form large-9 medium-8 columns content">-->
<!--    --><?//= $this->Form->create($teamsUser) ?>
<!--    <fieldset>-->
<!--        <legend>--><?//= __('Invite User') ?><!--</legend>-->
<!---->
<!--        --><?//= $this->Form->control('search');?>
<!---->
<!--    </fieldset>-->
<!--    --><?//= $this->Form->button('Add',['class'=>'btn btn-success btn-lg btn-block']) ?>
<!--    --><?//= $this->Form->end() ?>
<!--</div>-->
<!--<div class="row" id="admin-header">-->
<!--    <div class="col-md-6 offset-md-1">-->
<!--                <input type="search" name="search" class="form-control"id="search">-->
<!--        </form>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<table class="table table-bordered table-striped"id="table">-->
<!--    <thead>-->
<!--    <tr style="border-bottom: 1px solid #ebebec">-->
<!---->
<!--        <th scope="col">--><?//= $this->Paginator->sort('id') ?><!--</th>-->
<!--        <th scope="col">--><?//= $this->Paginator->sort('name') ?><!--</th>-->
<!--        <th scope="col">--><?//= $this->Paginator->sort('email') ?><!--</th>-->
<!---->
<!--        <th scope="col" class="actions">--><?//= __('Actions') ?><!--</th>-->
<!--    </tr>-->
<!--    </thead>-->
<!--    --><?//= $this->Form->create($teamsUser , ['enctype'=>'multipart/form-data']) ?>
<!--    <tbody style="border-top: 0"id="finded_users">-->
<!--    </tbody>-->
<!--    --><?//= $this->Form->end() ?>
<!--</table>-->

<div class="products col-md-7 form large-9 medium-8 columns content">
    <?= $this->Form->create($teamsUser) ?>
    <fieldset>
        <legend><?= __('Add User to Team') ?></legend>
        <div class="form-group">
            <? echo $this->Form->control('email',['required','class'=>'form-control form-group']);?>
            <div class="form-group">
                <? echo $this->Form->control('team_id', ['options' => $teams,'empty' => 'Choose','required','id'=>'team_id','class'=>'form-control form-group']); ?>
            </div>
            <div class="form-group">
                <? echo $this->Form->control('role',
                    ['options' => ['manager' => 'Manager','user'=>'User'],
                        'required','id'=>'role',
                        'class'=>'form-control form-group']) ?>
            </div>
        </div>
    </fieldset>
    <?= $this->Form->button('Add',['class'=>'btn btn-success btn-lg btn-block']) ?>
    <?= $this->Form->end() ?>
</div>

<script>
    //$(document).ready(function (){
    //    $('#search').keyup(function(){
    //        var searchkey = $(this).val();
    //        console.log(searchkey);
    //        searchCategoriestype(searchkey);
    //        function searchCategoriestype(keyword){
    //            var data = searchkey;
    //            $.ajax({
    //                type: "get",
    //                url: "<?//= $this->Url->build(["controller"=>"TeamsUsers","action"=>"search",'plugin'=>'admin']); ?>//",
    //                 data: {keyword:data},
    //                 success: function(response)
    //                 {
    //                     $('#finded_users').html(response)
    //                 },
    //                 error: function(){alert('AjaX Failed')}
    //             });
    //         }
    //     });
    // })
</script>
