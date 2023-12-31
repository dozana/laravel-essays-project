<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">

<!-- Navigation -->
<nav class="bg-blue-500 p-4">
    <div class="container mx-auto">
        <a href="#" class="text-white font-bold text-lg">Your Blog</a>
    </div>
</nav>

<!-- Content -->
<div class="container mx-auto mt-4">
    <h1 class="text-3xl font-bold mb-4">Welcome to Your Blog</h1>

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
<footer class="bg-gray-800 text-white p-4 mt-8">
    <div class="container mx-auto">
        <p>&copy; 2023 Your Blog. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
