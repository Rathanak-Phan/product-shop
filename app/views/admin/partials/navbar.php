<header class="h-16 bg-white border-b flex items-center justify-between px-8">
    <!-- Page title -->
    <div>
        <h2 class="text-xl font-semibold text-gray-800">
            <?= $pageTitle ?? 'Admin Dashboard' ?>
        </h2>
    </div>

    <!-- Admin -->
    <div class="flex items-center gap-4">
        <!-- Notification -->
        <button class="text-gray-500 hover:text-gray-800">
            <i class="fa-solid fa-bell" aria-hidden="true"></i>
        </button>

        <!-- Profile -->
        <div class="flex items-center gap-3">
            <div class="w-9 h-9 rounded-full bg-blue-600 text-white flex items-center justify-center font-semibold">
                A
            </div>

            <div>
                <p class="text-sm font-medium text-gray-800">Administrator</p>
                <p class="text-xs text-gray-500">Admin</p>
            </div>
        </div>
    </div>
</header>

