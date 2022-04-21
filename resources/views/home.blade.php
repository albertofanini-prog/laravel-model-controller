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
    <div class="movies_wrapper">
        <ul class="movies_list">
            @foreach ($movies as $movie)
                <li class="movie">
                    <h1>
                        Titolo: {{$movie->title}}
                    </h1>
                    <h4>
                        Titolo originale: {{$movie->original_title}}
                    </h4>
                    <h4>
                        Nazionalità: {{$movie->nationality}}
                    </h4>
                    <h4>
                        Data di rilascio: {{$movie->date}}
                    </h4>
                    <h4>
                        Voto medio: {{$movie->vote}}/10
                    </h4>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>