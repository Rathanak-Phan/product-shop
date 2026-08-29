<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        <?= $pageTitle ?? 'Admin Panel' ?>
    </title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100">

    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <?php require "./app/views/admin/sidebar.php"; ?>

        <!-- Main -->
        <div class="flex-1">

            <!-- Navbar -->
            <?php require "./app/views/admin/navbar.php"; ?>

            <!-- Page -->
            <main class="p-8">

                <?php require $content; ?>

            </main>

        </div>

    </div>

</body>

</html>