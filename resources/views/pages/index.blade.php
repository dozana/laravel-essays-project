<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Blog Title</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans flex flex-col min-h-screen">

<!-- Navigation -->
<nav class="bg-blue-500 p-4 fixed w-full z-10">
    <div class="container mx-auto">
        <a href="#" class="text-white font-bold text-lg">Your Blog</a>
    </div>
</nav>

<!-- Content -->
<div class="flex-1 container mx-auto mt-16 overflow-y-auto">

    <!-- Blog Posts -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <!-- Sample Blog Post Card -->
        <div class="bg-white p-4 rounded shadow">
            <h2 class="text-xl font-bold mb-2">Blog Post Title</h2>
            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit....</p>
            <a href="#" class="text-blue-500 mt-2 inline-block">Read more</a>
        </div>

        <!-- Repeat similar blocks for other blog posts -->

    </div>
</div>

<!-- Footer -->
<footer class="bg-gray-800 text-white p-4 fixed w-full bottom-0">
    <div class="container mx-auto">
        <p>&copy; 2023 Your Blog. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
