<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Laravel</title>
</head>

<body class="bg-gray-100 text-grey-700">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-3 my-10">
            @foreach ($posts as $post)
                <div class="bg-white hover:bg-blue-100 border border-gray-200 p-5">
                    <h2 class="font-bold text-lg mb-4">{{ $post->title }}</h2>
                    <p class="text-xs">{{ $post->excerpt }}</p>
                    <p class="text-xs text-right">{{ $post->published_at }}</p>
                </div>
            @endforeach
        </div>
        <div class="mb-10">
            {{ $posts->links() }}
        </div>
    </div>
</body>

</html>
