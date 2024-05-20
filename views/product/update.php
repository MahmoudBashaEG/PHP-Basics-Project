<?php loadPartialView('head'); ?>


<div class="container mt-5">
    <h2>Update Product</h2>
    <form action="/product/update" id="productForm" method="post" enctype="multipart/form-data">
        <input type="hidden" value="<?= $product->id ?>" name="id">
        <input type="hidden" value="put" name="_method">


        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" value="<?= $product->title ?>" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <input type="text" class="form-control" id="description" value="<?= $product->description ?>" name="description" required></input>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image:</label>
            <input type="file" class="form-control" id="image" value="<?= $product->imagePath ?>" name="image" accept="image/*" required crt>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category:</label>
            <select class="form-select" id="category" name="category" required>
                <option value="<?= $product->categoryId ?>"> <?= $product->categoryId ?></option>

                <?php foreach ($categories as $category) : ?>
                    <option value="<?= $category->id; ?>"> <?= $category->title ?> </option>
                <?php endforeach; ?>

            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
</div>

<?php loadPartialView('footer'); ?>