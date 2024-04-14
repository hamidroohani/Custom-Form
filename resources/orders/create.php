<h1 class="text-2xl font-bold mb-4">Create an Order</h1>
<form class="max-w-md mx-auto" action="/orders/store" method="POST">
    <div class="mb-4 relative">
        <label for="name" class="block text-gray-700 font-bold mb-2">User:</label>
        <input type="text" id="user_name" name="user_name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter your user" required>
        <input type="hidden" name="user_id" id="user_id">
        <div id="user_results" class="absolute top-full w-full"></div>
        <?php show_errors( "name"); ?>
    </div>
    <div class="mb-4">
        <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
        <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter your name" required>
        <?php show_errors( "name"); ?>
    </div>
    <div class="mb-4">
        <label for="count" class="block text-gray-700 font-bold mb-2">Count:</label>
        <input type="text" id="count" name="count" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter your count" required>
        <?php show_errors( "count"); ?>
    </div>
    <div class="mb-4">
        <label for="address" class="block text-gray-700 font-bold mb-2">Address:</label>
        <input type="text" id="address" name="address" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter your address" required>
        <?php show_errors( "address"); ?>
    </div>
    <div class="flex items-center justify-between">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Add User</button>
    </div>
</form>
<script>
    const inputUserName = document.getElementById('user_name');

    inputUserName.addEventListener('input', function(event) {
        const inputValue = event.target.value;
        console.log(inputValue);
        fetch('/users/find', {
            method: 'POST',
            body: JSON.stringify({ name: inputValue }),
            headers: {
                'Content-Type': 'application/json'
            }
        }).then(response => {
            if (response.ok) {
                return response.json();
            }
            throw new Error('Network response was not ok.');
        }).then(response => {
            let html = `<ul class="bg-white	w-full	">`;
            console.log(typeof response);
            response.forEach(item => {
                html += `<li class="user-list cursor-pointer" data-id="${item.id}">${item.name} - ${item.email}</li>`;
            });
            html += `</ul>`;
            document.getElementById('user_results').innerHTML = html;
            selectUser();
        }).then(data => {
            console.log('Response:', data);
        }).catch(error => {
            console.error('Error:', error);
        });
    });


    function selectUser(){
        const userListItems = document.querySelectorAll('.user-list');

        console.log(userListItems);
        userListItems.forEach(item => {
            item.addEventListener('click', function() {
                const dataId = this.getAttribute('data-id');
                const textContent = this.textContent.trim();

                document.getElementById('user_id').value = dataId;
                document.getElementById('user_name').value = textContent;
                document.getElementById('user_results').innerHTML = '';
            });
        });
    }

    selectUser();
</script>