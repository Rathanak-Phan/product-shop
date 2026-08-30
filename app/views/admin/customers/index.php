<div class="space-y-6">
    <!-- Header -->
    <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Customers</h1>
            <p class="mt-1 text-gray-500">View customer activity and account status.</p>
        </div>
        <a href="#add-customer" class="inline-flex items-center justify-center gap-2 rounded-lg bg-blue-600 px-4 py-2.5 font-medium text-white hover:bg-blue-700">
            <i class="fa-solid fa-plus" aria-hidden="true"></i>Add Customer
        </a>
    </div>

    <!-- Stats -->
    <div class="grid grid-cols-2 gap-4 xl:grid-cols-4">
        <div class="rounded-xl border bg-white p-5 shadow-sm">
            <p class="text-sm text-gray-500">Total Customers</p>
            <p class="mt-2 text-2xl font-bold">850</p>
        </div>
        <div class="rounded-xl border bg-white p-5 shadow-sm">
            <p class="text-sm text-gray-500">Active Now</p>
            <p class="mt-2 text-2xl font-bold text-green-600">812</p>
        </div>
        <div class="rounded-xl border bg-white p-5 shadow-sm">
            <p class="text-sm text-gray-500">New This Month</p>
            <p class="mt-2 text-2xl font-bold text-blue-600">64</p>
        </div>
        <div class="rounded-xl border bg-white p-5 shadow-sm">
            <p class="text-sm text-gray-500">Inactive</p>
            <p class="mt-2 text-2xl font-bold text-amber-600">38</p>
        </div>
    </div>

    <!-- Search & Filter -->
    <div class="rounded-xl border bg-white p-4 shadow-sm">
        <div class="flex flex-col gap-3 lg:flex-row">
            <label class="relative flex-1">
                <i class="fa-solid fa-magnifying-glass absolute left-3 top-3 text-gray-400" aria-hidden="true"></i>
                <input type="search" placeholder="Search customer by name, email or phone..." class="w-full rounded-lg border border-gray-300 py-2.5 pl-10 pr-4 outline-none focus:border-blue-500">
            </label>
            <select class="rounded-lg border border-gray-300 px-3 py-2.5 text-gray-700">
                <option>All status</option>
                <option>Active</option>
                <option>Inactive</option>
            </select>
            <button class="rounded-lg border border-gray-300 px-4 py-2.5 font-medium text-gray-700 hover:bg-gray-50">
                <i class="fa-solid fa-filter mr-2" aria-hidden="true"></i>Filter
            </button>
        </div>
    </div>

    <!-- Table -->
    <div class="overflow-hidden rounded-xl border bg-white shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full min-w-[850px] text-left">
                <thead class="border-b bg-gray-50 text-xs uppercase tracking-wide text-gray-500">
                    <tr>
                        <th class="px-6 py-4">Customer</th>
                        <th class="px-6 py-4">Phone</th>
                        <th class="px-6 py-4">Orders</th>
                        <th class="px-6 py-4">Total Spent</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-sm">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <span class="flex h-9 w-9 items-center justify-center rounded-full bg-blue-600 font-medium text-white">D</span>
                                <div>
                                    <p class="font-medium text-gray-900">Dara Sok</p>
                                    <p class="text-xs text-gray-500">dara@gmail.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-gray-600">012 345 678</td>
                        <td class="px-6 py-4 font-medium">12</td>
                        <td class="px-6 py-4 font-medium">$3,420.00</td>
                        <td class="px-6 py-4">
                            <span class="rounded-full bg-green-100 px-2.5 py-1 text-xs font-medium text-green-700">Active</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#edit-customer" class="mr-4 text-blue-600 hover:text-blue-800" title="Edit customer">
                                <i class="fa-solid fa-pen" aria-hidden="true"></i>
                                <span class="sr-only">Edit</span>
                            </a>
                            <a href="#delete-customer" class="text-red-600 hover:text-red-800" title="Delete customer">
                                <i class="fa-solid fa-trash" aria-hidden="true"></i>
                                <span class="sr-only">Delete</span>
                            </a>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <span class="flex h-9 w-9 items-center justify-center rounded-full bg-purple-600 font-medium text-white">S</span>
                                <div>
                                    <p class="font-medium text-gray-900">Srey Chan</p>
                                    <p class="text-xs text-gray-500">srey@gmail.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-gray-600">098 765 432</td>
                        <td class="px-6 py-4 font-medium">5</td>
                        <td class="px-6 py-4 font-medium">$840.00</td>
                        <td class="px-6 py-4">
                            <span class="rounded-full bg-green-100 px-2.5 py-1 text-xs font-medium text-green-700">Active</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#edit-customer" class="mr-4 text-blue-600 hover:text-blue-800" title="Edit customer">
                                <i class="fa-solid fa-pen" aria-hidden="true"></i>
                                <span class="sr-only">Edit</span>
                            </a>
                            <a href="#delete-customer" class="text-red-600 hover:text-red-800" title="Delete customer">
                                <i class="fa-solid fa-trash" aria-hidden="true"></i>
                                <span class="sr-only">Delete</span>
                            </a>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <span class="flex h-9 w-9 items-center justify-center rounded-full bg-amber-500 font-medium text-white">V</span>
                                <div>
                                    <p class="font-medium text-gray-900">Vanthorn Lim</p>
                                    <p class="text-xs text-gray-500">vanthorn@gmail.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-gray-600">077 112 233</td>
                        <td class="px-6 py-4 font-medium">1</td>
                        <td class="px-6 py-4 font-medium">$89.00</td>
                        <td class="px-6 py-4">
                            <span class="rounded-full bg-gray-100 px-2.5 py-1 text-xs font-medium text-gray-600">Inactive</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#edit-customer" class="mr-4 text-blue-600 hover:text-blue-800" title="Edit customer">
                                <i class="fa-solid fa-pen" aria-hidden="true"></i>
                                <span class="sr-only">Edit</span>
                            </a>
                            <a href="#delete-customer" class="text-red-600 hover:text-red-800" title="Delete customer">
                                <i class="fa-solid fa-trash" aria-hidden="true"></i>
                                <span class="sr-only">Delete</span>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="flex items-center justify-between border-t px-6 py-4 text-sm">
            <p class="text-gray-500">Showing 1–3 of 850 customers</p>
            <div class="flex gap-2">
                <button class="rounded-lg border px-3 py-1.5 text-gray-400" disabled>Previous</button>
                <button class="rounded-lg border border-blue-600 bg-blue-600 px-3 py-1.5 text-white">1</button>
                <button class="rounded-lg border px-3 py-1.5 hover:bg-gray-50">2</button>
                <button class="rounded-lg border px-3 py-1.5 hover:bg-gray-50">Next</button>
            </div>
        </div>
    </div>
