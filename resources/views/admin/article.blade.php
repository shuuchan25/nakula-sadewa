@extends('admin.partials.master') {{-- Gantikan dengan layout yang Anda gunakan --}}

@section('content')
    {{-- Formulir Pembuatan Artikel --}}
    <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" required>

        <label for="author">Author:</label>
        <input type="text" name="author" required>

        <label for="content">Content:</label>
        <textarea name="content" required></textarea>

        <label for="image">Image:</label>
        <input type="file" name="image" accept="image/*" required>

        <button type="submit">Create Article</button>
    </form>

    {{-- Menampilkan Data Artikel --}}
@if($articles->count() > 0)
<h2>Article List</h2>
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Content</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($articles as $article)
            <tr>
                <td>{{ $article->title }}</td>
                <td>{{ $article->author }}</td>
                <td>{{ $article->content }}</td>
                <td>
                    <img src="{{ Storage::url($article->image) }}" alt="Article Image" width="100">
                </td>
                <td>
                    <a href="{{ route('article.edit', $article) }}" class="btn btn-primary"> Edit</a>
                    <form action="{{ route('article.destroy', $article) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@else
<p>No articles found.</p>
@endif

@endsection
