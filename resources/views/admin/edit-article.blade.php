@extends('admin.partials.master') {{-- Gantikan dengan layout yang Anda gunakan --}}

@section('content')
<div class="container">
    <h2>Edit Article</h2>
    <form action="{{ route('article.update', $article) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ old('title', $article->title) }}" required>

        <label for="author">Author:</label>
        <input type="text" name="author" value="{{ old('author', $article->author) }}" required>

        <label for="content">Content:</label>
        <textarea name="content" required>{{ old('content', $article->content) }}</textarea>

        <label for="image">Image:</label>
        <input type="file" name="image" accept="image/*">

        <button type="submit">Update Article</button>
    </form>
</div>

@endsection
