<?php loadPartialView('head'); ?>

<div class="container mt-5">
    <h2>Add New Product</h2>
    <form action="/product/create" id="productForm" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <input class="form-control" id="description" name="description" required></input>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image:</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category:</label>
            <select class="form-select" id="category" name="category" required>
                <option value="">Select a category</option>
                <?php foreach ($categories as $category) : ?>
                    <option value=<?= $category->id; ?>> <?= $category->title ?> </option>
                <?php endforeach; ?>
                <!-- Add more categories as needed -->
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</div>
<?php loadPartialView('footer'); ?>