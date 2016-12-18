<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title> About page </title>
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="stylesheet" href="">


</head>

<body>

    @foreach($people as $persons)
        <li> {{ $persons }}</li>
    @endforeach


</body>
</html>