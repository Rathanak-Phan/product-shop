<aside class="w-64 h-screen shrink-0 sticky top-0 bg-gray-900 text-white flex flex-col overflow-y-auto">
    <!-- Logo -->
    <div class="px-6 py-5 border-b border-gray-800">
        <h1 class="text-xl font-bold">
            <i class="fa-solid fa-cart-shopping mr-2" aria-hidden="true"></i>Product Shop
        </h1>
        <p class="text-sm text-gray-400 mt-1">Admin Panel</p>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 px-4 py-6 space-y-2">
        <a href="/dashboard" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-800 hover:text-white">
            <i class="fa-solid fa-chart-column w-5 text-center" aria-hidden="true"></i>
            <span>Dashboard</span>
        </a>

        <a href="/dashboard/products" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-800 hover:text-white">
            <i class="fa-solid fa-box w-5 text-center" aria-hidden="true"></i>
            <span>Products</span>
        </a>

        <a href="/dashboard/categories" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-800 hover:text-white">
            <i class="fa-solid fa-tags w-5 text-center" aria-hidden="true"></i>
            <span>Categories</span>
        </a>

        <a href="/dashboard/orders" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-800 hover:text-white">
            <i class="fa-solid fa-cart-shopping w-5 text-center" aria-hidden="true"></i>
            <span>Orders</span>
        </a>

        <a href="/dashboard/customers" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-800 hover:text-white">
            <i class="fa-solid fa-users w-5 text-center" aria-hidden="true"></i>
            <span>Customers</span>
        </a>

        <a href="/dashboard/settings" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-800 hover:text-white">
            <i class="fa-solid fa-gear w-5 text-center" aria-hidden="true"></i>
            <span>Settings</span>
        </a>
    </nav>

    <!-- Bottom -->
    <div class="p-4 border-t border-gray-800">
        <a href="/" class="flex items-center gap-3 px-4 py-3 text-gray-300 hover:bg-gray-800 rounded-lg">
            <i class="fa-solid fa-house w-5 text-center" aria-hidden="true"></i>
            <span>Back to Shop</span>
        </a>

        <a href="/logout" class="flex items-center gap-3 px-4 py-3 mt-2 text-red-400 hover:bg-gray-800 rounded-lg">
            <i class="fa-solid fa-right-from-bracket w-5 text-center" aria-hidden="true"></i>
            <span>Logout</span>
        </a>
    </div>
</aside>

