<div class="space-y-6">
    <!-- Header -->
    <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Products</h1>
            <p class="mt-1 text-gray-500">Manage your product catalogue, stock, and prices.</p>
        </div>
        <a href="#add-product" class="inline-flex items-center justify-center gap-2 rounded-lg bg-blue-600 px-4 py-2.5 font-medium text-white hover:bg-blue-700">
            <i class="fa-solid fa-plus" aria-hidden="true"></i>Add Product
        </a>
    </div>

    <!-- Statistics -->
    <div class="grid grid-cols-2 gap-4 xl:grid-cols-4">
        <div class="rounded-xl border bg-white p-5 shadow-sm">
            <p class="text-sm text-gray-500">All Products</p>
            <p class="mt-2 text-2xl font-bold">120</p>
        </div>
        <div class="rounded-xl border bg-white p-5 shadow-sm">
            <p class="text-sm text-gray-500">Low Stock</p>
            <p class="mt-2 text-2xl font-bold text-amber-600">8</p>
        </div>
        <div class="rounded-xl border bg-white p-5 shadow-sm">
            <p class="text-sm text-gray-500">Out of Stock</p>
            <p class="mt-2 text-2xl font-bold text-red-600">3</p>
        </div>
        <div class="rounded-xl border bg-white p-5 shadow-sm">
            <p class="text-sm text-gray-500">Categories</p>
            <p class="mt-2 text-2xl font-bold">12</p>
        </div>
    </div>

    <!-- Search & Filters -->
    <div class="rounded-xl border bg-white p-4 shadow-sm">
        <div class="flex flex-col gap-3 lg:flex-row">
            <label class="relative flex-1">
                <i class="fa-solid fa-magnifying-glass absolute left-3 top-3 text-gray-400" aria-hidden="true"></i>
                <input type="search" placeholder="Search by product name or SKU..." class="w-full rounded-lg border border-gray-300 py-2.5 pl-10 pr-4 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100">
            </label>
            <select class="rounded-lg border border-gray-300 px-3 py-2.5 text-gray-700">
                <option>All categories</option>
                <option>Electronics</option>
                <option>Accessories</option>
            </select>
            <select class="rounded-lg border border-gray-300 px-3 py-2.5 text-gray-700">
                <option>All stock status</option>
                <option>In stock</option>
                <option>Low stock</option>
                <option>Out of stock</option>
            </select>
            <button class="rounded-lg border border-gray-300 px-4 py-2.5 font-medium text-gray-700 hover:bg-gray-50">
                <i class="fa-solid fa-filter mr-2" aria-hidden="true"></i>Filter
            </button>
        </div>
    </div>

    <!-- Products Table -->
    <div class="overflow-hidden rounded-xl border bg-white shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full min-w-[820px] text-left">
                <thead class="border-b bg-gray-50 text-xs uppercase tracking-wide text-gray-500">
                    <tr>
                        <th class="px-6 py-4">Product</th>
                        <th class="px-6 py-4">SKU</th>
                        <th class="px-6 py-4">Category</th>
                        <th class="px-6 py-4">Price</th>
                        <th class="px-6 py-4">Stock</th>
                        <th class="px-6 py-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-sm">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-50 text-blue-600">
                                    <i class="fa-solid fa-laptop" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">MacBook Air M3</p>
                                    <p class="text-xs text-gray-500">13-inch, Midnight</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-gray-600">LAP-001</td>
                        <td class="px-6 py-4 text-gray-600">Electronics</td>
                        <td class="px-6 py-4 font-medium">$1,099.00</td>
                        <td class="px-6 py-4">
                            <span class="rounded-full bg-green-100 px-2.5 py-1 text-xs font-medium text-green-700">45 in stock</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#edit-product" class="mr-4 text-blue-600 hover:text-blue-800" title="Edit product">
                                <i class="fa-solid fa-pen" aria-hidden="true"></i>
                                <span class="sr-only">Edit</span>
                            </a>
                            <a href="#delete-product" class="text-red-600 hover:text-red-800" title="Delete product">
                                <i class="fa-solid fa-trash" aria-hidden="true"></i>
                                <span class="sr-only">Delete</span>
                            </a>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-purple-50 text-purple-600">
                                    <i class="fa-solid fa-headphones" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">Wireless Headphones</p>
                                    <p class="text-xs text-gray-500">Noise cancelling</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-gray-600">AUD-002</td>
                        <td class="px-6 py-4 text-gray-600">Accessories</td>
                        <td class="px-6 py-4 font-medium">$129.00</td>
                        <td class="px-6 py-4">
                            <span class="rounded-full bg-amber-100 px-2.5 py-1 text-xs font-medium text-amber-700">8 in stock</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#edit-product" class="mr-4 text-blue-600 hover:text-blue-800" title="Edit product">
                                <i class="fa-solid fa-pen" aria-hidden="true"></i>
                                <span class="sr-only">Edit</span>
                            </a>
                            <a href="#delete-product" class="text-red-600 hover:text-red-800" title="Delete product">
                                <i class="fa-solid fa-trash" aria-hidden="true"></i>
                                <span class="sr-only">Delete</span>
                            </a>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-orange-50 text-orange-600">
                                    <i class="fa-solid fa-keyboard" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">Mechanical Keyboard</p>
                                    <p class="text-xs text-gray-500">RGB, Brown switches</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-gray-600">KEY-003</td>
                        <td class="px-6 py-4 text-gray-600">Accessories</td>
                        <td class="px-6 py-4 font-medium">$89.00</td>
                        <td class="px-6 py-4">
                            <span class="rounded-full bg-red-100 px-2.5 py-1 text-xs font-medium text-red-700">Out of stock</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#edit-product" class="mr-4 text-blue-600 hover:text-blue-800" title="Edit product">
                                <i class="fa-solid fa-pen" aria-hidden="true"></i>
                                <span class="sr-only">Edit</span>
                            </a>
                            <a href="#delete-product" class="text-red-600 hover:text-red-800" title="Delete product">
                                <i class="fa-solid fa-trash" aria-hidden="true"></i>
                                <span class="sr-only">Delete</span>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="flex flex-col gap-3 border-t px-6 py-4 text-sm sm:flex-row sm:items-center sm:justify-between">
            <p class="text-gray-500">Showing 1–3 of 120 products</p>
            <div class="flex gap-2">
                <button class="rounded-lg border px-3 py-1.5 text-gray-400" disabled>Previous</button>
                <button class="rounded-lg border border-blue-600 bg-blue-600 px-3 py-1.5 text-white">1</button>
                <button class="rounded-lg border px-3 py-1.5 hover:bg-gray-50">2</button>
                <button class="rounded-lg border px-3 py-1.5 hover:bg-gray-50">Next</button>
            </div>
        </div>
    </div>
