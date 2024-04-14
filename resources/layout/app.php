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
            <li><a href="#" class="text-white hover:text-gray-300">Home</a></li>
            <li><a href="#" class="text-white hover:text-gray-300">Orders</a></li>
            <li><a href="#" class="text-white hover:text-gray-300">Add User</a></li>
            <li><a href="#" class="text-white hover:text-gray-300">Add Order</a></li>
        </ul>
    </div>
</nav>

<!-- Content -->
<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-4">Table Grid Example</h1>
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Name
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Email
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Role
                </th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    John Doe
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    john@example.com
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    Developer
                </td>
            </tr>
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    Jane Smith
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    jane@example.com
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    Designer
                </td>
            </tr>
            <!-- More rows can be added here -->
            </tbody>
        </table>
        {{content}}
    </div>
</div>
</body>
</html>
