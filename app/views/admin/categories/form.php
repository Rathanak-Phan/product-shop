<?php
$isEditingCategory = $isEditingCategory ?? false;
$category = $category ?? [];

$formAction = $isEditingCategory
    ? '/dashboard/categories/update/1'
    : '/dashboard/categories/store';

$categoryName = $category['name'] ?? ($isEditingCategory ? 'Computers' : '');
$description = $category['description'] ?? ($isEditingCategory ? 'Laptops and computer equipment.' : '');
$status = $category['status'] ?? 'active';
?>

<form method="POST" action="<?= htmlspecialchars($formAction) ?>" class="p-6">
    <div class="space-y-5">
        <div>
            <label for="category_name" class="block text-sm font-medium text-gray-700">
                Category Name
            </label>
            <input
                id="category_name"
                name="category_name"
                type="text"
                value="<?= htmlspecialchars($categoryName) ?>"
                placeholder="e.g. Computers"
                class="mt-2 w-full rounded-lg border border-gray-300 px-3 py-2.5 text-gray-900 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
            >
        </div>

        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">
                Description
            </label>
            <textarea
                id="description"
                name="description"
                rows="4"
                placeholder="Briefly describe this category"
                class="mt-2 w-full resize-none rounded-lg border border-gray-300 px-3 py-2.5 text-gray-900 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
            ><?= htmlspecialchars($description) ?></textarea>
        </div>

        <div>
            <label for="status" class="block text-sm font-medium text-gray-700">
                Status
            </label>
            <select
                id="status"
                name="status"
                class="mt-2 w-full rounded-lg border border-gray-300 px-3 py-2.5 text-gray-900 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
            >
                <option value="active" <?= $status === 'active' ? 'selected' : '' ?>>Active</option>
                <option value="inactive" <?= $status === 'inactive' ? 'selected' : '' ?>>Inactive</option>
            </select>
        </div>
    </div>

    <div class="mt-7 flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
        <a href="#" class="rounded-lg border border-gray-300 px-4 py-2.5 text-center text-sm font-medium text-gray-700 hover:bg-gray-50">
            Cancel
        </a>
        <button type="submit" class="rounded-lg bg-blue-600 px-4 py-2.5 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
            <?= $isEditingCategory ? 'Update Category' : 'Save Category' ?>
        </button>
    </div>
</form>

