<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Settings</h1>
    <p class="mt-1 text-gray-500">Manage your account and shop settings.</p>
</div>

<div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
    <!-- Admin Profile -->
    <div class="rounded-lg bg-white shadow-sm">
        <div class="border-b p-5">
            <h2 class="text-lg font-semibold">
                <i class="fa-solid fa-user mr-2" aria-hidden="true"></i>Admin Profile
            </h2>
        </div>

        <div class="p-5">
            <div class="mb-4">
                <label class="mb-2 block text-sm font-medium">Name</label>
                <input type="text" value="Administrator" class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label class="mb-2 block text-sm font-medium">Email</label>
                <input type="email" value="admin@gmail.com" class="w-full rounded-lg border border-gray-300 px-4 py-2">
            </div>

            <div class="mb-4">
                <label class="mb-2 block text-sm font-medium">Phone</label>
                <input type="text" value="012 345 678" class="w-full rounded-lg border border-gray-300 px-4 py-2">
            </div>

            <button class="rounded-lg bg-blue-600 px-5 py-2 text-white hover:bg-blue-700">Save Profile</button>
        </div>
    </div>

    <!-- Shop Settings -->
    <div class="rounded-lg bg-white shadow-sm">
        <div class="border-b p-5">
            <h2 class="text-lg font-semibold">
                <i class="fa-solid fa-store mr-2" aria-hidden="true"></i>Shop Information
            </h2>
        </div>

        <div class="p-5">
            <div class="mb-4">
                <label class="mb-2 block text-sm font-medium">Shop Name</label>
                <input type="text" value="Product Shop" class="w-full rounded-lg border border-gray-300 px-4 py-2">
            </div>

            <div class="mb-4">
                <label class="mb-2 block text-sm font-medium">Shop Email</label>
                <input type="email" value="shop@gmail.com" class="w-full rounded-lg border border-gray-300 px-4 py-2">
            </div>

            <div class="mb-4">
                <label class="mb-2 block text-sm font-medium">Address</label>
                <textarea rows="3" class="w-full rounded-lg border border-gray-300 px-4 py-2">Phnom Penh, Cambodia</textarea>
            </div>

            <button class="rounded-lg bg-blue-600 px-5 py-2 text-white hover:bg-blue-700">Save Shop</button>
        </div>
    </div>

    <!-- Change Password -->
    <div class="rounded-lg bg-white shadow-sm">
        <div class="border-b p-5">
            <h2 class="text-lg font-semibold">
                <i class="fa-solid fa-lock mr-2" aria-hidden="true"></i>Change Password
            </h2>
        </div>

        <div class="p-5">
            <div class="mb-4">
                <label class="mb-2 block text-sm font-medium">Current Password</label>
                <input type="password" class="w-full rounded-lg border border-gray-300 px-4 py-2">
            </div>

            <div class="mb-4">
                <label class="mb-2 block text-sm font-medium">New Password</label>
                <input type="password" class="w-full rounded-lg border border-gray-300 px-4 py-2">
            </div>

            <div class="mb-4">
                <label class="mb-2 block text-sm font-medium">Confirm Password</label>
                <input type="password" class="w-full rounded-lg border border-gray-300 px-4 py-2">
            </div>

            <button class="rounded-lg bg-yellow-500 px-5 py-2 text-white hover:bg-yellow-600">Change Password</button>
        </div>
    </div>

    <!-- Notifications -->
    <div class="rounded-lg bg-white shadow-sm">
        <div class="border-b p-5">
            <h2 class="text-lg font-semibold">
                <i class="fa-solid fa-bell mr-2" aria-hidden="true"></i>Notifications
            </h2>
        </div>

        <div class="p-5">
            <label class="mb-5 flex items-center justify-between">
                <div>
                    <p class="font-medium">New Orders</p>
                    <p class="text-sm text-gray-500">Receive notification for new orders</p>
                </div>
                <input type="checkbox" checked class="h-5 w-5">
            </label>

            <label class="mb-5 flex items-center justify-between">
                <div>
                    <p class="font-medium">New Customers</p>
                    <p class="text-sm text-gray-500">Receive notification for new customers</p>
                </div>
                <input type="checkbox" checked class="h-5 w-5">
            </label>

            <label class="mb-5 flex items-center justify-between">
                <div>
                    <p class="font-medium">Promotions</p>
                    <p class="text-sm text-gray-500">Receive promotional notifications</p>
                </div>
                <input type="checkbox" class="h-5 w-5">
            </label>

            <button class="rounded-lg bg-blue-600 px-5 py-2 text-white hover:bg-blue-700">Save Settings</button>
        </div>
    </div>
</div>

