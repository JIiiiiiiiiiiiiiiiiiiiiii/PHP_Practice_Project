<?php require __DIR__ . '/../partials/head.php'; ?>

<?php require __DIR__ . '/../partials/nav.php'; ?>

<?php require __DIR__ . '/../partials/banner.php'; ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <a href="/patients" class="text-blue-500 hover:underline mb-6 inline-block">Go back</a> <br>
        <h1 class="text-3xl font-bold mb-6">Create New Patient</h1>
        <form action="/patient" method="POST">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="id" value="<?= $patient['id'] ?>">
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label for="name" class="block text-sm/6 font-medium text-gray-900">Name</label>
                            <div class="mt-2">
                                <div
                                    class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                    <input id="name" type="text" name="name" placeholder="John Doe"
                                        value="<?= $patient['name'] ?>"
                                        class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
                                    <?= $_POST['name'] ?? '' ?>
                                </div>
                                <?php if(isset($errors['name'])) : ?>
                                <p class="text-red-500 text-xs mt-2"><?= htmlspecialchars($errors['name']) ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="sm:col-span-4">
                            <label for="age" class="block text-sm/6 font-medium text-gray-900">Age</label>
                            <div class="mt-2">
                                <div
                                    class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                    <input id="age" type="number" name="age" placeholder="21"
                                        value="<?= $patient['age'] ?>"
                                        class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
                                </div>
                                <?php if(!empty($errors['age'])) : ?>
                                <p class="text-red-500 text-xs mt-2"><?= htmlspecialchars($errors['age']) ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6 flex gap-x-4 justify-end items-center">
                    <button type="button" class="text-red-500 mr-auto"
                        onclick="document.querySelector('#delete-form').submit()">Delete</button>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <a href="/patients" type="submit"
                            class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500">Cancel</a>

                        <button type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                    </div>
                </div>
            </div>
        </form>

        <form id="delete-form" class="hidden" method="POST" action="/patient">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $patient['id'] ?>">
        </form>
    </div>
</main>

<?php require __DIR__ . '/../partials/footer.php'; ?>