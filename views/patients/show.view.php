<?php require __DIR__ . '/../partials/head.php'; ?>

<?php require __DIR__ . '/../partials/nav.php'; ?>

<?php require __DIR__ . '/../partials/banner.php'; ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <a href="/patients" class="text-blue-500 hover:underline mb-6 inline-block">Go back</a> <br>
        <p>Name: <?= $patient['name'] ?></p>
        <p>Age: <?= $patient['age'] ?></p>
    </div>
</main>

<?php require __DIR__ . '/../partials/footer.php'; ?>