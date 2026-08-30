<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Shop</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-slate-50 text-slate-800">
    <div class="bg-slate-900 px-4 py-2 text-center text-xs text-slate-200">
        Free delivery on orders over $50 <span class="mx-2 text-slate-500">|</span> Secure payments
    </div>

    <!-- Header -->
    <header class="sticky top-0 z-40 border-b border-slate-200 bg-white/95 backdrop-blur">
        <div class="mx-auto flex h-20 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
            <a href="/" class="flex items-center gap-2 text-xl font-bold text-slate-900">
                <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-blue-600 text-white">
                    <i class="fa-solid fa-bag-shopping" aria-hidden="true"></i>
                </span>
                Product Shop
            </a>

            <nav class="hidden items-center gap-7 text-sm font-medium text-slate-600 md:flex">
                <a class="text-blue-600" href="/">Home</a>
                <a href="/products" class="hover:text-blue-600">Shop</a>
                <a href="#categories" class="hover:text-blue-600">Categories</a>
                <a href="#about" class="hover:text-blue-600">About</a>
            </nav>

            <div class="flex items-center gap-3">
                <button class="hidden text-slate-600 hover:text-blue-600 sm:block" aria-label="Search">
                    <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>
                </button>
                <a href="/cart" class="relative text-slate-600 hover:text-blue-600" aria-label="Shopping cart">
                    <i class="fa-solid fa-cart-shopping" aria-hidden="true"></i>
                    <span class="absolute -right-2 -top-2 flex h-4 w-4 items-center justify-center rounded-full bg-blue-600 text-[10px] text-white">2</span>
                </a>
                <a href="/profile" class="flex h-9 w-9 items-center justify-center overflow-hidden rounded-full bg-slate-200 text-slate-500" aria-label="My profile">
                    <?php if (!empty($user['profile'])) : ?>
                        <img class="h-full w-full object-cover" src="<?= '/uploads/profile/' . htmlspecialchars($user['profile']) ?>" alt="Profile image">
                    <?php else : ?>
                        <i class="fa-solid fa-user" aria-hidden="true"></i>
                    <?php endif; ?>
                </a>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="overflow-hidden bg-gradient-to-br from-blue-700 via-blue-600 to-indigo-700">
            <div class="mx-auto grid max-w-7xl items-center gap-12 px-4 py-16 sm:px-6 lg:grid-cols-2 lg:px-8 lg:py-24">
                <div class="text-white">
                    <p class="mb-4 inline-flex rounded-full bg-white/15 px-3 py-1 text-sm font-medium">New collection just arrived</p>
                    <h1 class="text-4xl font-bold leading-tight sm:text-5xl">Upgrade your everyday essentials.</h1>
                    <p class="mt-5 max-w-lg text-lg text-blue-100">Discover selected technology and accessories made for work, play, and everything in between.</p>
                    <div class="mt-8 flex flex-wrap gap-3">
                        <a href="#products" class="rounded-lg bg-white px-5 py-3 font-semibold text-blue-700 shadow hover:bg-blue-50">
                            Shop now <i class="fa-solid fa-arrow-right ml-2" aria-hidden="true"></i>
                        </a>
                        <a href="#categories" class="rounded-lg border border-white/50 px-5 py-3 font-semibold hover:bg-white/10">
                            Explore categories
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute inset-0 -rotate-6 rounded-3xl bg-white/10"></div>
                    <img class="relative h-72 w-full rounded-3xl object-cover shadow-2xl lg:h-96" src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?auto=format&fit=crop&w=1000&q=80" alt="Laptop on a desk">
                </div>
            </div>
        </section>

        <!-- Features Bar -->
        <section class="mx-auto grid max-w-7xl grid-cols-1 divide-y divide-slate-200 border-x border-b border-slate-200 bg-white sm:grid-cols-3 sm:divide-x sm:divide-y-0">
            <div class="flex items-center justify-center gap-3 p-5">
                <i class="fa-solid fa-truck-fast text-xl text-blue-600" aria-hidden="true"></i>
                <div>
                    <p class="font-semibold">Free delivery</p>
                    <p class="text-xs text-slate-500">On orders over $50</p>
                </div>
            </div>
            <div class="flex items-center justify-center gap-3 p-5">
                <i class="fa-solid fa-shield-halved text-xl text-blue-600" aria-hidden="true"></i>
                <div>
                    <p class="font-semibold">Secure payment</p>
                    <p class="text-xs text-slate-500">100% protected checkout</p>
                </div>
            </div>
            <div class="flex items-center justify-center gap-3 p-5">
                <i class="fa-solid fa-arrow-rotate-left text-xl text-blue-600" aria-hidden="true"></i>
                <div>
                    <p class="font-semibold">Easy returns</p>
                    <p class="text-xs text-slate-500">30-day return policy</p>
                </div>
            </div>
        </section>

        <!-- Categories Section -->
        <section id="categories" class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
            <div class="mb-8 flex items-end justify-between">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-wider text-blue-600">Browse by category</p>
                    <h2 class="mt-2 text-3xl font-bold text-slate-900">Find what you need</h2>
                </div>
                <a href="#products" class="hidden text-sm font-semibold text-blue-600 hover:text-blue-800 sm:block">
                    View all categories <i class="fa-solid fa-arrow-right ml-1" aria-hidden="true"></i>
                </a>
            </div>

            <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
                <a href="#products" class="group rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200 hover:-translate-y-1 hover:shadow-md">
                    <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-xl text-blue-600">
                        <i class="fa-solid fa-laptop" aria-hidden="true"></i>
                    </span>
                    <h3 class="mt-4 font-semibold">Computers</h3>
                    <p class="mt-1 text-sm text-slate-500">24 products</p>
                </a>
                <a href="#products" class="group rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200 hover:-translate-y-1 hover:shadow-md">
                    <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-violet-50 text-xl text-violet-600">
                        <i class="fa-solid fa-headphones" aria-hidden="true"></i>
                    </span>
                    <h3 class="mt-4 font-semibold">Audio</h3>
                    <p class="mt-1 text-sm text-slate-500">18 products</p>
                </a>
                <a href="#products" class="group rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200 hover:-translate-y-1 hover:shadow-md">
                    <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-orange-50 text-xl text-orange-600">
                        <i class="fa-solid fa-keyboard" aria-hidden="true"></i>
                    </span>
                    <h3 class="mt-4 font-semibold">Accessories</h3>
                    <p class="mt-1 text-sm text-slate-500">42 products</p>
                </a>
                <a href="#products" class="group rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200 hover:-translate-y-1 hover:shadow-md">
                    <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-50 text-xl text-emerald-600">
                        <i class="fa-solid fa-mobile-screen-button" aria-hidden="true"></i>
                    </span>
                    <h3 class="mt-4 font-semibold">Mobile</h3>
                    <p class="mt-1 text-sm text-slate-500">36 products</p>
                </a>
            </div>
        </section>

        <!-- Featured Products -->
        <section id="products" class="bg-white py-20">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-wider text-blue-600">Popular right now</p>
                        <h2 class="mt-2 text-3xl font-bold text-slate-900">Featured products</h2>
                    </div>
                    <div class="flex gap-2">
                        <button class="rounded-lg bg-slate-900 px-4 py-2 text-sm font-medium text-white">All</button>
                        <button class="rounded-lg px-4 py-2 text-sm font-medium text-slate-600 hover:bg-slate-100">New</button>
                        <button class="rounded-lg px-4 py-2 text-sm font-medium text-slate-600 hover:bg-slate-100">Best sellers</button>
                    </div>
                </div>

                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    <article class="group overflow-hidden rounded-2xl border border-slate-200 bg-white">
                        <div class="relative overflow-hidden bg-slate-100">
                            <img class="h-52 w-full object-cover transition duration-300 group-hover:scale-105" src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&w=700&q=80" alt="Laptop">
                            <span class="absolute left-3 top-3 rounded-full bg-blue-600 px-2.5 py-1 text-xs font-semibold text-white">New</span>
                            <button class="absolute bottom-3 right-3 flex h-10 w-10 items-center justify-center rounded-full bg-white text-slate-700 shadow hover:text-blue-600" aria-label="Add MacBook to cart">
                                <i class="fa-solid fa-cart-plus" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="p-4">
                            <p class="text-xs text-slate-500">Computers</p>
                            <h3 class="mt-1 font-semibold">MacBook Air M3</h3>
                            <div class="mt-2 flex items-center gap-1 text-xs text-amber-400">
                                <i class="fa-solid fa-star" aria-hidden="true"></i>
                                <i class="fa-solid fa-star" aria-hidden="true"></i>
                                <i class="fa-solid fa-star" aria-hidden="true"></i>
                                <i class="fa-solid fa-star" aria-hidden="true"></i>
                                <i class="fa-solid fa-star-half-stroke" aria-hidden="true"></i>
                                <span class="ml-1 text-slate-500">(42)</span>
                            </div>
                            <p class="mt-3 text-lg font-bold">$1,099.00</p>
                        </div>
                    </article>

                    <article class="group overflow-hidden rounded-2xl border border-slate-200 bg-white">
                        <div class="relative overflow-hidden bg-slate-100">
                            <img class="h-52 w-full object-cover transition duration-300 group-hover:scale-105" src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=700&q=80" alt="Headphones">
                            <button class="absolute bottom-3 right-3 flex h-10 w-10 items-center justify-center rounded-full bg-white text-slate-700 shadow hover:text-blue-600" aria-label="Add headphones to cart">
                                <i class="fa-solid fa-cart-plus" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="p-4">
                            <p class="text-xs text-slate-500">Audio</p>
                            <h3 class="mt-1 font-semibold">Wireless Headphones</h3>
                            <div class="mt-2 flex items-center gap-1 text-xs text-amber-400">
                                <i class="fa-solid fa-star" aria-hidden="true"></i>
                                <i class="fa-solid fa-star" aria-hidden="true"></i>
                                <i class="fa-solid fa-star" aria-hidden="true"></i>
                                <i class="fa-solid fa-star" aria-hidden="true"></i>
                                <i class="fa-solid fa-star-half-stroke" aria-hidden="true"></i>
                                <span class="ml-1 text-slate-500">(31)</span>
                            </div>
                            <p class="mt-3 text-lg font-bold">$129.00</p>
                        </div>
                    </article>

                    <article class="group overflow-hidden rounded-2xl border border-slate-200 bg-white">
                        <div class="relative overflow-hidden bg-slate-100">
                            <img class="h-52 w-full object-cover transition duration-300 group-hover:scale-105" src="https://images.unsplash.com/photo-1587829741301-dc798b83add3?auto=format&fit=crop&w=700&q=80" alt="Keyboard">
                            <span class="absolute left-3 top-3 rounded-full bg-orange-500 px-2.5 py-1 text-xs font-semibold text-white">-15%</span>
                            <button class="absolute bottom-3 right-3 flex h-10 w-10 items-center justify-center rounded-full bg-white text-slate-700 shadow hover:text-blue-600" aria-label="Add keyboard to cart">
                                <i class="fa-solid fa-cart-plus" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="p-4">
                            <p class="text-xs text-slate-500">Accessories</p>
                            <h3 class="mt-1 font-semibold">Mechanical Keyboard</h3>
                            <div class="mt-2 flex items-center gap-1 text-xs text-amber-400">
                                <i class="fa-solid fa-star" aria-hidden="true"></i>
                                <i class="fa-solid fa-star" aria-hidden="true"></i>
                                <i class="fa-solid fa-star" aria-hidden="true"></i>
                                <i class="fa-solid fa-star" aria-hidden="true"></i>
                                <i class="fa-solid fa-star" aria-hidden="true"></i>
                                <span class="ml-1 text-slate-500">(56)</span>
                            </div>
                            <p class="mt-3 text-lg font-bold">$89.00 <span class="ml-1 text-sm font-normal text-slate-400 line-through">$105.00</span></p>
                        </div>
                    </article>

                    <article class="group overflow-hidden rounded-2xl border border-slate-200 bg-white">
                        <div class="relative overflow-hidden bg-slate-100">
                            <img class="h-52 w-full object-cover transition duration-300 group-hover:scale-105" src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?auto=format&fit=crop&w=700&q=80" alt="Smartphone">
                            <button class="absolute bottom-3 right-3 flex h-10 w-10 items-center justify-center rounded-full bg-white text-slate-700 shadow hover:text-blue-600" aria-label="Add smartphone to cart">
                                <i class="fa-solid fa-cart-plus" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="p-4">
                            <p class="text-xs text-slate-500">Mobile</p>
                            <h3 class="mt-1 font-semibold">Galaxy S24</h3>
                            <div class="mt-2 flex items-center gap-1 text-xs text-amber-400">
                                <i class="fa-solid fa-star" aria-hidden="true"></i>
                                <i class="fa-solid fa-star" aria-hidden="true"></i>
                                <i class="fa-solid fa-star" aria-hidden="true"></i>
                                <i class="fa-solid fa-star" aria-hidden="true"></i>
                                <i class="fa-regular fa-star" aria-hidden="true"></i>
                                <span class="ml-1 text-slate-500">(19)</span>
                            </div>
                            <p class="mt-3 text-lg font-bold">$799.00</p>
                        </div>
                    </article>
                </div>

                <div class="mt-10 text-center">
                    <button class="rounded-lg border border-slate-300 px-5 py-3 font-semibold text-slate-700 hover:border-blue-600 hover:text-blue-600">
                        View all products <i class="fa-solid fa-arrow-right ml-2" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
            <div class="grid overflow-hidden rounded-3xl bg-slate-900 lg:grid-cols-2">
                <img class="h-64 w-full object-cover lg:h-full" src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&fit=crop&w=1000&q=80" alt="Customer shopping">
                <div class="p-8 text-white sm:p-12">
                    <p class="text-sm font-semibold uppercase tracking-wider text-blue-300">Shop with confidence</p>
                    <h2 class="mt-3 text-3xl font-bold">Everything you need, in one place.</h2>
                    <p class="mt-4 text-slate-300">We select practical, reliable products and make shopping simple with clear prices, secure checkout, and helpful support.</p>
                    <a href="#products" class="mt-7 inline-block rounded-lg bg-blue-600 px-5 py-3 font-semibold hover:bg-blue-500">Discover our products</a>
                </div>
            </div>
        </section>

        <!-- Newsletter Section -->
        <section class="bg-blue-600">
            <div class="mx-auto flex max-w-7xl flex-col gap-5 px-4 py-12 text-white sm:px-6 lg:flex-row lg:items-center lg:justify-between lg:px-8">
                <div>
                    <h2 class="text-2xl font-bold">Get product updates and special offers</h2>
                    <p class="mt-1 text-blue-100">Join our newsletter—no spam, only useful news.</p>
                </div>
                <form class="flex w-full max-w-md gap-2">
                    <input type="email" placeholder="Your email address" class="min-w-0 flex-1 rounded-lg px-4 py-3 text-slate-900 outline-none">
                    <button type="button" class="rounded-lg bg-slate-900 px-5 py-3 font-semibold hover:bg-slate-800">Subscribe</button>
                </form>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-slate-950 text-slate-300">
        <div class="mx-auto grid max-w-7xl gap-8 px-4 py-12 sm:px-6 md:grid-cols-2 lg:grid-cols-4 lg:px-8">
            <div>
                <a href="/" class="flex items-center gap-2 text-lg font-bold text-white">
                    <i class="fa-solid fa-bag-shopping text-blue-400" aria-hidden="true"></i>Product Shop
                </a>
                <p class="mt-4 text-sm leading-6 text-slate-400">Useful tech and accessories for a better everyday experience.</p>
            </div>
            <div>
                <h3 class="font-semibold text-white">Shop</h3>
                <ul class="mt-4 space-y-2 text-sm">
                    <li><a href="#products" class="hover:text-white">All products</a></li>
                    <li><a href="#categories" class="hover:text-white">Categories</a></li>
                    <li><a href="#products" class="hover:text-white">New arrivals</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold text-white">Help</h3>
                <ul class="mt-4 space-y-2 text-sm">
                    <li><a href="#" class="hover:text-white">Shipping & returns</a></li>
                    <li><a href="#" class="hover:text-white">Contact us</a></li>
                    <li><a href="#" class="hover:text-white">FAQs</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold text-white">Follow us</h3>
                <div class="mt-4 flex gap-3">
                    <a href="#" class="flex h-9 w-9 items-center justify-center rounded-full bg-slate-800 hover:bg-blue-600" aria-label="Facebook">
                        <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="flex h-9 w-9 items-center justify-center rounded-full bg-slate-800 hover:bg-blue-600" aria-label="Instagram">
                        <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="flex h-9 w-9 items-center justify-center rounded-full bg-slate-800 hover:bg-blue-600" aria-label="Telegram">
                        <i class="fa-brands fa-telegram" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="border-t border-slate-800 py-5 text-center text-sm text-slate-500">© 2026 Product Shop. All rights reserved.</div>
    </footer>
</body>

</html>

