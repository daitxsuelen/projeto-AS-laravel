<!DOCTYPE html>
<html>
<head>
    <title>Edit Categoria</title>
</head>
<body>
    <h1>Edit Categoria</h1>

    <form action="{{ url('categoria', $categoria->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Categoria Name:</label>
        <input type="text" name="name" id="name" value="{{ $categoria->name }}" required>
        <button type="submit">Update</button>
    </form>

    <a href="{{ url('categoria/index') }}">Back</a>
</body>
</html>