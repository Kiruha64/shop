
<div class="container-fluid">
    <div class="row">
        <? foreach ($products as $product):?>
            <div class="col-md-3">
                <div class="text-center article-view" style="max-width: 216px;max-height: 324px">
                    <img src="/<?= $product->img_path?>"style="max-width: 216px;max-height: 324px">
                    <h5><?= $this->Html->link($product->name, ['controller'=> 'Home', 'action' => 'view', $product->id])?></h5>
                    <strong><?= $product->price ?> Grn</strong>
                </div>
            </div>
        <?endforeach;?>

        <!--        --><?php
        //        $paginator = $this->Paginator->setTemplates([
        //            'number'=>'<li class="page-item "><a href="{{url}}" class="page-link">{{text}}</a></li>',
        //            'current'=>'<li class="page-item"><a href="{{url}}" class="page-link">{{text}}</a></li>',
        //            'first'=>'<li class="page-item"><a href="{{url}}" class="page-link">&laquo;</a></li>',
        //            'last'=>'<li class="page-item"><a href="{{url}}" class="page-link">&raquo;</a></li>',
        //            'prevActive'=>'<li class="page-item"><a href="{{url}}" class="page-link">Back</a></li>',
        //            'nextActive'=>'<li class="page-item"><a href="{{url}}" class="page-link">Forward</a></li>'
        //        ]);
        //        ?>
        <!--        <nav id="navigation">-->
        <!--            <ul class="pagination justify-content-center">-->
        <!--                --><?php
        //                if ($paginator->hasPrev()){
        //                    echo $paginator->prev();
        //                }
        //                echo $paginator->first();
        //
        //                echo $paginator->numbers();
        //
        //                echo $paginator->last();
        //
        //                if ($paginator->hasNext()){
        //                    echo $paginator->next();
        //                }
        //
        //                ?>
        <!--            </ul>-->
        <!--        </nav>-->

    </div>
</div>



