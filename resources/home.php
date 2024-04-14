<h1 class="text-2xl font-bold mb-4">Top Users</h1>
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
                Order Count
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Status
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Last Order Time
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
                    <?= $user['order_count'] ?>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <?= $user['order_count'] >= 5 ? '<span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Active</span>' : '<span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Inactive</span>' ?>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <?= $user['last_order_time'] ?>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>