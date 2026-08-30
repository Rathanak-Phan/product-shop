<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'Admin Panel' ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .modal:target {
            display: flex;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <?php require "./app/views/admin/partials/sidebar.php"; ?>

        <!-- Main -->
        <div class="flex-1">
            <!-- Navbar -->
            <?php require "./app/views/admin/partials/navbar.php"; ?>

            <!-- Page -->
            <main class="p-8">
                <?php require $content; ?>
            </main>
        </div>
    </div>
</body>
</html>
