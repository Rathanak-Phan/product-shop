<?php
$isEditingCustomer = $isEditingCustomer ?? false;
$customerFormAction = $isEditingCustomer ? '/dashboard/customers/update/1' : '/dashboard/customers/store';
?>

<form method="POST" action="<?= htmlspecialchars($customerFormAction) ?>" class="p-6">
    <div class="space-y-4">
        <div>
            <label for="customer_name" class="block text-sm font-medium text-gray-700">Full Name</label>
            <input id="customer_name" name="name" type="text" value="<?= $isEditingCustomer ? 'Dara Sok' : '' ?>" placeholder="Enter customer name" class="mt-2 w-full rounded-lg border border-gray-300 px-3 py-2.5 outline-none focus:border-blue-500">
        </div>

        <div>
            <label for="customer_email" class="block text-sm font-medium text-gray-700">Email Address</label>
            <input id="customer_email" name="email" type="email" value="<?= $isEditingCustomer ? 'dara@gmail.com' : '' ?>" placeholder="e.g. customer@gmail.com" class="mt-2 w-full rounded-lg border border-gray-300 px-3 py-2.5 outline-none focus:border-blue-500">
        </div>

        <div>
            <label for="customer_phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
            <input id="customer_phone" name="phone" type="tel" value="<?= $isEditingCustomer ? '012 345 678' : '' ?>" placeholder="e.g. 012 345 678" class="mt-2 w-full rounded-lg border border-gray-300 px-3 py-2.5 outline-none focus:border-blue-500">
        </div>

        <div>
            <label for="customer_status" class="block text-sm font-medium text-gray-700">Account Status</label>
            <select id="customer_status" name="status" class="mt-2 w-full rounded-lg border border-gray-300 px-3 py-2.5 outline-none focus:border-blue-500">
                <option value="active" <?= $isEditingCustomer ? 'selected' : '' ?>>Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>
    </div>

    <div class="mt-7 flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
        <a href="#" class="rounded-lg border border-gray-300 px-4 py-2.5 text-center text-sm font-medium text-gray-700">Cancel</a>
        <button type="submit" class="rounded-lg bg-blue-600 px-4 py-2.5 text-sm font-medium text-white hover:bg-blue-700">
            <?= $isEditingCustomer ? 'Update Customer' : 'Save Customer' ?>
        </button>
    </div>
</form>
