<h1 class="text-2xl font-bold mb-4">Create a User</h1>
<form class="max-w-md mx-auto" action="/users/store" method="POST">
    <div class="mb-4">
        <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
        <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter your name" required>
        <?php show_errors( "name"); ?>
    </div>
    <div class="mb-4">
        <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
        <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter your email" required>
        <?php show_errors( "email"); ?>
    </div>
    <div class="mb-4">
        <label for="password" class="block text-gray-700 font-bold mb-2">Password:</label>
        <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter your password" required>
        <?php show_errors( "password"); ?>
    </div>
    <div class="flex items-center justify-between">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Add User</button>
    </div>
</form>