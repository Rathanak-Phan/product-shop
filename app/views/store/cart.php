<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
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
            <a href="/products" class="text-sm font-medium text-blue-600">
                <i class="fa-solid fa-arrow-left mr-2"></i>Continue shopping
            </a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="mx-auto max-w-6xl px-4 py-10">
        <h1 class="text-3xl font-bold">Shopping cart</h1>
        <p class="mt-2 text-slate-500">2 items in your cart</p>

        <div class="mt-8 grid gap-7 lg:grid-cols-[1fr_360px]">
            <!-- Cart Items -->
            <section class="rounded-xl border bg-white">
                <div class="flex gap-4 border-b p-5">
                    <img class="h-24 w-24 rounded-lg object-cover" src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&w=300&q=80" alt="Laptop">
                    <div class="flex-1">
                        <div class="flex justify-between gap-3">
                            <div>
                                <h2 class="font-semibold">MacBook Air M3</h2>
                                <p class="mt-1 text-sm text-slate-500">Midnight</p>
                            </div>
                            <p class="font-semibold">$1,099.00</p>
                        </div>
                        <div class="mt-5 flex justify-between">
                            <div class="rounded-lg border px-3 py-1.5 text-sm">
                                <button>−</button>
                                <span class="mx-3">1</span>
                                <button>+</button>
                            </div>
                            <button class="text-sm text-red-600">
                                <i class="fa-solid fa-trash mr-1"></i>Remove
                            </button>
                        </div>
                    </div>
                </div>

                <div class="flex gap-4 p-5">
                    <img class="h-24 w-24 rounded-lg object-cover" src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=300&q=80" alt="Headphones">
                    <div class="flex-1">
                        <div class="flex justify-between gap-3">
                            <div>
                                <h2 class="font-semibold">Wireless Headphones</h2>
                                <p class="mt-1 text-sm text-slate-500">Black</p>
                            </div>
                            <p class="font-semibold">$129.00</p>
                        </div>
                        <div class="mt-5 flex justify-between">
                            <div class="rounded-lg border px-3 py-1.5 text-sm">
                                <button>−</button>
                                <span class="mx-3">1</span>
                                <button>+</button>
                            </div>
                            <button class="text-sm text-red-600">
                                <i class="fa-solid fa-trash mr-1"></i>Remove
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Order Summary -->
            <aside class="h-fit rounded-xl border bg-white p-6">
                <h2 class="text-lg font-semibold">Order summary</h2>
                <div class="mt-5 space-y-3 border-b pb-5 text-sm">
                    <div class="flex justify-between">
                        <span class="text-slate-500">Subtotal</span>
                        <span>$1,228.00</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-slate-500">Shipping</span>
                        <span class="text-green-600">Free</span>
                    </div>
                </div>

                <div class="mt-5 flex justify-between text-lg font-bold">
                    <span>Total</span>
                    <span>$1,228.00</span>
                </div>

                <button type="button" class="mt-6 w-full rounded-lg bg-blue-600 py-3 font-semibold text-white hover:bg-blue-700">
                    Proceed to checkout
                </button>

                <p class="mt-4 text-center text-xs text-slate-500">
                    <i class="fa-solid fa-lock mr-1"></i>Secure checkout
                </p>
            </aside>
        </div>
    </main>
</body>
</html>
