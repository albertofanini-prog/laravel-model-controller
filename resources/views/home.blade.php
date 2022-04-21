<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL('./css/app.css')}}">
    <title>Film</title>
</head>
<body>
    <ul class="movies_list">
        @foreach ($movies as $movie)
            <li class="movie">
                {{$movie->title}}
            </li>
        @endforeach
    </ul>
</body>
</html>