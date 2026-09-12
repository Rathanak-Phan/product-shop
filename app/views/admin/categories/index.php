
<div class="space-y-6">
    <!-- Page header -->
    <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Categories</h1>
            <p class="mt-1 text-gray-500">Organize products into clear shopping categories.</p>
        </div>

        <a href="#add-category" class="inline-flex items-center justify-center gap-2 rounded-lg bg-blue-600 px-4 py-2.5 font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
            <i class="fa-solid fa-plus" aria-hidden="true"></i>
            Add Category
        </a>
    </div>

    <!-- Statistics -->
    <section class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-3" aria-label="Category statistics">
        <article class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
            <div class="flex items-start justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500">Total Categories</p>
                    <p class="mt-2 text-3xl font-bold text-gray-900"><?= $total ?></p>
                </div>
                <span class="flex h-11 w-11 items-center justify-center rounded-lg bg-blue-50 text-blue-600">
                    <i class="fa-solid fa-tags" aria-hidden="true"></i>
                </span>
            </div>
        </article>

        <article class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
            <div class="flex items-start justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500">Active Categories</p>
                    <p class="mt-2 text-3xl font-bold text-green-600"><?= $active ?></p>
                </div>
                <span class="flex h-11 w-11 items-center justify-center rounded-lg bg-green-50 text-green-600">
                    <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
                </span>
            </div>
        </article>

        <article class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
            <div class="flex items-start justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500">Uncategorized Products</p>
                    <p class="mt-2 text-3xl font-bold text-amber-600"><?= $inactive ?></p>
                </div>
                <span class="flex h-11 w-11 items-center justify-center rounded-lg bg-amber-50 text-amber-600">
                    <i class="fa-solid fa-box-open" aria-hidden="true"></i>
                </span>
            </div>
        </article>
    </section>

    <!-- Category table -->
    <section class="overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm">
        <div class="flex flex-col gap-4 border-b border-gray-200 p-5 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h2 class="font-semibold text-gray-900">All Categories</h2>
                <p class="mt-1 text-sm text-gray-500">View and manage your product categories.</p>
            </div>

            <form action="/dashboard/categories" method="GET">
                <label class="relative w-full sm:w-64">
                    <span class="sr-only">Search categories</span>
                    <i class="fa-solid fa-magnifying-glass absolute left-3 top-3 text-gray-400" aria-hidden="true"></i>
                    <input 
                        type="search"
                        name="search"
                        value="<?= htmlspecialchars_decode($_GET['search'] ?? '') ?>" 
                        placeholder="Search category..." class="w-full rounded-lg border border-gray-300 py-2.5 pl-10 pr-3 text-sm text-gray-900 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100">
                </label>
            </form>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full min-w-[900px] text-left text-sm">
                <thead class="bg-gray-50 text-xs uppercase tracking-wide text-gray-500">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-semibold">Category</th>
                        <th scope="col" class="px-6 py-4 font-semibold">Description</th>
                        <th scope="col" class="px-6 py-4 font-semibold">Created By</th>
                        <th scope="col" class="px-6 py-4 font-semibold">Status</th>
                        <th scope="col" class="px-6 py-4 text-right font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <?php foreach ($categories as $category): ?>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <span class="font-medium text-gray-900"><?= htmlspecialchars($category['category_name']) ?></span>
                                </div>
                            </td>
                            <td class="max-w-xs px-6 py-4 text-gray-500"><?= htmlspecialchars($category['description']) ?></td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <div class="w-[40px] h-[40px] rounded-full overflow-hidden">
                                        <img src="<?= '/uploads/profile/' . $category['profile'] ?>" alt="">
                                    </div>
                                    <span class="font-medium text-gray-700"><?= htmlspecialchars($category['first_name'] . " " . $category['last_name']) ?></span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <?php $isActive = $category['status'] === 'Active'; ?>
                                <span class="rounded-full px-2.5 py-1 text-xs font-medium <?= $isActive ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-600' ?>">
                                    <?= htmlspecialchars($category['status']) ?>
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="/dashboard/categories/edit?id=<?= $category['id'] ?>#edit-category" class="inline-flex h-9 w-9 items-center justify-center rounded-lg text-blue-600 hover:bg-blue-50" title="Edit <?= htmlspecialchars($categoryRow['name']) ?>" aria-label="Edit <?= htmlspecialchars($categoryRow['name']) ?>">
                                    <i class="fa-solid fa-pen" aria-hidden="true"></i>
                                </a>
                                <a href="/dashboard/categories/remove?id=<?= $category['id'] ?>#delete-category" class="inline-flex h-9 w-9 items-center justify-center rounded-lg text-red-600 hover:bg-red-50" title="Delete <?= htmlspecialchars($categoryRow['name']) ?>" aria-label="Delete <?= htmlspecialchars($categoryRow['name']) ?>">
                                    <i class="fa-solid fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</div>