</div>

<!-- Product Modals -->
<div id="add-product" class="modal fixed inset-0 z-50 hidden items-center justify-center bg-gray-900/50 p-4">
    <div class="max-h-[90vh] w-full max-w-2xl overflow-y-auto rounded-xl bg-white shadow-xl" role="dialog" aria-modal="true" aria-labelledby="add-product-title">
        <div class="flex items-center justify-between border-b border-gray-200 px-6 py-4">
            <h2 id="add-product-title" class="text-lg font-semibold text-gray-900">Add Product</h2>
            <a href="#" class="inline-flex h-9 w-9 items-center justify-center rounded-lg text-gray-400 hover:bg-gray-100 hover:text-gray-700" aria-label="Close add product modal">
                <i class="fa-solid fa-xmark text-xl" aria-hidden="true"></i>
            </a>
        </div>
        <?php $isEditing = false; require './app/views/admin/products/form.php'; ?>
    </div>
</div>

<div id="edit-product" class="modal fixed inset-0 z-50 hidden items-center justify-center bg-gray-900/50 p-4">
    <div class="max-h-[90vh] w-full max-w-2xl overflow-y-auto rounded-xl bg-white shadow-xl" role="dialog" aria-modal="true" aria-labelledby="edit-product-title">
        <div class="flex items-center justify-between border-b border-gray-200 px-6 py-4">
            <h2 id="edit-product-title" class="text-lg font-semibold text-gray-900">Edit Product</h2>
            <a href="#" class="inline-flex h-9 w-9 items-center justify-center rounded-lg text-gray-400 hover:bg-gray-100 hover:text-gray-700" aria-label="Close edit product modal">
                <i class="fa-solid fa-xmark text-xl" aria-hidden="true"></i>
            </a>
        </div>
        <?php $isEditing = true; require './app/views/admin/products/form.php'; ?>
    </div>
</div>

<div id="delete-product" class="modal fixed inset-0 z-50 hidden items-center justify-center bg-gray-900/50 p-4">
    <div class="w-full max-w-md rounded-xl bg-white p-6 shadow-xl" role="dialog" aria-modal="true" aria-labelledby="delete-product-title">
        <span class="flex h-12 w-12 items-center justify-center rounded-full bg-red-100 text-red-600">
            <i class="fa-solid fa-trash" aria-hidden="true"></i>
        </span>
        <h2 id="delete-product-title" class="mt-4 text-lg font-semibold text-gray-900">Delete product?</h2>
        <p class="mt-2 text-sm leading-6 text-gray-500">Are you sure you want to delete this product? This action cannot be undone.</p>
        <div class="mt-7 flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
            <a href="#" class="rounded-lg border border-gray-300 px-4 py-2.5 text-center text-sm font-medium text-gray-700 hover:bg-gray-50">Cancel</a>
            <button type="button" class="rounded-lg bg-red-600 px-4 py-2.5 text-sm font-medium text-white hover:bg-red-700">Delete Product</button>
        </div>
    </div>
</div>

