<?php require __DIR__ . '/../partials/head.php'; ?>

<?php require __DIR__ . '/../partials/nav.php'; ?>

<?php require __DIR__ . '/../partials/banner.php'; ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <a href="/patients" class="text-blue-500 hover:underline mb-6 inline-block">Go back</a> <br>
        <div class="">
            <p>Name: <?= $patient['name'] ?></p>
            <p>Age: <?= $patient['age'] ?></p>
        </div>

        <form action="" class="mt-6" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $patient['id'] ?>">
            <button class="text-sm text-red-500">Delete</button>
        </form>
    </div>
</main>

<?php require __DIR__ . '/../partials/footer.php'; ?>