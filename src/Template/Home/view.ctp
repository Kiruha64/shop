<div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
        <div class="col-md-8">
            <img src="/<?= $product->img_path?>" class="card-img col-md-12" alt="...">
        </div>
        <div class="col-md-4">
            <div class="card-body">
                <h5 class="card-title"><?= $product->name ?></h5>

                <p class="card-text"><?= $this->Html->link($product->category->name, ['controller' => 'Home', 'action' => 'categories', $product->category->id])  ?></p>
                <p class="card-text"><small class="">Added: <?= $product->created?></small></p>

                <button class="btn btn-success "id="btn-buy">Pay <?= $product->price ?> ₴</button>
            </div>
        </div>
    </div>
</div>
