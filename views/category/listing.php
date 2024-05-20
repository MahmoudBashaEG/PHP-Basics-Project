<?php
loadPartialView('head');
?>



<div class="container mt-5">
    <h1 class="mb-4">Category Listing</h1>
    <div class="row">
        <?php foreach ($categories as $category) : ?>
            <!-- Product 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> <?= $category->title ?> </h5>
                    </div>
                </div>
                <a href="/category/details?id=<?= $category->id ?>">
                    <button type="button" class="btn btn-success"> Details </button>
                </a>
            </div>
        <?php endforeach; ?>

    </div>
</div>

<a href="/category/create">
    <button type="button" class='btn btn-success'>Add New Category </button>
</a>

<?php
loadPartialView('footer');
?>