<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $shifts
 */
?>
<!--<div class="shifts index large-9 medium-8 columns content">-->
<!--    <table cellpadding="0" cellspacing="0">-->
<!--        <thead>-->
<!--            <tr>-->
<!--                <th scope="col">--><?//= $this->Paginator->sort('id') ?><!--</th>-->
<!--                <th scope="col">--><?//= $this->Paginator->sort('time') ?><!--</th>-->
<!--                <th scope="col">--><?//= $this->Paginator->sort('user_id') ?><!--</th>-->
<!--                <th scope="col" class="actions">--><?//= __('Actions') ?><!--</th>-->
<!--            </tr>-->
<!--        </thead>-->
<!--        <tbody>-->
<!--            --><?php //foreach ($shifts as $shift): ?>
<!--            <tr>-->
<!--                <td>--><?//= $this->Number->format($shift->id) ?><!--</td>-->
<!--                <td>--><?//= $this->Number->format($shift->time) ?><!--</td>-->
<!--                <td>--><?//= $shift->has('user') ? $this->Html->link($shift->user->name, ['controller' => 'Users', 'action' => 'view', $shift->user->id]) : '' ?><!--</td>-->
<!--                <td class="actions">-->
<!--                    --><?//= $this->Html->link(__('View'), ['action' => 'view', $shift->id]) ?>
<!--                    --><?//= $this->Html->link(__('Edit'), ['action' => 'edit', $shift->id]) ?>
<!--                    --><?//= $this->Form->postLink(__('Delete'), ['action' => 'delete', $shift->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shift->id)]) ?>
<!--                </td>-->
<!--            </tr>-->
<!--            --><?php //endforeach; ?>
<!--        </tbody>-->
<!--    </table>-->
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
<style>
    #stop , #finish{
        display: none;
    }
    #time{

    }
    #time_block{
        border: 1px solid #6F6F6F;
        border-radius: 10px;
        padding: 15px 10px!important;
        background: #6F6F6F;
        color: orange;
    }
</style>
<div class="col-md-12"id="">
    <div class="col-12"id="time">
        <div class="col-2 text-center"id="time_block">
<!--            --><?// if ($status != 1):?>
            <div id="start_block">
                <?= $this->Form->button('Start',['class'=>'btn btn-success btn-block','id'=>'start']) ?>
            </div>
<!--            --><?// endif; ?>
<!--            --><?// if ($status == 1):?>
                <button id="stop" class="btn btn-primary">Stop/Resume</button><br>
<!--            --><?// endif; ?>
            <div class="mt-3">
                <label>h:</label><label id="hours">0</label>:
                <label>m:</label><label id="minutes">0</label>:
                <label>s:</label><label id="seconds">0</label><br>
            </div>
<!--            <p> --><?//= $timer?><!--</p>-->
<!--                        <button id="finish" class="btn btn-danger mt-3">Finish</button><br>-->
<!--            --><?// if ($status == 1):?>
                <?= $this->Form->button('Finish',['class'=>'btn btn-danger btn-lg btn-block','id'=>'finish']) ?>
<!--            --><?// endif; ?>

        </div>
    </div>
</div>




<?= $this->Html->script('Admin.shifts');?>

<script>


</script>


