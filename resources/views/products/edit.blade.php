<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>

    <form action="{{ url('product/update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $post->title }}" required>

        <label for="content">Content:</label>
        <textarea name="content" id="content" required>{{ $post->content }}</textarea>

        <label for="preco">Categoria:</label>
        <select name="preco" id="preco" required>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}" {{ $product->preco == $categoria->id ? 'selected' : '' }}>
                    {{ $categoria->name }}
                </option>
            @endforeach
        </select>

        <button type="submit">Update</button>
    </form>

    <a href="{{ url('product/index') }}">Back</a>
</body>
</html>