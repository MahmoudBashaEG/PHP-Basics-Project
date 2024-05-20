<?php loadPartialView('head'); ?>

<div class="container mt-5">
    <h2>Add New Category</h2>
    <form action="/category/create" id="productForm" method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Category</button>
    </form>
</div>

<?php loadPartialView('footer'); ?>