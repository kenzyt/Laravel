<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste</title>
</head>
<body>

@foreach($tags as $tag)
    {{$tag->nom}}<br>
@endforeach

</body>
</html>