<?php
$isEditing = $isEditing ?? false;
$productFormAction = $isEditing ? '/dashboard/products/update/1' : '/dashboard/products/store';
?>

<form method="POST" action="<?= htmlspecialchars($productFormAction) ?>" class="p-6">
    <div class="grid gap-5 sm:grid-cols-2">
        <div class="sm:col-span-2">
            <label for="product_name" class="block text-sm font-medium text-gray-700">Product Name</label>
            <input id="product_name" name="product_name" type="text" value="<?= $isEditing ? 'MacBook Air M3' : '' ?>" placeholder="Enter product name" class="mt-2 w-full rounded-lg border border-gray-300 px-3 py-2.5 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100">
        </div>

        <div>
            <label for="sku" class="block text-sm font-medium text-gray-700">SKU</label>
            <input id="sku" name="sku" type="text" value="<?= $isEditing ? 'LAP-001' : '' ?>" placeholder="e.g. LAP-004" class="mt-2 w-full rounded-lg border border-gray-300 px-3 py-2.5 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100">
        </div>

        <div>
            <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
            <select id="category_id" name="category_id" class="mt-2 w-full rounded-lg border border-gray-300 px-3 py-2.5 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100">
                <option><?= $isEditing ? 'Electronics' : 'Select category' ?></option>
                <option>Accessories</option>
            </select>
        </div>

        <div>
            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
            <input id="price" name="price" type="number" value="<?= $isEditing ? '1099' : '' ?>" placeholder="0.00" class="mt-2 w-full rounded-lg border border-gray-300 px-3 py-2.5 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100">
        </div>

        <div>
            <label for="quantity" class="block text-sm font-medium text-gray-700">Quantity</label>
            <input id="quantity" name="quantity" type="number" value="<?= $isEditing ? '45' : '' ?>" placeholder="0" class="mt-2 w-full rounded-lg border border-gray-300 px-3 py-2.5 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100">
        </div>

        <div class="sm:col-span-2">
            <label for="product_description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea id="product_description" name="description" rows="3" placeholder="Short product description" class="mt-2 w-full resize-none rounded-lg border border-gray-300 px-3 py-2.5 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100"><?= $isEditing ? '13-inch, Midnight' : '' ?></textarea>
        </div>
    </div>

    <div class="mt-7 flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
        <a href="#" class="rounded-lg border border-gray-300 px-4 py-2.5 text-center text-sm font-medium text-gray-700 hover:bg-gray-50">Cancel</a>
        <button type="submit" class="rounded-lg bg-blue-600 px-4 py-2.5 text-sm font-medium text-white hover:bg-blue-700"><?= $isEditing ? 'Update Product' : 'Save Product' ?></button>
    </div>
</form>

