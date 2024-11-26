<!DOCTYPE html>
<html>
<head>
    <title>Categorias</title>
</head>
<body>
    <h1>Categorias</h1>

    <a href="{{ url('categoria/create') }}">Add New Categoria</a>

    <ul>
        @foreach ($categorias as $categoria)
            <li>
                {{ $categoria->name }}
                <a href="{{ url('categoria/edit', $categoria->id) }}">Edit</a>
                <form action="{{ url('categoria/'. $categoria->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>