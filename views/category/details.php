<?php
loadPartialView('head');
?>



<div class="container mt-5">
    <h1 class="mb-4">Category Details</h1>
    <div class="row">

        <!-- Product 1 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"> <?= $category->title ?> </h5>
                </div>
            </div>
            <a href="/category/update?id=<?= $category->id ?>">
                <button type="button" class="btn btn-success"> Edit </button>
            </a>

            <a href="/category/delete?id=<?= $category->id ?>">
                <button type="button" class="btn btn-danger"> Delete </button>
            </a>

        </div>

    </div>
</div>


<?php
loadPartialView('footer');
?>