<!-- Add category modal -->
<div id="add-category" class="modal fixed inset-0 z-50 hidden items-center justify-center bg-gray-900/50 p-4">
    <div class="max-h-[90vh] w-full max-w-lg overflow-y-auto rounded-xl bg-white shadow-xl" role="dialog" aria-modal="true" aria-labelledby="add-category-title">
        <div class="flex items-center justify-between border-b border-gray-200 px-6 py-4">
            <h2 id="add-category-title" class="text-lg font-semibold text-gray-900">Add Category</h2>
            <a href="#" class="inline-flex h-9 w-9 items-center justify-center rounded-lg text-gray-400 hover:bg-gray-100 hover:text-gray-700" aria-label="Close add category modal">
                <i class="fa-solid fa-xmark text-xl" aria-hidden="true"></i>
            </a>
        </div>
        <?php $isEditingCategory = false; require './app/views/admin/categories/form.php'; ?>
    </div>
</div>

<!-- Edit category modal -->
<div id="edit-category" class="modal fixed inset-0 z-50 hidden items-center justify-center bg-gray-900/50 p-4">
    <div class="max-h-[90vh] w-full max-w-lg overflow-y-auto rounded-xl bg-white shadow-xl" role="dialog" aria-modal="true" aria-labelledby="edit-category-title">
        <div class="flex items-center justify-between border-b border-gray-200 px-6 py-4">
            <h2 id="edit-category-title" class="text-lg font-semibold text-gray-900">Edit Category</h2>
            <a href="/dashboard/categories" class="inline-flex h-9 w-9 items-center justify-center rounded-lg text-gray-400 hover:bg-gray-100 hover:text-gray-700" aria-label="Close edit category modal">
                <i class="fa-solid fa-xmark text-xl" aria-hidden="true"></i>
            </a>
        </div>
        <?php $isEditingCategory = true; require './app/views/admin/categories/form.php'; ?>
    </div>
</div>

<!-- Delete confirmation modal -->
<div id="delete-category" class="modal fixed inset-0 z-50 hidden items-center justify-center bg-gray-900/50 p-4">
    <div class="w-full max-w-md rounded-xl bg-white p-6 shadow-xl" role="dialog" aria-modal="true" aria-labelledby="delete-category-title">
        <span class="flex h-12 w-12 items-center justify-center rounded-full bg-red-100 text-red-600">
            <i class="fa-solid fa-trash" aria-hidden="true"></i>
        </span>
        <h2 id="delete-category-title" class="mt-4 text-lg font-semibold text-gray-900">Delete category?</h2>
        <p class="mt-2 text-sm leading-6 text-gray-500">Are you sure you want to delete this category? This action cannot be undone.</p>
        <div class="mt-7 flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
            <a href="/dashboard/categories" class="rounded-lg border border-gray-300 px-4 py-2.5 text-center text-sm font-medium text-gray-700 hover:bg-gray-50">Cancel</a>
            <form action="/dashboard/categories/delete" method="POST">
                <input type="hidden" name="id" value="<?= $delete_by_id ?>">
                <button type="submit" class="rounded-lg bg-red-600 px-4 py-2.5 text-sm font-medium text-white hover:bg-red-700">Delete Category</button>
            </form>
        </div>
    </div>
</div>

