<html>
<head>
</head>
<body>

@foreach ($voitures as $voiture)

{{ $voiture->modele }} <a href="{{ Route('attached', $voiture->id)}}" > add </a><br>

@endforeach

</body>
</html>