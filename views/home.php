<?php
loadPartialView('head');
?>



<div class="container mt-5">
    <h1 class="mb-4">Product Listing</h1>
    <div class="row">
        <?php foreach ($products as $product) : ?>
            <!-- Product 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?= $product->imagePath ?>" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title"> <?= $product->title ?> </h5>
                        <p class="card-text"> <?= $product->description ?> </p>
                        <p class="card-text"><small class="text-muted"><?= $product->categoryId ?></small></p>
                    </div>
                </div>
                <a href="/product/details?id=<?= $product->id ?>">
                    <button type="button" class="btn btn-success"> Details </button>
                </a>
            </div>
        <?php endforeach; ?>

    </div>
</div>

<a href="/product/create">
    <button type="button" class='btn btn-success'>Add New Product </button>
</a>

<?php
loadPartialView('footer');
?>