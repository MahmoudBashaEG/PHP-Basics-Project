<?php loadPartialView('head'); ?>

<div class="container mt-5">
    <h2>Category</h2>
    <form action="/category/update" id="productForm" method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>

            <input type="text" class="form-control" id="title" value=<?= $category->title ?> name="title" required>

            <input type="hidden" value='put' name="_method">
            <input type="hidden" value='<?= $category->id ?>' name="id">

        </div>

        <button type="submit" class="btn btn-primary">Update Category</button>
    </form>
</div>

<?php loadPartialView('footer'); ?>