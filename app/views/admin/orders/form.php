<?php
$isEditingOrder = $isEditingOrder ?? false;
$orderFormAction = $isEditingOrder ? '/dashboard/orders/update/1' : '/dashboard/orders/store';
?>

<form method="POST" action="<?= htmlspecialchars($orderFormAction) ?>" class="p-6">
    <div class="space-y-4">
        <div>
            <label for="customer_id" class="block text-sm font-medium text-gray-700">Customer</label>
            <select id="customer_id" name="customer_id" class="mt-2 w-full rounded-lg border border-gray-300 px-3 py-2.5 outline-none focus:border-blue-500">
                <option><?= $isEditingOrder ? 'Dara Sok (dara@gmail.com)' : 'Select Customer' ?></option>
                <option>Srey Chan</option>
            </select>
        </div>

        <div>
            <label for="order_product_id" class="block text-sm font-medium text-gray-700">Product</label>
            <select id="order_product_id" name="product_id" class="mt-2 w-full rounded-lg border border-gray-300 px-3 py-2.5 outline-none focus:border-blue-500">
                <option><?= $isEditingOrder ? 'MacBook Air M3 ($1,099.00)' : 'Select Product' ?></option>
                <option>Wireless Headphones ($129.00)</option>
            </select>
        </div>

        <div>
            <label for="order_status" class="block text-sm font-medium text-gray-700">Order Status</label>
            <select id="order_status" name="status" class="mt-2 w-full rounded-lg border border-gray-300 px-3 py-2.5 outline-none focus:border-blue-500">
                <option value="pending" <?= $isEditingOrder ? '' : 'selected' ?>>Pending</option>
                <option value="processing">Processing</option>
                <option value="completed" <?= $isEditingOrder ? 'selected' : '' ?>>Completed</option>
                <option value="cancelled">Cancelled</option>
            </select>
        </div>
    </div>

    <div class="mt-7 flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
        <a href="#" class="rounded-lg border border-gray-300 px-4 py-2.5 text-center text-sm font-medium text-gray-700">Cancel</a>
        <button type="submit" class="rounded-lg bg-blue-600 px-4 py-2.5 text-sm font-medium text-white hover:bg-blue-700">
            <?= $isEditingOrder ? 'Update Order' : 'Save Order' ?>
        </button>
    </div>
</form>
