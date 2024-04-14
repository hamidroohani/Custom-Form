<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<!-- Navbar -->
<nav class="bg-gray-800 py-4">
    <div class="container mx-auto flex justify-between items-center px-4">
        <div class="text-white font-bold text-xl">Custom Form</div>
        <ul class="flex space-x-4">
            <li><a href="/" class="text-white hover:text-gray-300">Home</a></li>
            <li><a href="#" class="text-white hover:text-gray-300">Orders</a></li>
            <li><a href="/users" class="text-white hover:text-gray-300">Users</a></li>
            <li><a href="#" class="text-white hover:text-gray-300">Add User</a></li>
            <li><a href="#" class="text-white hover:text-gray-300">Add Order</a></li>
        </ul>
    </div>
</nav>

<!-- Content -->
<div class="container mx-auto mt-8">
    {{content}}
</div>
</body>
</html>
