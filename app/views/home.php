<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <header class="flex justify-center h-[80px] bg-gray-200">
        <div class="min-w-6xl flex items-center justify-between">
            <div class="text-2xl font-bold">
                logo
            </div>
            
            <nav>
                <ul class="flex gap-5">
                    <li>Home</li>
                    <li>Product</li>
                    <li>Category</li>
                    <li>Service</li>
                </ul>
            </nav>
            
            <div>
                <a href="/profile">
                    <div class="w-[50px] h-[50px] rounded-full overflow-hidden flex justify-center">
                        <img class="w-full" src="<?= ($user) ? '/uploads/profile/' . $user['profile'] : '../../public/profile.png' ?>" alt="?">
                    </div>
                </a>

                <!-- <?= htmlspecialchars(($user) ? $user['first_name'] . ' ' . $user['last_name'] : 'Guest') ?> -->
                <!-- <a href="/profile">Profile</a> -->
            </div>
        </div>
    </header>
</body>
</html>