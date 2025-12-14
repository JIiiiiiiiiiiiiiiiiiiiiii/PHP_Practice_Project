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

        <footer class="mt-6">
            <a href="/patient/edit?id=<?= $patient['id'] ?>" class="rounded-md bg-indigo-600 px-3 py-2 text-sm
                font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2
                focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</a>
        </footer>

    </div>
</main>

<?php require __DIR__ . '/../partials/footer.php'; ?>