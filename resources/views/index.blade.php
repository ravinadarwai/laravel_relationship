<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts with Categories</title>
</head>
<body>

    <h1>Posts with Categories</h1>

    @foreach ($posts as $post)
        <article>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->description }}</p>
            <br>
            <ul>
                @foreach ($post->categories as $category)
                    <li>{{ $category->name }}</li>
                @endforeach
            </ul>
        </article>
        <hr>
    @endforeach

</body>
</html>
