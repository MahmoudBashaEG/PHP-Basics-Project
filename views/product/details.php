<?php
loadPartialView('head');
?>


<div class="container mt-5">
    <h2>Product Details</h2>
    <div class="mb-3">
        <label for="title" class="form-label">Title:</label>
        <h4><?= $product->title ?></h4>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description:</label>
        <h5> <?= $product->description ?></h5>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Image:</label>
        <img src="<?= $product->imagePath ?>" alt="">
    </div>

    <div class="mb-3">
        <label for="category" class="form-label">Category:</label>
        <h6><?= $product->categoryId ?></h6>
    </div>

    <a href="/product/update?id=<?= $product->id ?>">
        <button type="button" class="btn btn-success"> Edit </button>
    </a>

    <a href="/product/delete?id=<?= $product->id ?>">
        <button type="button" class="btn btn-danger"> Delete </button>
    </a>
</div>


<?php
loadPartialView('footer');
?>