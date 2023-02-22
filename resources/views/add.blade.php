@extends('layouts.index')

@section('page_title', 'Home Page')
@section('single', 'single')

@section('content')
    <!-- Main -->
    <form method="post" enctype="multipart/form-data" class="post" action="{{ route('article.createPost') }}">
        <h1>Add Post</h1>
        @csrf
        <input type="text" name="title" placeholder="Title"><br>
        <input type="text" name="anons_title" placeholder="Anons Title"><br>
        <textarea name="content" placeholder="Post content"></textarea><br>
        <input type="file" name="file"><br><br>

        <select name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category['id'] }}">
                    {{ $category['name'] }}
                </option>
            @endforeach
        </select>

        <br />

        <input type="submit" class="button big fit" value="Add Post">
    </form>
    <div id="main">

        <!-- Post -->

    </div>
    <!-- Footer -->
    <section id="footer">
        <p class="copyright">&copy; Blog. Design: <a href="http://html5up.net">HTML5 UP</a>.</p>
    </section>
@endsection