</div>

<!-- Customer Modals -->
<div id="add-customer" class="modal fixed inset-0 z-50 hidden items-center justify-center bg-gray-900/50 p-4">
    <div class="w-full max-w-lg rounded-xl bg-white shadow-xl" role="dialog" aria-modal="true" aria-labelledby="add-customer-title">
        <div class="flex items-center justify-between border-b border-gray-200 px-6 py-4">
            <h2 id="add-customer-title" class="text-lg font-semibold text-gray-900">Add Customer</h2>
            <a href="#" class="inline-flex h-9 w-9 items-center justify-center rounded-lg text-gray-400 hover:bg-gray-100" aria-label="Close add customer modal">
                <i class="fa-solid fa-xmark text-xl" aria-hidden="true"></i>
            </a>
        </div>
        <?php $isEditingCustomer = false; require './app/views/admin/customers/form.php'; ?>
    </div>
</div>

<div id="edit-customer" class="modal fixed inset-0 z-50 hidden items-center justify-center bg-gray-900/50 p-4">
    <div class="w-full max-w-lg rounded-xl bg-white shadow-xl" role="dialog" aria-modal="true" aria-labelledby="edit-customer-title">
        <div class="flex items-center justify-between border-b border-gray-200 px-6 py-4">
            <h2 id="edit-customer-title" class="text-lg font-semibold text-gray-900">Edit Customer</h2>
            <a href="#" class="inline-flex h-9 w-9 items-center justify-center rounded-lg text-gray-400 hover:bg-gray-100" aria-label="Close edit customer modal">
                <i class="fa-solid fa-xmark text-xl" aria-hidden="true"></i>
            </a>
        </div>
        <?php $isEditingCustomer = true; require './app/views/admin/customers/form.php'; ?>
    </div>
</div>

<div id="delete-customer" class="modal fixed inset-0 z-50 hidden items-center justify-center bg-gray-900/50 p-4">
    <div class="w-full max-w-md rounded-xl bg-white p-6 shadow-xl" role="dialog" aria-modal="true" aria-labelledby="delete-customer-title">
        <span class="flex h-12 w-12 items-center justify-center rounded-full bg-red-100 text-red-600">
            <i class="fa-solid fa-trash" aria-hidden="true"></i>
        </span>
        <h2 id="delete-customer-title" class="mt-4 text-lg font-semibold">Delete customer?</h2>
        <p class="mt-2 text-sm leading-6 text-gray-500">Are you sure you want to delete this customer? This action cannot be undone.</p>
        <div class="mt-7 flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
            <a href="#" class="rounded-lg border border-gray-300 px-4 py-2.5 text-center text-sm font-medium text-gray-700">Cancel</a>
            <button type="button" class="rounded-lg bg-red-600 px-4 py-2.5 text-sm font-medium text-white">Delete Customer</button>
        </div>
    </div>
</div>
