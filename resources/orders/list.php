<h1 class="text-2xl font-bold mb-4">List of Orders</h1>
<div class="overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Title
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                User Name
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Count
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Address
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Created At
            </th>
        </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
        <?php foreach ($orders as $order){ ?>
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <?= $order['title'] ?>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <?= $order['name'] . " - " . $order['email'] ?>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <?= $order['count'] ?>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <?= $order['address'] ?>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <?= $order['created_at'] ?>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>