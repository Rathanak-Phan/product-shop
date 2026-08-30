<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MacBook Air M3</title>
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
                <a href="/products">Shop</a>
                <a href="/cart">Cart (2)</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="mx-auto max-w-6xl px-4 py-10">
        <!-- Breadcrumbs -->
        <p class="text-sm text-slate-500">
            <a href="/products" class="hover:underline">Products</a> / Computers / MacBook Air M3
        </p>

        <div class="mt-7 grid gap-10 lg:grid-cols-2">
            <!-- Product Images -->
            <div>
                <img class="h-[420px] w-full rounded-2xl object-cover" src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&w=1000&q=80" alt="MacBook Air M3">
                <div class="mt-4 grid grid-cols-3 gap-3">
                    <button class="overflow-hidden rounded-lg ring-2 ring-blue-600">
                        <img class="h-20 w-full object-cover" src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&w=300&q=80" alt="Laptop front">
                    </button>
                    <button class="rounded-lg bg-slate-200">
                        <i class="fa-solid fa-image text-slate-500"></i>
                    </button>
                    <button class="rounded-lg bg-slate-200">
                        <i class="fa-solid fa-image text-slate-500"></i>
                    </button>
                </div>
            </div>

            <!-- Product Details -->
            <div>
                <p class="text-sm font-medium text-blue-600">Computers</p>
                <h1 class="mt-2 text-4xl font-bold">MacBook Air M3</h1>

                <div class="mt-3 flex items-center gap-2 text-amber-400">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                    <span class="text-sm text-slate-500">4.8 (42 reviews)</span>
                </div>

                <p class="mt-6 text-3xl font-bold">$1,099.00</p>
                <p class="mt-6 leading-7 text-slate-600">A lightweight powerhouse with the M3 chip, all-day battery life, and a brilliant 13-inch display.</p>

                <div class="mt-6 border-y py-5">
                    <p class="font-medium">Color</p>
                    <div class="mt-3 flex gap-3">
                        <button class="h-8 w-8 rounded-full bg-slate-800 ring-2 ring-offset-2" aria-label="Midnight"></button>
                        <button class="h-8 w-8 rounded-full bg-slate-300" aria-label="Silver"></button>
                        <button class="h-8 w-8 rounded-full bg-slate-700" aria-label="Space Gray"></button>
                    </div>
                </div>

                <div class="mt-6 flex gap-3">
                    <div class="flex items-center rounded-lg border">
                        <button class="px-4 py-3">−</button>
                        <span class="px-3">1</span>
                        <button class="px-4 py-3">+</button>
                    </div>
                    <a href="/cart" class="flex-1 rounded-lg bg-blue-600 py-3 text-center font-semibold text-white hover:bg-blue-700">
                        <i class="fa-solid fa-cart-shopping mr-2"></i>Add to cart
                    </a>
                </div>

                <div class="mt-6 grid grid-cols-2 gap-4 text-sm">
                    <p><i class="fa-solid fa-truck-fast mr-2 text-blue-600"></i>Free delivery</p>
                    <p><i class="fa-solid fa-arrow-rotate-left mr-2 text-blue-600"></i>30-day returns</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
