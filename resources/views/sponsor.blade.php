<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sponsor</title>
</head>
<body>
  <h1>I nostri Sponsor</h1>
  <h2>
    @foreach($cibo as $partner)
      {{ $partner}}@if (!$loop->last),@endif
    @endforeach
  </h2>
</body>
</html>
