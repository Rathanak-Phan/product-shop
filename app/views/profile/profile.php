<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100 min-h-screen">

    <div class="max-w-6xl mx-auto px-6 py-10">

        <!-- Page title -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800">
                My Profile
            </h1>

            <p class="text-gray-500 mt-1">
                Manage your personal information
            </p>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- =========================
                 LEFT PROFILE CARD
            ========================== -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">

                <!-- Profile Image -->
                <div class="flex justify-center mb-5">

                    <?php if (!empty($user['profile'])): ?>

                        <img
                            src="<?= htmlspecialchars($user['profile']) ?>"
                            alt="Profile"
                            class="w-32 h-32 rounded-full object-cover border-4 border-gray-100"
                        >

                    <?php else: ?>

                        <div
                            class="w-32 h-32 rounded-full bg-gray-200 flex items-center justify-center"
                        >
                            <span class="text-4xl text-gray-500">
                                <?= strtoupper(substr($user['first_name'] ?? 'U', 0, 1)) ?>
                            </span>
                        </div>

                    <?php endif; ?>

                </div>


                <!-- Full Name -->
                <div class="text-center">

                    <h2 class="text-xl font-bold text-gray-800">
                        <?= htmlspecialchars($user['first_name'] ?? '') ?>
                        <?= htmlspecialchars($user['last_name'] ?? '') ?>
                    </h2>

                    <p class="text-sm text-gray-500 mt-1">
                        <?= htmlspecialchars($user['email']) ?>
                    </p>

                </div>


                <!-- Bio -->
                <div class="mt-6 pt-6 border-t border-gray-100">

                    <h3 class="text-sm font-semibold text-gray-700 mb-2">
                        About me
                    </h3>

                    <p class="text-sm text-gray-500 leading-6">
                        <?= !empty($user['bio'])
                            ? htmlspecialchars($user['bio'])
                            : 'No bio added yet.'
                        ?>
                    </p>

                </div>


                <!-- Edit Button -->
                <div class="mt-6">

                    <a
                        href="/profile/edit"
                        class="block w-full text-center bg-black text-white py-2.5 rounded-lg hover:bg-gray-800 transition"
                    >
                        Edit Profile
                    </a>

                </div>

            </div>


            <!-- =========================
                 RIGHT USER INFORMATION
            ========================== -->
            <div class="md:col-span-2 bg-white rounded-xl shadow-sm border border-gray-200 p-6">

                <div class="mb-6">

                    <h2 class="text-xl font-bold text-gray-800">
                        User Information
                    </h2>

                    <p class="text-sm text-gray-500 mt-1">
                        Your personal account information
                    </p>

                </div>


                <!-- Information Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">


                    <!-- First Name -->
                    <div class="border border-gray-200 rounded-lg p-4">

                        <p class="text-xs font-medium text-gray-400 uppercase">
                            First Name
                        </p>

                        <p class="mt-2 text-gray-800 font-medium">
                            <?= !empty($user['first_name'])
                                ? htmlspecialchars($user['first_name'])
                                : 'Not provided'
                            ?>
                        </p>

                    </div>


                    <!-- Last Name -->
                    <div class="border border-gray-200 rounded-lg p-4">

                        <p class="text-xs font-medium text-gray-400 uppercase">
                            Last Name
                        </p>

                        <p class="mt-2 text-gray-800 font-medium">
                            <?= !empty($user['last_name'])
                                ? htmlspecialchars($user['last_name'])
                                : 'Not provided'
                            ?>
                        </p>

                    </div>


                    <!-- Email -->
                    <div class="border border-gray-200 rounded-lg p-4">

                        <p class="text-xs font-medium text-gray-400 uppercase">
                            Email
                        </p>

                        <p class="mt-2 text-gray-800 font-medium break-all">
                            <?= htmlspecialchars($user['email']) ?>
                        </p>

                    </div>


                    <!-- Phone -->
                    <div class="border border-gray-200 rounded-lg p-4">

                        <p class="text-xs font-medium text-gray-400 uppercase">
                            Phone
                        </p>

                        <p class="mt-2 text-gray-800 font-medium">
                            <?= !empty($user['phone'])
                                ? htmlspecialchars($user['phone'])
                                : 'Not provided'
                            ?>
                        </p>

                    </div>


                    <!-- Account Created -->
                    <div class="border border-gray-200 rounded-lg p-4">

                        <p class="text-xs font-medium text-gray-400 uppercase">
                            Account Created
                        </p>

                        <p class="mt-2 text-gray-800 font-medium">
                            <?= !empty($user['created_at'])
                                ? htmlspecialchars($user['created_at'])
                                : 'Unknown'
                            ?>
                        </p>

                    </div>


                    <!-- Last Updated -->
                    <div class="border border-gray-200 rounded-lg p-4">

                        <p class="text-xs font-medium text-gray-400 uppercase">
                            Last Updated
                        </p>

                        <p class="mt-2 text-gray-800 font-medium">
                            <?= !empty($user['updated_at'])
                                ? htmlspecialchars($user['updated_at'])
                                : 'Unknown'
                            ?>
                        </p>

                    </div>

                </div>


                <!-- Bio Section -->
                <div class="mt-5 border border-gray-200 rounded-lg p-4">

                    <p class="text-xs font-medium text-gray-400 uppercase">
                        Biography
                    </p>

                    <p class="mt-2 text-gray-700 leading-6">
                        <?= !empty($user['bio'])
                            ? htmlspecialchars($user['bio'])
                            : 'No biography added yet.'
                        ?>
                    </p>

                </div>

            </div>

        </div>

    </div>

</body>

</html>