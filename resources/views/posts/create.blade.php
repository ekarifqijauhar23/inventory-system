<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Item</title>
</head>
<body>
    <h1>Create a New Item</h1>
    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <label for="name">Item Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>
        <button type="submit">Save</button>
    </form>
</body>
</html>
