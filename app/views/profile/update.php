<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Update Profile</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100 min-h-screen">

    <div class="max-w-5xl mx-auto px-6 py-10">

        <!-- Page Header -->
        <div class="mb-8">

            <h1 class="text-3xl font-bold text-gray-800">
                Update Profile
            </h1>

            <p class="text-gray-500 mt-1">
                Update your personal information
            </p>

        </div>


        <!-- Form -->
        <form
            action="/profile/update"
            method="POST"
            enctype="multipart/form-data"
            class="bg-white rounded-xl shadow-sm border border-gray-200"
        >

            <div class="p-6">

                <!-- =========================
                     PROFILE PHOTO
                ========================== -->
                <div class="mb-8">

                    <h2 class="text-lg font-semibold text-gray-800 mb-4">
                        Profile Photo
                    </h2>

                    <div class="flex items-center gap-5">

                        <!-- Current Image -->
                        <div>

                            <?php if (!empty($user['profile'])): ?>

                                <img
                                    src="<?= '/uploads/profile/' . htmlspecialchars($user['profile']) ?>"
                                    alt="Profile"
                                    class="w-24 h-24 rounded-full object-cover border-4 border-gray-100"
                                >

                            <?php else: ?>

                                <div
                                    class="w-24 h-24 rounded-full bg-gray-200 flex items-center justify-center"
                                >
                                    <span class="text-2xl text-gray-500">
                                        <?= strtoupper(substr($user['first_name'] ?? 'U', 0, 1)) ?>
                                    </span>
                                </div>

                            <?php endif; ?>

                        </div>


                        <!-- Upload -->
                        <div>

                            <label
                                for="profile"
                                class="cursor-pointer inline-block px-4 py-2 bg-gray-100 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-200"
                            >
                                Change Photo
                            </label>

                            <input
                                type="file"
                                id="profile"
                                name="profile"
                                accept="image/*"
                                class="hidden"
                            >

                            <p class="text-xs text-gray-400 mt-2">
                                JPG, JPEG, PNG or WEBP
                            </p>

                        </div>

                    </div>

                </div>


                <!-- =========================
                     PERSONAL INFORMATION
                ========================== -->
                <div class="border-t border-gray-100 pt-6">

                    <h2 class="text-lg font-semibold text-gray-800 mb-5">
                        Personal Information
                    </h2>


                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">


                        <!-- First Name -->
                        <div>

                            <label
                                for="first_name"
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                First Name
                            </label>

                            <input
                                type="text"
                                id="first_name"
                                name="first_name"
                                value="<?= htmlspecialchars($user['first_name'] ?? '') ?>"
                                placeholder="Enter your first name"
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg outline-none focus:ring-2 focus:ring-black focus:border-transparent"
                            >

                        </div>


                        <!-- Last Name -->
                        <div>

                            <label
                                for="last_name"
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Last Name
                            </label>

                            <input
                                type="text"
                                id="last_name"
                                name="last_name"
                                value="<?= htmlspecialchars($user['last_name'] ?? '') ?>"
                                placeholder="Enter your last name"
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg outline-none focus:ring-2 focus:ring-black focus:border-transparent"
                            >

                        </div>


                        <!-- Email -->
                        <div>

                            <label
                                for="email"
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Email
                            </label>

                            <input
                                disabled
                                type="email"
                                id="email"
                                name="email"
                                value="<?= htmlspecialchars($user['email'] ?? '') ?>"
                                placeholder="Enter your email"
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg outline-none focus:ring-2 focus:ring-black focus:border-transparent"
                            >

                        </div>


                        <!-- Phone -->
                        <div>

                            <label
                                for="phone"
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Phone
                            </label>

                            <input
                                type="text"
                                id="phone"
                                name="phone"
                                value="<?= htmlspecialchars($user['phone'] ?? '') ?>"
                                placeholder="Enter your phone number"
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg outline-none focus:ring-2 focus:ring-black focus:border-transparent"
                            >

                        </div>

                    </div>

                </div>


                <!-- =========================
                     BIO
                ========================== -->
                <div class="border-t border-gray-100 pt-6 mt-6">

                    <h2 class="text-lg font-semibold text-gray-800 mb-5">
                        About You
                    </h2>

                    <label
                        for="bio"
                        class="block text-sm font-medium text-gray-700 mb-2"
                    >
                        Biography
                    </label>

                    <textarea
                        id="bio"
                        name="bio"
                        rows="5"
                        placeholder="Tell us something about yourself..."
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg outline-none resize-none focus:ring-2 focus:ring-black focus:border-transparent"
                    ><?= htmlspecialchars($user['bio'] ?? '') ?></textarea>

                    <p class="text-xs text-gray-400 mt-2">
                        Tell people a little about yourself.
                    </p>

                </div>

            </div>


            <!-- =========================
                 FORM FOOTER
            ========================== -->
            <div class="border-t border-gray-200 bg-gray-50 px-6 py-4 flex justify-end gap-3 rounded-b-xl">

                <a
                    href="/profile"
                    class="px-5 py-2.5 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-white"
                >
                    Cancel
                </a>

                <button
                    type="submit"
                    class="px-5 py-2.5 bg-black text-white rounded-lg text-sm font-medium hover:bg-gray-800"
                >
                    Save Changes
                </button>

            </div>

        </form>

    </div>

</body>

</html>