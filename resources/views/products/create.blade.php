<!DOCTYPE html>
<html>
<head>
    <title>Add Produto</title>
</head>
<body>
    <h1>Add Produto</h1>

    <form action="{{ url('product') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>

        <label for="content">Content:</label>
        <textarea name="content" id="content" required></textarea>

        <label for="preco">Categoria:</label>
        <select name="preco" id="preco" required>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
            @endforeach
        </select>

        <button type="submit">Save</button>
    </form>

    <a href="{{ url('product') }}">Back</a>
</body>
</html>