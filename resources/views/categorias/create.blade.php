<!DOCTYPE html>
<html>
<head>
    <title>Add Categoria</title>
</head>
<body>
    <h1>Add Categoria</h1>

    <form action="{{ url('categoria') }}" method="POST">
        @csrf
        <label for="name">Categoria Name:</label>
        <input type="text" name="name" id="name" required>
        <button type="submit">Save</button>
    </form>

    <a href="{{ url('categoria') }}">Back</a>
</body>
</html>