<h1 class="text-2xl font-bold mb-4">List of Users</h1>
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
        <?php foreach ($users as $user){ ?>
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <?= $user['name'] ?>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <?= $user['email'] ?>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    Developer
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>