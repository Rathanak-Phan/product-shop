<div class="space-y-6">
    <!-- Header -->
    <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Orders</h1>
            <p class="mt-1 text-gray-500">Review orders and keep customers updated.</p>
        </div>
        <a href="#create-order" class="inline-flex items-center justify-center gap-2 rounded-lg bg-blue-600 px-4 py-2.5 font-medium text-white hover:bg-blue-700">
            <i class="fa-solid fa-plus" aria-hidden="true"></i>Create Order
        </a>
    </div>

    <!-- Stats -->
    <div class="grid grid-cols-2 gap-4 xl:grid-cols-4">
        <div class="rounded-xl border bg-white p-5 shadow-sm">
            <p class="text-sm text-gray-500">Total Orders</p>
            <p class="mt-2 text-2xl font-bold">320</p>
        </div>
        <div class="rounded-xl border bg-white p-5 shadow-sm">
            <p class="text-sm text-gray-500">Pending</p>
            <p class="mt-2 text-2xl font-bold text-amber-600">24</p>
        </div>
        <div class="rounded-xl border bg-white p-5 shadow-sm">
            <p class="text-sm text-gray-500">Completed</p>
            <p class="mt-2 text-2xl font-bold text-green-600">284</p>
        </div>
        <div class="rounded-xl border bg-white p-5 shadow-sm">
            <p class="text-sm text-gray-500">Revenue</p>
            <p class="mt-2 text-2xl font-bold">$12,850</p>
        </div>
    </div>

    <!-- Search & Filter -->
    <div class="rounded-xl border bg-white p-4 shadow-sm">
        <div class="flex flex-col gap-3 lg:flex-row">
            <label class="relative flex-1">
                <i class="fa-solid fa-magnifying-glass absolute left-3 top-3 text-gray-400" aria-hidden="true"></i>
                <input type="search" placeholder="Search order number or customer..." class="w-full rounded-lg border border-gray-300 py-2.5 pl-10 pr-4 outline-none focus:border-blue-500">
            </label>
            <select class="rounded-lg border border-gray-300 px-3 py-2.5 text-gray-700">
                <option>All statuses</option>
                <option>Pending</option>
                <option>Processing</option>
                <option>Completed</option>
                <option>Cancelled</option>
            </select>
            <button class="rounded-lg border border-gray-300 px-4 py-2.5 font-medium text-gray-700 hover:bg-gray-50">
                <i class="fa-solid fa-filter mr-2" aria-hidden="true"></i>Filter
            </button>
        </div>
    </div>

    <!-- Orders Table -->
    <div class="overflow-hidden rounded-xl border bg-white shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full min-w-[850px] text-left">
                <thead class="border-b bg-gray-50 text-xs uppercase tracking-wide text-gray-500">
                    <tr>
                        <th class="px-6 py-4">Order</th>
                        <th class="px-6 py-4">Customer</th>
                        <th class="px-6 py-4">Date</th>
                        <th class="px-6 py-4">Total</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-sm">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 font-medium text-blue-600">#ORD-001</td>
                        <td class="px-6 py-4">
                            <p class="font-medium">Dara Sok</p>
                            <p class="text-xs text-gray-500">dara@gmail.com</p>
                        </td>
                        <td class="px-6 py-4 text-gray-600">Aug 29, 2026</td>
                        <td class="px-6 py-4 font-medium">$1,099.00</td>
                        <td class="px-6 py-4">
                            <span class="rounded-full bg-green-100 px-2.5 py-1 text-xs font-medium text-green-700">Completed</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#order-details" class="mr-4 text-gray-600 hover:text-gray-900" title="View order">
                                <i class="fa-solid fa-eye" aria-hidden="true"></i>
                                <span class="sr-only">View</span>
                            </a>
                            <a href="#edit-order" class="mr-4 text-blue-600 hover:text-blue-800" title="Edit order">
                                <i class="fa-solid fa-pen" aria-hidden="true"></i>
                                <span class="sr-only">Edit</span>
                            </a>
                            <a href="#delete-order" class="text-red-600 hover:text-red-800" title="Delete order">
                                <i class="fa-solid fa-trash" aria-hidden="true"></i>
                                <span class="sr-only">Delete</span>
                            </a>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 font-medium text-blue-600">#ORD-002</td>
                        <td class="px-6 py-4">
                            <p class="font-medium">Srey Chan</p>
                            <p class="text-xs text-gray-500">srey@gmail.com</p>
                        </td>
                        <td class="px-6 py-4 text-gray-600">Aug 28, 2026</td>
                        <td class="px-6 py-4 font-medium">$218.00</td>
                        <td class="px-6 py-4">
                            <span class="rounded-full bg-blue-100 px-2.5 py-1 text-xs font-medium text-blue-700">Processing</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#order-details" class="mr-4 text-gray-600 hover:text-gray-900" title="View order">
                                <i class="fa-solid fa-eye" aria-hidden="true"></i>
                                <span class="sr-only">View</span>
                            </a>
                            <a href="#edit-order" class="mr-4 text-blue-600 hover:text-blue-800" title="Edit order">
                                <i class="fa-solid fa-pen" aria-hidden="true"></i>
                                <span class="sr-only">Edit</span>
                            </a>
                            <a href="#delete-order" class="text-red-600 hover:text-red-800" title="Delete order">
                                <i class="fa-solid fa-trash" aria-hidden="true"></i>
                                <span class="sr-only">Delete</span>
                            </a>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 font-medium text-blue-600">#ORD-003</td>
                        <td class="px-6 py-4">
                            <p class="font-medium">Vanthorn Lim</p>
                            <p class="text-xs text-gray-500">vanthorn@gmail.com</p>
                        </td>
                        <td class="px-6 py-4 text-gray-600">Aug 27, 2026</td>
                        <td class="px-6 py-4 font-medium">$89.00</td>
                        <td class="px-6 py-4">
                            <span class="rounded-full bg-amber-100 px-2.5 py-1 text-xs font-medium text-amber-700">Pending</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#order-details" class="mr-4 text-gray-600 hover:text-gray-900" title="View order">
                                <i class="fa-solid fa-eye" aria-hidden="true"></i>
                                <span class="sr-only">View</span>
                            </a>
                            <a href="#edit-order" class="mr-4 text-blue-600 hover:text-blue-800" title="Edit order">
                                <i class="fa-solid fa-pen" aria-hidden="true"></i>
                                <span class="sr-only">Edit</span>
                            </a>
                            <a href="#delete-order" class="text-red-600 hover:text-red-800" title="Delete order">
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
            <p class="text-gray-500">Showing 1–3 of 320 orders</p>
            <div class="flex gap-2">
                <button class="rounded-lg border px-3 py-1.5 text-gray-400" disabled>Previous</button>
                <button class="rounded-lg border border-blue-600 bg-blue-600 px-3 py-1.5 text-white">1</button>
                <button class="rounded-lg border px-3 py-1.5 hover:bg-gray-50">2</button>
                <button class="rounded-lg border px-3 py-1.5 hover:bg-gray-50">Next</button>
            </div>
        </div>
    </div>
