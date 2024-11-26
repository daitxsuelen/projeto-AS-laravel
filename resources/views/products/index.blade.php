<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>

    <a href="{{ url('product/create') }}">Add New Post</a>

    <ul>
        @foreach ($posts as $post)
            <li>
                <strong>{{ $post->title }}</strong> 
                (Categoria: {{ $post->categoria->name }})
                <p>{{ $post->content }}</p>
                <a href="{{ url('product/edit', $post->id) }}">Edit</a>
                <form action="{{ url('post', $post->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>