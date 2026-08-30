<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Products</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-slate-50 text-slate-800">
    <!-- Header -->
    <header class="border-b bg-white">
        <div class="mx-auto flex h-20 max-w-7xl items-center justify-between px-4">
            <a href="/" class="flex items-center gap-2 text-xl font-bold">
                <span class="rounded-lg bg-blue-600 p-2 text-white">
                    <i class="fa-solid fa-bag-shopping"></i>
                </span>
                Product Shop
            </a>
            <nav class="flex gap-6 text-sm font-medium">
                <a href="/">Home</a>
                <a class="text-blue-600" href="/products">Shop</a>
                <a href="/cart">Cart (2)</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="mx-auto max-w-7xl px-4 py-10">
        <!-- Breadcrumbs -->
        <p class="text-sm text-slate-500">
            <a href="/" class="hover:underline">Home</a> / Products
        </p>

        <div class="mt-5 flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
            <div>
                <h1 class="text-3xl font-bold">All products</h1>
                <p class="mt-2 text-slate-500">Find your next everyday essential.</p>
            </div>
            <select class="rounded-lg border bg-white px-4 py-2.5 text-sm">
                <option>Sort: Featured</option>
                <option>Price: Low to High</option>
                <option>Newest</option>
            </select>
        </div>

        <div class="mt-8 grid gap-6 lg:grid-cols-[230px_1fr]">
            <!-- Sidebar Filter -->
            <aside class="rounded-xl border bg-white p-5">
                <h2 class="font-semibold">Filter products</h2>
                <div class="mt-5 border-t pt-4">
                    <p class="font-medium">Category</p>
                    <label class="mt-3 block text-sm">
                        <input type="checkbox" class="mr-2">Computers
                    </label>
                    <label class="mt-3 block text-sm">
                        <input type="checkbox" class="mr-2">Audio
                    </label>
                    <label class="mt-3 block text-sm">
                        <input type="checkbox" class="mr-2">Accessories
                    </label>
                </div>
                <div class="mt-5 border-t pt-4">
                    <p class="font-medium">Price range</p>
                    <div class="mt-3 flex gap-2">
                        <input placeholder="Min" class="w-full rounded border px-2 py-2 text-sm">
                        <input placeholder="Max" class="w-full rounded border px-2 py-2 text-sm">
                    </div>
                </div>
            </aside>

            <!-- Product Grid -->
            <section>
                <p class="mb-4 text-sm text-slate-500">Showing 12 of 120 products</p>
                <div class="grid gap-5 sm:grid-cols-2 xl:grid-cols-3">
                    <?php
                    $products = [
                        ['MacBook Air M3', '$1,099.00', 'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&w=700&q=80'],
                        ['Wireless Headphones', '$129.00', 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=700&q=80'],
                        ['Mechanical Keyboard', '$89.00', 'https://images.unsplash.com/photo-1587829741301-dc798b83add3?auto=format&fit=crop&w=700&q=80'],
                        ['Galaxy S24', '$799.00', 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?auto=format&fit=crop&w=700&q=80'],
                        ['USB-C Hub', '$49.00', 'https://images.unsplash.com/photo-1625842268584-8f3296236761?auto=format&fit=crop&w=700&q=80'],
                        ['Smart Watch', '$199.00', 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=700&q=80']
                    ];
                    foreach ($products as $product) :
                    ?>
                        <article class="overflow-hidden rounded-xl border bg-white">
                            <a href="/products/macbook-air-m3">
                                <img src="<?= $product[2] ?>" alt="<?= htmlspecialchars($product[0]) ?>" class="h-48 w-full object-cover">
                            </a>
                            <div class="p-4">
                                <p class="text-xs text-slate-500">Technology</p>
                                <a href="/products/macbook-air-m3" class="mt-1 block font-semibold hover:text-blue-600">
                                    <?= htmlspecialchars($product[0]) ?>
                                </a>
                                <p class="mt-3 text-lg font-bold"><?= htmlspecialchars($product[1]) ?></p>
                                <a href="/cart" class="mt-4 block rounded-lg bg-slate-900 py-2 text-center text-sm font-medium text-white hover:bg-blue-600">
                                    <i class="fa-solid fa-cart-plus mr-2"></i>Add to cart
                                </a>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </section>
        </div>
    </main>
</body>
</html>