</div>

<!-- Order Details Modal -->
<div id="order-details" class="modal fixed inset-0 z-50 hidden items-center justify-center bg-gray-900/50 p-4">
    <div class="w-full max-w-lg rounded-xl bg-white shadow-xl">
        <div class="flex items-center justify-between border-b px-6 py-4">
            <div>
                <h2 class="text-lg font-semibold">Order #ORD-001</h2>
                <p class="text-sm text-gray-500">Placed Aug 29, 2026</p>
            </div>
            <a href="#" class="text-gray-400 hover:text-gray-700">
                <i class="fa-solid fa-xmark text-xl" aria-hidden="true"></i>
            </a>
        </div>
        <div class="space-y-4 p-6 text-sm">
            <div class="flex justify-between">
                <span class="text-gray-500">Customer</span>
                <span class="font-medium">Dara Sok</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-500">Payment</span>
                <span class="font-medium">Paid</span>
            </div>
            <div class="border-y py-4">
                <div class="flex justify-between">
                    <span>MacBook Air M3 × 1</span>
                    <span class="font-medium">$1,099.00</span>
                </div>
            </div>
            <div class="flex justify-between text-base font-semibold">
                <span>Total</span>
                <span>$1,099.00</span>
            </div>
        </div>
        <div class="flex justify-end border-t px-6 py-4">
            <a href="#" class="rounded-lg bg-gray-800 px-4 py-2.5 font-medium text-white hover:bg-gray-900">Close</a>
        </div>
    </div>
</div>

<!-- Order Modals -->
<div id="create-order" class="modal fixed inset-0 z-50 hidden items-center justify-center bg-gray-900/50 p-4">
    <div class="w-full max-w-lg rounded-xl bg-white shadow-xl" role="dialog" aria-modal="true" aria-labelledby="create-order-title">
        <div class="flex items-center justify-between border-b border-gray-200 px-6 py-4">
            <h2 id="create-order-title" class="text-lg font-semibold text-gray-900">Create Order</h2>
            <a href="#" class="inline-flex h-9 w-9 items-center justify-center rounded-lg text-gray-400 hover:bg-gray-100" aria-label="Close create order modal">
                <i class="fa-solid fa-xmark text-xl" aria-hidden="true"></i>
            </a>
        </div>
        <?php $isEditingOrder = false; require './app/views/admin/orders/form.php'; ?>
    </div>
</div>

<div id="edit-order" class="modal fixed inset-0 z-50 hidden items-center justify-center bg-gray-900/50 p-4">
    <div class="w-full max-w-lg rounded-xl bg-white shadow-xl" role="dialog" aria-modal="true" aria-labelledby="edit-order-title">
        <div class="flex items-center justify-between border-b border-gray-200 px-6 py-4">
            <h2 id="edit-order-title" class="text-lg font-semibold text-gray-900">Edit Order</h2>
            <a href="#" class="inline-flex h-9 w-9 items-center justify-center rounded-lg text-gray-400 hover:bg-gray-100" aria-label="Close edit order modal">
                <i class="fa-solid fa-xmark text-xl" aria-hidden="true"></i>
            </a>
        </div>
        <?php $isEditingOrder = true; require './app/views/admin/orders/form.php'; ?>
    </div>
</div>

<div id="delete-order" class="modal fixed inset-0 z-50 hidden items-center justify-center bg-gray-900/50 p-4">
    <div class="w-full max-w-md rounded-xl bg-white p-6 shadow-xl" role="dialog" aria-modal="true" aria-labelledby="delete-order-title">
        <span class="flex h-12 w-12 items-center justify-center rounded-full bg-red-100 text-red-600">
            <i class="fa-solid fa-trash" aria-hidden="true"></i>
        </span>
        <h2 id="delete-order-title" class="mt-4 text-lg font-semibold">Delete order?</h2>
        <p class="mt-2 text-sm leading-6 text-gray-500">Are you sure you want to delete this order? This action cannot be undone.</p>
        <div class="mt-7 flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
            <a href="#" class="rounded-lg border border-gray-300 px-4 py-2.5 text-center text-sm font-medium text-gray-700">Cancel</a>
            <button type="button" class="rounded-lg bg-red-600 px-4 py-2.5 text-sm font-medium text-white">Delete Order</button>
        </div>
    </div>
</div>

