<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Comic Book Collection</title>
    <link rel="stylesheet" href={{URL::asset('/css/app.css');}}>
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css">
    <script src="https://kit.fontawesome.com/01312694ed.js" crossorigin="anonymous"></script>
</head>
<body style="min-width: 400px; background-image: url({{URL::asset('/images/comicBookCollage.jpg')}});">
    <div class="hero body background-light-purple" style="font-family: 'Lato'; color: white; text-align: center; border-bottom-style: solid; border-width: .2em; border-color: black;">
        <h1 class="text-bold">My Comic Book Collection</h1>
    </div>
    <div>
        @yield('content')
    </div>
</body>
</html>