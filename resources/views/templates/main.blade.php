<!DOCTYPE html>
<html lang="ru">

<head>
    <title>СлавныеНовости</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,400&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="/css/app.css"/>
    <link rel="shortcut icon" href="images/icon.ico"/>
</head>
<body>
@include('templates.header')
@include('templates.introduction')

<main class="page__body container">
    @yield('content')
</main>

@include('templates.footer')

<script src="js/app.js"></script>

</body>
</html>
